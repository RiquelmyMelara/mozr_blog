<div class="col-xs-12 post-cont">
    <div class="col-sm-12 text-center">
        <h2 class="contact-title"><?php echo get_the_title(); ?></h2>
    </div>
    <div class="container margin-bottom-50 margin-top-80">
        
        <div class="col-sm-6">
            <div class="col-sm-12 contact-grey-bk margin-bottom-15">
                <div class="col-sm-12 padding-y-35px">
                    <div class="col-sm-2">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/CONTACT PAGE_LEGAL-02.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Need 24/7 support?</h2>
                        <button id="contact-support" class="blue-btn">Contact Support</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 contact-grey-bk-1 padding-y-35px">
                <div class="col-sm-12">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/CONTACT PAGE_LEGAL-03.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Call Sales Now</h2>
                        <span>1-801-855-8325</span>
                    </div>
                </div>
                <div class="col-sm-12 padding-top-35px">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/CONTACT PAGE_LEGAL-04.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Sales Hours</h2>
                        <span>8am - 8pm MST</span>
                        <h2 class="contact-h2">Sales Contact Info</h2>
                        <span>sales@mozr.com</span>
                        <span>1-801-855-8325</span>
                    </div>
                </div>
                <div class="col-sm-12 padding-top-35px">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/CONTACT PAGE_LEGAL-05.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Mailing Address</h2>
                        <span>563 S 600 W</span>
                        <span>Mapleton, UT 84664</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 contact-grey-bk-1 padding-35 margin-top-50-mobil">
            <div id="contact-form" class="col-sm-12">
            <input type='hidden' id="mailchimpcontact-listid" value="<?php echo $listId; ?>"/>
            <span class="contact-span">Full Name</span> <input id="contact-fullname" class="contact-input" type="text" name="name"><br>
            <span class="contact-span">Email Address</span> <input id="contact-email" class="contact-input" type="text" name="email"><br>
            <span class="contact-span">Contact us concerning* </span>
            <select id="contact_type" name="contact_type" class="form-control contact-input">
                <option value="sales">Sales</option>
                <option value="support">Support</option>
            </select>
            <span class="contact-span">Subject*</span> <input id="contact_sbjt" class="contact-input" type="text" name="subject"><br>
            <span class="contact-span">Message*</span> <textarea id="contact_messg" class="contact-input" rows="6" cols="20" name="message"></textarea><br>
            <input id="contact-form-submit" type="submit" name="submit" class="contact-submit" value="Submit">
            
            <div style='display:none;margin-left: 15%;' class='loader col-md-4'>
            </div>
            
            <div id='waitingl-success' style='display:none;width: 60%;' class='col-md-4'>
                <div style=' margin-top: 40px;'>
                    <p class='subscription-title'>Thank you for your email!</p>
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
    </div>

</div>