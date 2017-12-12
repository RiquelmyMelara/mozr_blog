
<?php
/*
Template Name: MOZR Contact Template
*/

get_header(); ?>

<?php echo do_shortcode( '[mailchimpwl listid="c3f06fbba9"]' ); ?>

<script>
jQuery( document ).ajaxComplete(function( event, request, settings ) {
    jQuery('#ajax-subscribe').fadeOut('slow', function() {
            jQuery('#ajax-result').fadeIn('slow');
        });
});
</script>
<?php
get_footer();