<?php
/**
 * WP-CI The CodeIgniter plugin for WordPress.
 * Copyright (C)2009-2010 Collegeman.net, LLC.
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/**
 * This subclass of the core Model class adds a few more features to the
 * basic ActiveRecord API.
 */
class MY_Model extends Model {
	
	var $id;
	var $_table;
	var $_ignore_list = array();
	var $_prop_index;
	var $_is_valid = true;
	var $_is_bool = array();
	
	function MY_Model($table = null) {
		parent::Model();
		if ($table)
			$this->set_table($table);
	}
	
	function set_bool($field) {
		if (is_array($field)) {
			foreach($field as $f)
				$this->_is_bool[] = $f;
		}
		else {
			$this->_is_bool[] = $field;
		}
	}
	
	/**
	 * Retrieve the name of the underlying database table. 
	 */
	final function get_table() {
		return $this->_table;
	}
	
	/**
	 * Set the name of the table to be used by this model.
	 */
	final function set_table($table_name) {
		$this->_table = $table_name;
	}
	
	/**
	 * Load the instance of this model stored at primary key $id.
	 * @param mixed The primary key value.
	 * @throws Exception When no record is found having primary key $id
	 */
	final function get($id) {
		if ($id) {
			$rs = $this->db->get_where($this->get_table(), array('id' => $id), 1);
			if ($rs->num_rows() > 0) {
				$class = get_class($this);
				$model = new $class();
				$model->bind($rs->row());
				return $model;
			}
			else {
				$class = get_class($this);
				throw new Exception("Failed to load $class ($id).");
			}
		}
		else {
			return $this->query();
		}
	}
	
	final function query() {
		return $this->db->from($this->get_table());
	}
	
	/**
	 * Load all of the records stored in this model.
	 */
	final function getAll($order_by = null, $dir = "asc") {
		if ($order_by) {
			if (!is_array($order_by)) {
				$order_by = array($order_by => $dir);
			}
			foreach($order_by as $field => $dir) {
				$this->db->order_by($field, $dir);
			}
		}
		
		return $this->db->get($this->get_table());
	}
	
	/**
	 * The magic method __set makes it possible to bind an array or
	 * object of data to an instance of this model, as in
	 *     $this->Model_name->properties = $_POST;
	 * In all other cases, the value of $args is simply assigned to
	 * the object property $name.
	 *
	 * If you need to further restrict the values selected from $args
	 * in binding to this model or require XSS "cleaning" before the
	 * bind, use MY_Model::bind(Mixed, Array, boolean) instead.
	 */
	final function __set($name, $args) {
		if ($name == 'properties') {
			$this->bind($args, array('id'));
		}
		else {
			$this->$name = $args;
		}
	}
	
	/**
	 * Binds the data in $source to this instance of the model.
	 * @param Mixed An array or an object containing source data, e.g., a reference to $_POST or $_GET
	 * @param Array An array of keys or object properties that should not be bound
	 * @param boolean When TRUE, use Input::xss_clean(Mixed) to remove malicious content; defaults to FALSE.
	 */
	final function bind($source, $ignore = array(), $xss_clean = FALSE) {
		global $IN;
		
		$this->_is_valid = $this->validate();
		
		if (!is_array($source)) {
			if (is_object($source)) {
				$source = get_object_vars($source);
			}
			else if (is_string($source)) {
				$source = wp_parse_args($source);
			}
		}
		
		foreach($this->get_properties() as $k => $v) {
			if (!in_array($k, $ignore)) {
				if (in_array($k, $this->_is_bool)) {
					$v = (isset($source[$k]) ? $source[$k] : null);
					$v = ($v == '1' ? 1 : 0);
					$this->$k = $v;
				}
				else if (isset($source[$k])) {
					$v = $source[$k];
					$this->$k = ( $xss_clean ? $IN->xss_clean($v) : $v );
				}
			}
		}
	}
	
	/**
	 * Override this method in subclasses of MY_Model to implement data validation.
	 * All this method need do is return a boolean value: TRUE when valid, otherwise FALSE.
	 * The CodeIgniter validation helper may be used here to integrate model
	 * validation with Form input validation.
	 */
	function validate() {
		return true;
	}
	
	/**
	 * @return An Array of the public properties and values on this model, not including
	 * any property that begins with an underscore or whose name is stored in $this->_ignore_list.
	 */
	protected function get_properties() {
		$props = array();
		foreach(get_object_vars($this) as $k => $v) {
			if (strncmp($k, '_', 1) !== 0 && !in_array($k, $this->_ignore_list)) {
				$props[$k] = $v;
			}
		}
		return $props;
	}
	
	/**
	 * When defined, attempt to delete the instance of this model at primary key $id.
	 * When undefined, attempt to delete this instance of the model.
	 * @param Mixed Primary key of record to delete, or NULL for deleting this record.
	 */
	final function delete($id = null) {
		if ($id) {
			$this->db->delete($this->get_table(), array('id' => $id));
		}
		else if (isset($this->id) && $this->id) {
			$this->db->delete($this->get_table(), array('id' => $this->id));
		}
	}
	
	/**
	 * Dumps any data stored in this model instance.
	 */
	final function reset() {
		foreach($this->get_properties() as $k => $v) {
			$this->$k = null;
		}
	}
	
	/**
	 * Saves this instance of the model to the database.
	 */
	final function save() {
		if ($this->_is_valid) {
			$props = $this->get_properties();
			if (isset($props['id']) && $props['id']) {
				$id = $props['id'];
				unset($props['id']);
				$this->db->where('id', $id);
				$this->db->update($this->get_table(), $props);
			}
			else {
				unset($props['id']);
				$this->db->insert($this->get_table(), $props);
				$this->id = $this->db->insert_id();
			}
			
			if ($message = $this->db->_error_message()) {
				failure($message);
				return false;
			}
			
			return true;
		}
		else {
			return false;
		}
	}
	
	/**
	 * Mark a property of this model class as transient, meaning that on
	 * save it will not be included in the data written to the database.
	 * Use this method in your subclasses' constructors to effectively 
	 * create "public" properties that are ignored by writing.
	 * @param String The name of the property to be ignored
	 */
	function transient($property) {
		$this->_ignore_list[] = $property;
	}
	
	/**
	 * We've overridden Model::_assign_libraries to ensure that any
	 * properties imported from the controller are ignored as transients.
	 */
	function _assign_libraries($use_reference = TRUE)
	{
		$CI =& get_instance();				
		$class = get_class($this);
		
		foreach (array_keys(get_object_vars($CI)) as $key)
		{
			if ( ! isset($this->$key) AND $key != $this->_parent_name)
			{			
				log_message('debug', "Assigning $key to Model $class");
				// make sure that any reference copied in this way does not
				// become part of the persistent data stored in this object
				$this->_ignore_list[] = $key;
				
				// In some cases using references can cause
				// problems so we'll conditionally use them
				if ($use_reference == TRUE)
				{
					$this->$key = NULL; // Needed to prevent reference errors with some configurations
					$this->$key =& $CI->$key;
				}
				else
				{
					$this->$key = $CI->$key;
				}
			}
		}		
	}
	
}