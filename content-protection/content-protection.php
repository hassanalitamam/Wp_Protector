<?php
/*
 * Plugin Name:       WP Protector
 * Plugin URI:        https://github.com/hassanalitamam/Wp_Protector
 * Description:       Protect content by disabling copy, right-click, and developer tools on specific pages and posts.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hassan Ali Tamam
 * Author URI:        https://wa.me/201095890941
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       content-protection-pro
 */

if (!defined('ABSPATH')) {
    exit;
}

// Add a settings page in the control panel
function content_protection_menu() {
    add_menu_page(
        'WP Protector',
        'WP Protector',
        'manage_options',
        'content-protection',
        'content_protection_settings_page',
        'dashicons-shield',
        100
    );
}
add_action('admin_menu', 'content_protection_menu');

// Show the settings page
function content_protection_settings_page() {
    ?>
    <div class="wrap">
        <h1>WP Protector Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('content_protection_settings');
            do_settings_sections('content-protection');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Create settings fields for the add-on
function content_protection_register_settings() {
    register_setting('content_protection_settings', 'content_protection_options');

    add_settings_section(
        'content_protection_general',
        'General Settings',
        'content_protection_general_section_callback',
        'content-protection'
    );

    $settings = [
        'disable_copy_all' => 'Disable Copy Everywhere',
        'disable_right_click_all' => 'Disable Right Click Everywhere',
        'disable_dev_tools_all' => 'Disable Developer Tools Everywhere',
        'disable_copy_pages' => 'Disable Copy on Specific Pages',
        'disable_right_click_pages' => 'Disable Right Click on Specific Pages',
        'disable_dev_tools_pages' => 'Disable Developer Tools on Specific Pages',
        'disable_copy_posts' => 'Disable Copy on Specific Posts',
        'disable_right_click_posts' => 'Disable Right Click on Specific Posts',
        'disable_dev_tools_posts' => 'Disable Developer Tools on Specific Posts',
    ];

    foreach ($settings as $key => $label) {
        add_settings_field(
            $key,
            $label,
            strpos($key, 'pages') !== false || strpos($key, 'posts') !== false
                ? 'content_protection_multi_select_callback'
                : 'content_protection_checkbox_callback',
            'content-protection',
            'content_protection_general',
            array($key)
        );
    }
}
add_action('admin_init', 'content_protection_register_settings');

// Callback to the General section in Settings
function content_protection_general_section_callback() {
    echo '<p>Configure the content protection settings for your website.</p>';
}

// Callback for checkbox fields
function content_protection_checkbox_callback($args) {
    $options = get_option('content_protection_options');
    $field = $args[0];
    $checked = isset($options[$field]) && $options[$field] ? 'checked' : '';
    echo "<input type='checkbox' id='$field' name='content_protection_options[$field]' value='1' $checked />";
}

// Select pages or articles
function content_protection_multi_select_callback($args) {
    $options = get_option('content_protection_options');
    $field = $args[0];
    $selected_items = isset($options[$field]) ? $options[$field] : array();
    
    $items = [];
    if (strpos($field, 'pages') !== false) {
        $items = get_pages();
    } else {
        $items = get_posts(array('numberposts' => -1));
    }

    echo "<select multiple id='$field' name='content_protection_options[$field][]' style='width: 300px; height: 150px;'>";
    foreach ($items as $item) {
        $selected = in_array($item->ID, $selected_items) ? 'selected' : '';
        echo "<option value='{$item->ID}' $selected>{$item->post_title}</option>";
    }
    echo "</select>";
    echo "<p class='description'>Hold Ctrl (Windows) or Cmd (Mac) to select multiple items.</p>";
}

// Enqueue scripts for front-end
function content_protection_enqueue_scripts() {
    // Enqueue SweetAlert2 library
    wp_enqueue_script('sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), '11', true);
    wp_enqueue_script('wp-protector', plugins_url('js/content-protection.js', __FILE__), array('jquery', 'sweetalert2'), '1.5', true);


    // Localize scripts with settings from PHP to JavaScript
    $options = get_option('content_protection_options', array());
    $settings = array(
        'disable_copy_all' => !empty($options['disable_copy_all']),
        'disable_right_click_all' => !empty($options['disable_right_click_all']),
        'disable_dev_tools_all' => !empty($options['disable_dev_tools_all']),
        'disable_copy_pages' => !empty($options['disable_copy_pages']) ? $options['disable_copy_pages'] : array(),
        'disable_right_click_pages' => !empty($options['disable_right_click_pages']) ? $options['disable_right_click_pages'] : array(),
        'disable_dev_tools_pages' => !empty($options['disable_dev_tools_pages']) ? $options['disable_dev_tools_pages'] : array(),
        'disable_copy_posts' => !empty($options['disable_copy_posts']) ? $options['disable_copy_posts'] : array(),
        'disable_right_click_posts' => !empty($options['disable_right_click_posts']) ? $options['disable_right_click_posts'] : array(),
        'disable_dev_tools_posts' => !empty($options['disable_dev_tools_posts']) ? $options['disable_dev_tools_posts'] : array(),
        'current_page_id' => get_queried_object_id(),
        'current_post_id' => is_singular() ? get_the_ID() : null,
    );

    wp_localize_script('wp-protector', 'cppSettings', $settings);
}
add_action('wp_enqueue_scripts', 'content_protection_enqueue_scripts');

function content_protection_admin_styles() {
    wp_enqueue_style( 'content-protection-admin-styles', plugins_url( 'css/wp-protector-admin-styles.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'content_protection_admin_styles' );