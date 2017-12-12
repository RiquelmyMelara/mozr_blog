<?php 

?>
<div class='contactform container-fluid'>
    <div class='col-md-5 contactform-left' >
        <div class='col-md-7 contact-title'>Want to switch to MOZR?</div>
            <div class='col-md-7 contact-subtitle'>Join our waiting list and we will contact you with more information</div>
        </div>
        <div class='col-md-7 contactform-right'>
            <div class='col-md-12' style='padding: 0px'>
                <div class='col-md-8'>
                    <input type='text' id='mailchimpwl-fullname'>
                    <div class="input-description">Full Name</div>
                </div>
                <div class='col-md-8'>
                    <input type='text' id='mailchimpwl-website'>
                    <div class="input-description">Website</div>
                </div>
                <div class='col-md-8'>
                    <input type='text' id='mailchimpwl-email'>
                    <input type='hidden' id="mailchimpwl-listid" value="<?php echo $listId; ?>"/>
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