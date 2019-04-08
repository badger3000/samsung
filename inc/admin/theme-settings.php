<?php
/**
 * Theme Settings
 */
function wd_theme_settings_page()
{
   ?>
	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
		<form method="post" action="<?php echo esc_url(admin_url('options.php')); ?>">
			<?php
				settings_fields("wd_theme_options");
				do_settings_sections("wd_theme_options");
				submit_button();
			?>
		</form>
	</div>
	<?php
}


function wd_add_theme_menu_item()
{
	add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'wd_theme_options', 'wd_theme_settings_page', null, 99);
}
add_action('admin_menu', 'wd_add_theme_menu_item');

function wd_field_text($args)
{
	extract($args);

	$type = isset($type) ? $type : 'text';
	$placeholder = isset($placeholder) ? $placeholder : '';

	echo '<input class="'.$class.'" type="'.$type.'" name="'.$id.'" value="'.esc_attr(get_option($id)).'" placeholder="'.esc_attr($placeholder).'">';

	if (isset($description))
	{
		$desc_class = isset($description_class) ? $description_class : '';
		echo '<p class="description '.$desc_class.'">'.esc_html($description).'</p>';
	}
}

function wd_display_theme_panel_fields()
{
	$text_args = array(
		'type' => 'string',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => NULL
	);

	$url_args = array(
		'type' => 'string',
		'sanitize_callback' => 'esc_url_raw',
		'default' => NULL
  );
  add_settings_section(
		'wd_theme_section_quote',
		'Homepage Quote',
		null,
		'wd_theme_options'
	);

	add_settings_field(
		'wd_field_quote_url',
		'Quote',
		'wd_field_text',
		'wd_theme_options',
		'wd_theme_section_quote',
		array(
			'id' => 'wd_field_twitter_url',
			'class' => 'regular-text'
		)
	);
	register_setting('wd_theme_options', 'wd_field_twitter_url', $url_args);
  
}
add_action('admin_init', 'wd_display_theme_panel_fields');

