<?php
/** 
* @user_can(manage_options) 
* @function(__construct)
*/
class Demo extends Controller {

  /** 
  * @menu(page_title=Hello Sparky&menu_title=Hello Sparky) 
  * @function(index)
  */
  function index() {
    $this->load->view('demo');
  }
  
}