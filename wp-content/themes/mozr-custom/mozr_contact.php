
<?php
/*
Template Name: MOZR Contact Template
*/

get_header(); ?>

<div class='contactform container-fluid'>
                <div class='col-md-5 contactform-left' >
                    <div class='col-md-7 contact-title'>Want to switch to MOZR?</div>
                    <div class='col-md-7 contact-subtitle'>Join our waiting list and we will contact you with more information</div>
                </div>
                <div class='col-md-7 contactform-right'>
                    <div class='col-md-12' style='padding: 0px'>
                        <div class='col-md-8'>
                            <input type='text' id='fullname'>
                            <div class="input-description">Full Name</div>
                        </div>
                        <div class='col-md-8'>
                            <input type='text' id='website'>
                            <div class="input-description">Website</div>
                        </div>
                        <div class='col-md-8'>
                            <input type='text' id='email'>
                            <div class="input-description">Email Address</div>
                        </div>
                    </div>

                    <div class='col-md-12' style='padding: 0px;margin-bottom: 50px;'>
                        <div class='col-md-4' id="ajax-subscribe">
                            <button id="submit-waiting-list">Join Our Waiting List</button>
                        </div>
                        <div style="display:none;" id="ajax-result" class='col-md-4'>
                        <div class="input-description">Thank you for joining!</div>
                        </div>
                    </div>
                </div>
</div>
<script>
jQuery(document).ready(function($){
    jQuery("#submit-waiting-list").click(function(){
        add_member_to_list(jQuery("#fullname").val(),jQuery("#email").val(),'c3f06fbba9');
    });
    
});
jQuery( document ).ajaxComplete(function( event, request, settings ) {
    jQuery('#ajax-subscribe').fadeOut('slow', function() {
            jQuery('#ajax-result').fadeIn('slow');
        });
});
</script>
<?php
get_footer();