<style scoped>
	div#secondary {
		margin-right: 0;
	}
</style>
<aside style="font-size:small">
	<p style="margin:0;"><strong>Select issuance filters:</strong></p>
	<style scoped>
		select {
			float: right;
		}

		input {
			float: right;
		}
	</style>
	<!--<form name='CDNinterest' action='/wp-content/themes/twentyeleven-child/CDN-Form.php' method='POST'> -->
	<form name='CDNinterest' action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method='POST'>
        <?php include ( get_stylesheet_directory() . '/includes/CDN_Issuers.php'); ?>
		<?php
		include ( get_stylesheet_directory() . '/includes/mat_year.php');
		?>
		<input type="hidden" name="action" value="cdn_interest_form">
		<input type='hidden' name='file' value="<?php echo $file; ?>">
		<input type='hidden' name='filepath' value='<?php echo $filepath; ?>'>
		<input type='hidden' name="countryselect" value="Canada" />
		<p><input type='submit' name='SubmitCDN' value='Submit' /></p>
	</form>
	