<?php
/**
 * Theme Settings
 */
function samsungnxt_theme_settings_page()
{
   ?>
	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
		<form method="post" action="<?php echo esc_url(admin_url('options.php')); ?>">
			<?php
				settings_fields("samsungnxt_theme_options");
				do_settings_sections("samsungnxt_theme_options");
				submit_button();
			?>
		</form>
	</div>
	<?php
}


function samsungnxt_add_theme_menu_item()
{
	add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'samsungnxt_theme_options', 'samsungnxt_theme_settings_page', null, 99);
}
add_action('admin_menu', 'samsungnxt_add_theme_menu_item');

function samsungnxt_field_text($args)
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

function samsungnxt_display_theme_panel_fields()
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
		'samsungnxt_theme_section_quote',
		'Homepage Quote',
		null,
		'samsungnxt_theme_options'
	);
  add_settings_field(
		'samsungnxt_image_url',
		'Image',
		'samsungnxt_field_text',
		'samsungnxt_theme_options',
		'samsungnxt_theme_section_quote',
		array(
			'id' => 'samsungnxt_image_url',
			'class' => 'regular-text'
		)
	);
  register_setting('samsungnxt_theme_options', 'samsungnxt_image_url', $url_args);
	add_settings_field(
		'samsungnxt_field_quote_txt',
		'Quote',
		'samsungnxt_field_text',
		'samsungnxt_theme_options',
		'samsungnxt_theme_section_quote',
		array(
			'id' => 'samsungnxt_homepage_quote',
			'class' => 'regular-text'
		)
	);
  register_setting('samsungnxt_theme_options', 'samsungnxt_homepage_quote', $text_args);
  add_settings_field(
		'samsungnxt_field_author_txt',
		'Author',
		'samsungnxt_field_text',
		'samsungnxt_theme_options',
		'samsungnxt_theme_section_quote',
		array(
			'id' => 'samsungnxt_field_author',
			'class' => 'regular-text'
		)
	);
	register_setting('samsungnxt_theme_options', 'samsungnxt_field_author', $text_args);
  
}
add_action('admin_init', 'samsungnxt_display_theme_panel_fields');

