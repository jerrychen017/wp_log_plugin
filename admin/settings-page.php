<?php // WPE Log Copier - Settings

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// display the plugin settings page
function swl_display_settings_page() {

	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;

	?>

	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">

			<?php

			// output security fields
			settings_fields( 'swl_options' );

			// output setting sections
			do_settings_sections( 'simple_wpengine_log' );

			// save changes button
			submit_button();

			?>

		</form>
	</div>

	<?php

}
