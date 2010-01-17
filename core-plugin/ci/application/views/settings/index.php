<div class="wrap">
	<?php admin_head('WP-CI Settings'); ?>
	<form method="post" action="<?php admin_link(array('action' => 'saveSettings')) ?>">
		<option name="nonce" value="<?php echo nonce() ?>" />
		
	</form>
</div>