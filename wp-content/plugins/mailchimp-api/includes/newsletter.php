<?php 

?>
<div class='row' id='mailchimpnl-holder'>
    <div class='col-xs-12 col-md-6 col-md-offset-3'>
        <div class='subscription'>
            <p class='subscription-title'>Enter your email to get weekly blog updates</p>
            <div>
                <div class='col-md-12'>
                    <div class='col-md-8' style='padding: 0px'>
                        <input type='hidden' id="mailchimpnl-listid" value="<?php echo $listId; ?>"/>
                        <input type='text' id='mailchimpnl-email' placeholder='Email Address'>
                    </div>
                    <div class='col-md-4' style='padding: 0px'>
                        <button id='mailchimpnl-button'>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style='display:none;' class='loader'>
</div>

<div id='newsletter-success' style='display:none' class='col-xs-12 col-md-6 col-md-offset-3'>
    <div style=' margin-top: 40px;'>
        <p class='subscription-title'>Thank you for joining our Newsletter!</p>
        <p class='subscription-title'>You will start receiving our emails soon.</p>
    </div>
</div>

<div id='newsletter-error' style='display:none' class='col-xs-12 col-md-6 col-md-offset-3'>
    <div style=' margin-top: 40px;'>
        <p class='subscription-title'>Oops something went wrong!</p>
        <p class='subscription-title'>Please try again later.</p>
    </div>
</div>