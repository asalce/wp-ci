<?php global $CI; ?>

<div class="wrap">
	<?php admin_head('WP-CI Settings'); ?>

	<form method="post" action="<?php admin_link('saveSettings') ?>">
		<?php if ($success = $CI->session->flashdata('success')): ?>
			<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204);"><p><?php echo $success ?></p></div>
			<br />
		<?php endif; ?>

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
					), get_option('wpci_logging_threshold')) ?>
				</td>
			</tr>
			<tr>
				<th class="row">Encryption Key</th>
				<td>
					<?php echo form_input(array('name' => 'encryption_key', 'value' => wpci_get_encryption_key(), 'class' => 'regular-text')) ?>
				</td>
			</tr>
			
		</table>
		
		<p class="submit">
			<input class="button-primary icon-button" type="submit" value="Save Changes" name="Submit"/>
		</p>
		
	</form>
</div>