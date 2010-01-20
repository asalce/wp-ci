<?php global $CI; ?>

<div class="wrap">
	<?php admin_head('WP-CI Settings'); ?>

	<form method="post" action="<?php admin_link('saveSettings') ?>">
		
		<?php success_and_failure(); ?>
		
		<?php echo form_hidden('nonce', get_nonce()) ?>
		
		<table class="form-table">
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
				<th class="row">Encryption Key</th>
				<td>
					<?php echo form_input(array('name' => 'encryption_key', 'value' => wpci_get_encryption_key(), 'class' => 'regular-text')) ?>
				</td>
			</tr>
			<tr>
				<th class="row">Gateway Slug</th>
				<td>
					<?php echo form_input(array('name' => 'forward_gateway_slug', 'value' => wpci_get_forward_gateway_slug(), 'class' => 'regular-text')) ?>
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
		
		<p class="submit">
			<input class="button-primary icon-button" type="submit" value="Save Changes" name="Submit"/>
		</p>
		
	</form>
</div>