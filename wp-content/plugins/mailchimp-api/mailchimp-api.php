<?php
/*
Plugin Name: MailChimp API
Description:  Integrates Opt-in forms with Mailchimp API
Author: Mozr.com
*/

function mapi_options_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wporg_options"
            settings_fields('mapi_options');
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections('mapi');
            ?>
            <table class="form-table">
                <tr valign="top">
                <th scope="row">Mailchimp API Domain:</th>
                <td><input type="text" style="width: 20%;" name="mapi_api_domain" value="<?php echo get_option( 'mapi_api_domain' ); ?>"/></td>
                </tr>
                <tr valign="top">
                <th scope="row">Mailchimp API Key:</th>
                <td><input type="text" style="width: 20%;" name="mapi_api_key" value="<?php echo get_option( 'mapi_api_key' ); ?>"/></td>
                </tr>
            </table>
            <?php
            // output save settings button
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

function mapi_options_page()
{
    add_submenu_page(
        'options-general.php',
        'Mail Chimp API Options',
        'M-API Options',
        'manage_options',
        'mapi',
        'mapi_options_page_html'
    );
}
add_action('admin_menu', 'mapi_options_page');

function mapi_register_settings() {
    add_option( 'mapi_api_key', 'Enter your MailChimp API Key');
    add_option( 'mapi_api_domain', 'Enter your MailChimp API Domain');
    register_setting( 'mapi_options', 'mapi_api_key', 'mapi_callback' );
    register_setting( 'mapi_options', 'mapi_api_domain', 'mapi_domain_callback' );
 }
 add_action( 'admin_init', 'mapi_register_settings' );



 add_action( 'wp_ajax_mapi_add_member', 'add_member_to_list' );
 add_action( 'wp_ajax_nopriv_mapi_add_member', 'add_member_to_list' ); 
 

 function add_member_to_list(){
    $apikey = get_option('mapi_api_key');
    $mapiDomain = get_option('mapi_api_domain');
    $email = $_POST['email'];
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $website = isset($_POST['website']) ? $_POST['website'] : '';
    $listID = $_POST['listID'];
    $auth = base64_encode( 'user:'.$apikey );
    
    $data = array(
        'apikey'        => $apikey,
        'email_address' => $email,
        'status'        => 'subscribed',
        'merge_fields'  => [
            'FNAME'     => $firstname,
            'LNAME'     => $lastname,
            'WSITE'     => $website,
        ]
    );
    $json_data = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
    'Authorization: Basic '.$auth));
    curl_setopt($ch, CURLOPT_URL, 'https://' .$mapiDomain .'.api.mailchimp.com/3.0/lists/' .$listID .'/members/');
    
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);                                                                                                                  
    
    $result = curl_exec($ch);
    $json = json_decode($result, true);
    $return = array();
    
    if($json["status"] == "subscribed"){
        $return['status'] =  'Success';
    }else{
        $return['status'] =  'Error: ' .$json["status"];
        $return['title'] =  $json["title"];
    }
    wp_send_json($return);
    die();
}
function mailchimpnl_callback($atts = [], $content = null)
{
    $a = shortcode_atts( array(
        'listid' => 'empty'
    ), $atts );
    $listId = $a['listid'];
    include_once( plugin_dir_path( __FILE__ ) . 'includes/newsletter.php' );
}

add_shortcode('mailchimpnl', 'mailchimpnl_callback');

function mailchimpwl_callback($atts = [], $content = null)
{
    $a = shortcode_atts( array(
        'listid' => 'empty'
    ), $atts );
    $listId = $a['listid'];
    include_once( plugin_dir_path( __FILE__ ) . 'includes/waiting-list.php' );
}

add_shortcode('mailchimpwl', 'mailchimpwl_callback');

function mailchimp_api_js() {   
    wp_enqueue_style( 'mailchimp-api-css', plugin_dir_url( __FILE__ ) . 'css/mailchimp-api.css', array(), '0.1' );
    wp_enqueue_script( 'mailchimp-api', plugin_dir_url( __FILE__ ) . 'js/mailchimp-api.js', array('jquery') );
}

add_action('wp_enqueue_scripts', 'mailchimp_api_js');
