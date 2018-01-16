<?php 

?>
<div class='contactform container-fluid'>
    <div class='col-md-5 contactform-left' >
        <div class='col-md-8 contact-title'>Want to switch to MOZR?</div>
            <div class='col-md-8 contact-subtitle'>Join our waiting list and we will contact you with more information</div>
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

            <div class='col-md-12' id="mailchimpwl-holder"style='padding: 0px;margin-bottom: 50px;'>
                <div class='col-md-4' id="ajax-subscribe">
                    <button id="submit-waiting-list">Join Our Waiting List</button>
                </div>
            </div>
            
            <div style='display:none;margin-left: 15%;' class='loader col-md-4'>
            </div>
            
            <div id='waitingl-success' style='display:none;width: 60%;' class='col-md-4'>
                <div style=' margin-top: 40px;'>
                    <p class='subscription-title'>Thank you for joining our waiting list!</p>
                    <p class='subscription-title'>We will reach out soon.</p>
                </div>
            </div>
            <div id='waitingl-error' style='display:none;width: 60%;' class='col-md-4'>
                <div style=' margin-top: 40px;'>
                    <p class='subscription-title'>Oops something went wrong!</p>
                    <p class='subscription-title'>Please try again later.</p>
                </div>
            </div>
           
    </div>
</div>