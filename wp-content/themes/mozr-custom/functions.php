<?php

function wp_run_prettify() {
    wp_register_script('run_prettify', get_stylesheet_directory_uri() . '/js/run_prettify.js');
    wp_enqueue_script('run_prettify');
}
function add_custom_js() {
    wp_register_script('custom_js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'));
    $variables_array = array(
        'contenturl' => content_url()
    );
    wp_localize_script( 'custom_js', 'custom_varibles', $variables_array );
    wp_enqueue_script('custom_js');
}

add_action( 'wp_enqueue_scripts', 'add_custom_js' ); 
add_action( 'wp_enqueue_scripts', 'wp_run_prettify' ); 

function tldr_shortcode($atts = [], $content = null)
{
    // Add TL;DR $content    
    //$tldrContent = "<div id='tldr'> <h3><i class='fa fa-bars' aria-hidden='true'></i> Too Long; Didn't Read Version</h3> <div>" .$content ."</div></div>";
    $tldrContent = "<div id='tldrref'></div><h2 class='tldr-title'><img style='width: 15px; margin-right: 10px;' src='" .content_url() ."/uploads/2017/11/tldr.png'></img> Too Long;Didnt Read Version</h2><div id='tldr'>" .$content ."</div>";
    return $tldrContent;
}

function mozr_codestyle($atts = [], $content = null)
{
    // Add TL;DR $content    
    $codeContent = "<pre class='prettyprint linenums:1 codestyle'>" .$content ."</pre>";
    return $codeContent;
}
function mozr_consolestyle($atts = [], $content = null)
{
    // Add TL;DR $content    
    $codeContent = "<pre class='prettyprint linenums:1 tab-size:4'>" .$content ."</pre>";
    return $codeContent;
}

function focus_codestyle($atts = [], $content = null)
{
    // Add TL;DR $content    
    $focusContent = "<span class='focus'>" .$content ."</span>";
    return $focusContent;
}
function bac_post_word_count()
{
    global $post;
    //Variable: Additional characters which will be considered as a 'word'
    $char_list = ''; /** MODIFY IF YOU LIKE.  Add characters inside the single quotes. **/
    //$char_list = '0123456789'; /** If you want to count numbers as 'words' **/
    //$char_list = '&@'; /** If you want count certain symbols as 'words' **/
    $words = str_word_count(strip_tags($post->post_content), 0, $char_list);
    $readtime = round($words/200);
    echo $readtime;
}
add_shortcode('codestyle', 'mozr_codestyle');
add_shortcode('consolestyle', 'mozr_consolestyle');
add_shortcode('tldr', 'tldr_shortcode');
add_shortcode('focus', 'focus_codestyle');
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

function mozr_set_post_views($postID) {
    $count_key = 'mozr_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
    $rrr = get_post_meta($postID, $count_key, true);
}

//To keep the count accurate, we are removing the prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function mozr_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    mozr_set_post_views($post_id);
}
function mozr_get_post_views($postID){
    $count_key = 'mozr_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
add_action( 'wp_head', 'mozr_track_post_views');