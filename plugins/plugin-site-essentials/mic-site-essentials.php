<?php
/*
Plugin Name: MIC Site Essentials
Plugin URI:  http://www.marketingincolor.com
Description: An easy way to include essentials for every site (social links, analytics, etc.)
Version:     0.0.1
Author:      Marketing in Color / Nate Beers
Author URI:  https://nathanbbers.net
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

MIC Site Essentials is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
MIC Site Essentials is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with MIC Site Essentials. If not, see {License URI}.
*/

function mic_theme_menu()
{
  add_menu_page( 'Site Essentials', 'Site Essentials', 'manage_options', 'mic_theme_options.php', 'mic_theme_page');
}
add_action('admin_menu', 'mic_theme_menu');

function mic_theme_page()
{
?>
    <div class="section panel">
      <h1>Enter Your Site Essentials</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
      <hr>
        <?php

          settings_fields('mic_theme_options');

          do_settings_sections('mic_theme_options.php');
          echo '<hr>';
        ?>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
      </form>
      <h3>Developer Notes</h3>
      <p>Example use in theme:</p>
      <div class="code-block">
	      	$options = get_option('mic_theme_options');<br>
	      	echo $options['facebook_link'];<br>
	      	echo $options['twitter_link'];<br>
	      	echo $options['linkedin_link'];<br>
	      	echo $options['youtube_link'];<br>
	        echo $options['gplus_link'];<br>
	        echo $options['webmaster_tools'];<br>
	        echo $options['gtm_code_head'];<br>
	        echo $options['gtm_code_body'];<br>
          echo $options['ga_code'];<br>
          echo $options['404_title'];<br>
          echo $options['404_body'];<br>
          echo $options['404_left_button_text'];<br>
          echo $options['404_left_button_icon'];<br>
          echo $options['404_middle_button_text'];<br>
          echo $options['404_middle_button_icon'];<br>
	        echo $options['404_right_button_text'];<br>
          echo $options['404_right_button_icon'];<br>
      </div>
    </div>
    <?php
}

add_action( 'admin_init', 'mic_register_settings' );

/**
 * Function to register the settings
 */
function mic_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'mic_theme_options', 'mic_theme_options' );

    // Add settings section
    add_settings_section( 'mic_text_section', 'Social Links', 'mic_display_section', 'mic_theme_options.php' );

    // Create textbox field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'twitter_link',
      'name'      => 'twitter_link',
      'desc'      => 'Twitter Link - Example: http://twitter.com/username',
      'std'       => '',
      'label_for' => 'twitter_link',
      'class'     => 'css_class'
    );

    add_settings_field( 'twitter_link', 'Twitter', 'mic_display_setting', 'mic_theme_options.php', 'mic_text_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => 'facebook_link',
      'name'      => 'facebook_link',
      'desc'      => 'Facebook Link - Example: http://facebook.com/username',
      'std'       => '',
      'label_for' => 'facebook_link',
      'class'     => 'css_class'
    );

    add_settings_field( 'facebook_link', 'Facebook', 'mic_display_setting', 'mic_theme_options.php', 'mic_text_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => 'gplus_link',
      'name'      => 'gplus_link',
      'desc'      => 'Google+ Link - Example: http://plus.google.com/user_id',
      'std'       => '',
      'label_for' => 'gplus_link',
      'class'     => 'css_class'
    );

    add_settings_field( 'gplus_link', 'Google+', 'mic_display_setting', 'mic_theme_options.php', 'mic_text_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => 'youtube_link',
      'name'      => 'youtube_link',
      'desc'      => 'Youtube Link - Example: https://www.youtube.com/channel/channel_id',
      'std'       => '',
      'label_for' => 'youtube_link',
      'class'     => 'css_class'
    );

    add_settings_field( 'youtube_ink', 'Youtube', 'mic_display_setting', 'mic_theme_options.php', 'mic_text_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => 'linkedin_link',
      'name'      => 'linkedin_link',
      'desc'      => 'LinkedIn Link - Example: http://linkedin.com/in/username',
      'std'       => '',
      'label_for' => 'linkedin_link',
      'class'     => 'css_class'
    );

    add_settings_field( 'linkedin_link', 'LinkedIn', 'mic_display_setting', 'mic_theme_options.php', 'mic_text_section', $field_args );

    // Add settings section
    add_settings_section( 'google_section', 'Google Scripts', 'mic_display_section', 'mic_theme_options.php' );

    $field_args = array(
      'type'      => 'text',
      'id'        => 'webmaster_tools',
      'name'      => 'webmaster_tools',
      'desc'      => 'Meta Tag - Example: meta name="google-site-verification" content="-rG3bt3ifLDoBesNl-dWjDGRwv"',
      'std'       => '',
      'label_for' => 'webmaster_tools',
      'class'     => 'css_class'
    );

    add_settings_field( 'webmaster_tools', 'Webmaster Tools Verification', 'mic_display_setting', 'mic_theme_options.php', 'google_section', $field_args );

    // Create textarea field
    $field_args = array(
      'type'      => 'textarea',
      'id'        => 'gtm_code_head',
      'name'      => 'gtm_code_head',
      'desc'      => 'Tag Manager Code <head>',
      'std'       => '',
      'label_for' => 'gtm_code_head'
    );

    add_settings_field( 'gtm_code_head', 'Tag Manager Code (head)', 'mic_display_setting', 'mic_theme_options.php', 'google_section', $field_args );

    // Create textarea field
    $field_args = array(
      'type'      => 'textarea',
      'id'        => 'gtm_code_body',
      'name'      => 'gtm_code_body',
      'desc'      => 'Tag Manager Code <body>',
      'std'       => '',
      'label_for' => 'gtm_code_body'
    );

    add_settings_field( 'gtm_code_body', 'Tag Manager Code (body)', 'mic_display_setting', 'mic_theme_options.php', 'google_section', $field_args );

    // Create textarea field
    $field_args = array(
      'type'      => 'textarea',
      'id'        => 'ga_code',
      'name'      => 'ga_code',
      'desc'      => 'Google Analytics Code',
      'std'       => '',
      'label_for' => 'ga_code'
    );

    add_settings_field( 'ga_code', 'Google Analytics Code', 'mic_display_setting', 'mic_theme_options.php', 'google_section', $field_args );

    // Add 404 settings section
    add_settings_section( '404_section', '404 Page Text', 'mic_display_section', 'mic_theme_options.php' );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_title',
      'name'      => '404_title',
      'desc'      => '404 Title - Example: Page Not Found',
      'std'       => '',
      'label_for' => '404_title',
      'class'     => 'css_class'
    );

    add_settings_field( '404_title', '404 Title', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    // Create textarea field
    $field_args = array(
      'type'      => 'textarea',
      'id'        => '404_body',
      'name'      => '404_body',
      'desc'      => '404 Paragraph Text',
      'std'       => '',
      'label_for' => '404_body'
    );

    add_settings_field( '404_body', '404 Text', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_left_button_icon',
      'name'      => '404_left_button_icon',
      'desc'      => "Left Button Icon - Example: <i class='fa fa-home' aria-hidden='true'></i>",
      'std'       => '',
      'label_for' => '404_left_button_icon',
      'class'     => 'css_class'
    );

    add_settings_field( '404_left_button_icon', 'Left Button Icon', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_left_button_text',
      'name'      => '404_left_button_text',
      'desc'      => "Left Button Text - Example: Go To Homepage",
      'std'       => '',
      'label_for' => '404_left_button_text',
      'class'     => 'css_class'
    );

    add_settings_field( '404_left_button_text', 'Left Button Text', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_middle_button_icon',
      'name'      => '404_middle_button_icon',
      'desc'      => "Middle Button Icon - Example: <i class='fa fa-question-circle' aria-hidden='true'></i>",
      'std'       => '',
      'label_for' => '404_middle_button_icon',
      'class'     => 'css_class'
    );

    add_settings_field( '404_middle_button_icon', 'Middle Button Icon', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_middle_button_text',
      'name'      => '404_middle_button_text',
      'desc'      => "Middle Button Text - Example: Read FAQs",
      'std'       => '',
      'label_for' => '404_middle_button_text',
      'class'     => 'css_class'
    );

    add_settings_field( '404_middle_button_text', 'Middle Button Text', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_right_button_icon',
      'name'      => '404_right_button_icon',
      'desc'      => "Right Button Icon - Example: <i class='fa fa-cubes' aria-hidden='true'></i>",
      'std'       => '',
      'label_for' => '404_right_button_icon',
      'class'     => 'css_class'
    );

    add_settings_field( '404_right_button_icon', 'Right Button Icon', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

    $field_args = array(
      'type'      => 'text',
      'id'        => '404_right_button_text',
      'name'      => '404_right_button_text',
      'desc'      => "Right Button Text - Example: Become A Distributor",
      'std'       => '',
      'label_for' => '404_right_button_text',
      'class'     => 'css_class'
    );

    add_settings_field( '404_right_button_text', 'Right Button Text', 'mic_display_setting', 'mic_theme_options.php', '404_section', $field_args );

}

// function mic_display_section($section){
	//echo "<hr>";
// }

function mic_display_setting($args)
{
    extract( $args );

    $option_name = 'mic_theme_options';

    $options = get_option( $option_name );

    switch ( $type ) {
          case 'text':
              $options[$id] = stripslashes($options[$id]);
              $options[$id] = esc_attr( $options[$id]);
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
          break;
          case 'textarea':
              $options[$id] = stripslashes($options[$id]);
              //$options[$id] = esc_attr( $options[$id]);
              $options[$id] = esc_html( $options[$id]);

              printf(
              	wp_editor($options[$id], $id,
              		array('textarea_name' => $option_name . "[$id]",
              			'style' => 'width: 200px'
              			))
				);
              // echo "<textarea id='$id' name='" . $option_name . "[$id]' rows='10' cols='50'>".$options[$id]."</textarea>";
              // echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
          break;
    }
}

function mic_validate_settings($input)
{
  foreach($input as $k => $v)
  {
    $newinput[$k] = trim($v);

    // Check the input is a letter or a number
    if(!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
      $newinput[$k] = '';
    }
  }

  return $newinput;
}

// Add styles
add_action('admin_head', 'custom_style');

function custom_style() {
  echo '<style>
    .appearance_page_mic_theme_options .wp-editor-wrap {
      width: 75%;
    }
    .regular-textcss_class {
    	width: 50%;
    }
    .appearance_page_mic_theme_options h3 {
    	font-size: 2em;
    	padding-top: 40px;
    }
    .code-block{
    	box-sizing: border-box;
    	padding: 10px;
    	background-color: lightgray;
    }
  </style>';
}

