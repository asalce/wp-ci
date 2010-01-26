<?php global $CI; ui_tabs(); ?>

<div class="wrap">
	<?php admin_head('WP-CI Settings'); ?>

	<?php echo form_open('saveSettings') ?>
		
		<?php success_and_failure(); ?>
		
		<?php echo form_hidden('nonce', get_nonce()) ?>
		
		<div class="ui-tabs">
			<ul class="ui-tabs-nav">
				<li><a href="#general">General</a></li>
				<li><a href="#debugging">Debugging</a></li>
			</ul>
			<div id="general">
				<table class="form-table">
					<tr>
						<th class="row">Encryption Key</th>
						<td>
							<?php echo form_input(array('name' => 'encryption_key', 'value' => wpci_get_encryption_key(), 'class' => 'regular-text')) ?>
						</td>
					</tr>
					<tr>
						<th class="row">Gateway Slug</th>
						<td>
							<?php echo form_input(array('name' => 'slug', 'value' => wpci_get_slug(), 'class' => 'regular-text')) ?>
						</td>
					</tr>
					<tr>
						<th class="row">SSL Support</th>
						<td>
							<?php echo form_dropdown('ssl_enabled', array(
								'' => 'Disabled&nbsp;&nbsp;',
								1 => 'Enabled'
							), wpci_get_ssl_enabled()) ?>
						</td>
					</tr>
				</table>
			</div>
			<div id="debugging">
				<table class="form-table">
					<tr>
						<th class="row">Application Debugging</th>
						<td>
							<?php echo form_dropdown('application_debugging_enabled', array(
								'' => 'Disabled&nbsp;&nbsp;',
								1 => 'Enabled'
							), wpci_get_application_debugging_enabled()) ?>
						</td>
					</tr>
					<tr>
						<th class="row">Logging Threshold</th>
						<td>
							<?php echo form_dropdown('logging_threshold', array(
								'' => 'Debug when WP_DEBUG is TRUE',
								0 => 'Logging disabled',
								1 => 'Error Messages (including PHP errors)',
								2 => 'Debug Messages',
								3 => 'Informational Messages',
								4 => 'All Messages'
							), wpci_get_logging_threshold()) ?>
						</td>
					</tr>
					<tr>
						<th class="row">Database Debugging</th>
						<td>
							<?php echo form_dropdown('database_debugging_enabled', array(
								'' => 'Disabled&nbsp;&nbsp;',
								1 => 'Enabled'
							), wpci_get_database_debugging_enabled()) ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<p class="submit">
			<input class="button-primary icon-button" type="submit" value="Save Changes" name="Submit"/>
		</p>
		
	</form>
</div>