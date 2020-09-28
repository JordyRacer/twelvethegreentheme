<?php
/*
 * Plugin Name: Timely Booking Widgets
 * Plugin URI: http://wordpress.org/extend/plugins/timely-booking-button/
 * Description: Timely is appointment software for beauty and wellbeing businesses. As well as managing your business, staff, and customers within the app, you can also integrate Timely with your WordPress site to offer online bookings.
 * Author: Timely - Appointment software
 * Version: 1.1
 * Author URI: https://www.gettimely.com/
 */

include('timely-booking-button-widget.php');
include('timely-booking-frame-widget.php');

function tbb_admin_actions()
{
    add_options_page("Timely", "Timely", "manage_options", "timely-booking-widgets", "tbb_admin");
}

function tbb_admin()
{
    include('timely-booking-widgets-admin.php');
}

function tbb_init()
{
    wp_register_sidebar_widget('tbb-widget', 'Timely Booking Button', 'tbb_widget_output', array('description' => 'Add a booking button for your Timely account'));
    wp_register_sidebar_widget('tbw-widget', 'Timely Booking Widget', 'tbw_widget_output', array('description' => 'Add a booking widget for your Timely account'));
}

function tbb_widget_output($args)
{
    $account = get_option('tbb_account');
    $colour = get_option('tbb_colour');

    if ($account != "") {
        if (is_array($args)) {
            extract($args);
        }

        if (isset($before_widget)) {
            echo $before_widget;
        } ?>
        <div style='padding: 20px 0;'>
            <script id="timelyScript" src="//book.gettimely.com/widget/book-button-v1.5.js"></script>
            <script>
                var timelyButton = new timelyButton("<?php echo $account; ?>"
                    <?php echo ($colour == 'dark' ? ', { style : "dark" }' : ''); ?>);
            </script>
        </div>
        <?php
        if (isset($after_widget)) {
            echo $after_widget;
        }
    }
}

function tbw_widget_output($args)
{
    $width = get_option('tbw_width');
    $height = get_option('tbw_height');
    $resp = get_option('tbw_resp');
    $account = get_option('tbb_account');

    if ($account != "") {
        if (is_array($args)) {
            extract($args);
        }

        if (isset($before_widget)) {
            echo $before_widget;
        } ?>
        <iframe src="//<?php echo $account; ?>.gettimely.com/book/embed" scrolling="no" id="timelyWidget" style="<?php echo ($resp ? "margin: 0 auto; display: block; width: 100%; max-" : "") ?>width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; border: 1px solid #4f606b;"></iframe>
<?php
        if (isset($after_widget)) {
            echo $after_widget;
        }
    }
}

function tbb_account_check_callback()
{
    $url = "https://app.gettimely.com/Register/GetSubdomainAvailability/" . $_POST['tbb_account'];
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

    $response = curl_exec($curl);
    echo ($response == "false" ? "correct" : "wrong");

    die(); // this is required to return a proper result
}

function tbb_admin_register_head()
{
    $siteurl = get_option('siteurl');
    $url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/timely-booking-widgets.css';
    echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
}

function tbb_admin_add_settings_link($links)
{
    $settings_link = '<a href="options-general.php?page=timely-booking-widgets">Settings</a>';
    array_push($links, $settings_link);
    return $links;
}

$plugin = plugin_basename(__FILE__);

add_filter("plugin_action_links_$plugin", 'tbb_admin_add_settings_link');

add_action('admin_head', 'tbb_admin_register_head');
add_action("plugins_loaded", "tbb_init");
add_action('admin_menu', 'tbb_admin_actions');
add_action('wp_ajax_tbb_account_check', 'tbb_account_check_callback');

add_shortcode('tbb-button', 'tbb_widget_output');
add_shortcode('tbw-widget', 'tbw_widget_output');

?>