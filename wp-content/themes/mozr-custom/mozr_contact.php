<?php
 /*
 Template Name: MOZR Contact
 */
 get_header(); ?>

<?php

if (!isset($_POST["submit"]))
  {
  ?>
  
<div class="col-xs-12 post-cont">
    <div class="col-sm-12 text-center">
        <h2 class="contact-title"><?php echo get_the_title(); ?></h2>
    </div>
    <div class="container margin-bottom-50 margin-top-80">
        
        <div class="col-sm-6">
            <div class="col-sm-12 contact-grey-bk margin-bottom-15">
                <div class="col-sm-12 padding-y-35px">
                    <div class="col-sm-2">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_01.png"  alt="">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_02.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Call Sales Now</h2>
                        <span>1-877-973-6446</span>
                    </div>
                </div>
                <div class="col-sm-12 padding-top-35px">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_03.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Sales Hours</h2>
                        <span>7am - 7pm CST</span>
                        <h2 class="contact-h2">Sales Contact Info</h2>
                        <span>sales@mozr.com</span>
                        <span>1-877-973-6446</span>
                    </div>
                </div>
                <div class="col-sm-12 padding-top-35px">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_04.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Mailing Address</h2>
                        <span>Irongate house, 22-30 Duke's Place</span>
                        <span>London, EC3A 7LP</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 contact-grey-bk-1 padding-35 margin-top-50-mobil">
            <form method="post">
            Full Name <input class="contact-input" type="text" name="name"><br>
            Email Address <input class="contact-input" type="text" name="email"><br>
            Contact us concerning* 
            <select id="type" name="type" class="form-control contact-input">
                <option value="sales">Sales</option>
                <option value="support">Support</option>
            </select>
            Subject* <input class="contact-input" type="text" name="subject"><br>
            Message* <textarea class="contact-input" rows="6" cols="20" name="message"></textarea><br>
            <input type="submit" name="submit" class="contact-submit" value="Submit">
            </form>
        </div>
    </div>

</div>


  <?php
  }
else
{
  if (isset($_POST["name"]))
    {
    $from = 'riquelmy.melara@gmail.com'; // sender
    $subject = $_POST["New Email from Mozr"];
    $message = $_POST["message"];
    $to = $_POST["email"];

    $message = wordwrap($message, 70);

    mail($to,$subject,$message,"From: $from\n");
    echo "Thank you for sending an email";
    }
    ?>
    <div class="col-xs-12 post-cont">
    <div class="col-sm-12 text-center">
        <h2 class="contact-title"><?php echo get_the_title(); ?></h2>
    </div>
    <div class="container margin-bottom-50 margin-top-80">
        
        <div class="col-sm-6">
            <div class="col-sm-12 contact-grey-bk margin-bottom-15">
                <div class="col-sm-12 padding-y-35px">
                    <div class="col-sm-2">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_01.png"  alt="">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_02.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Call Sales Now</h2>
                        <span>1-877-973-6446</span>
                    </div>
                </div>
                <div class="col-sm-12 padding-top-35px">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_03.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Sales Hours</h2>
                        <span>7am - 7pm CST</span>
                        <h2 class="contact-h2">Sales Contact Info</h2>
                        <span>sales@mozr.com</span>
                        <span>1-877-973-6446</span>
                    </div>
                </div>
                <div class="col-sm-12 padding-top-35px">
                    <div class="col-sm-2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/contact_04.png"  alt="">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="contact-h2">Mailing Address</h2>
                        <span>Irongate house, 22-30 Duke's Place</span>
                        <span>London, EC3A 7LP</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 contact-grey-bk-1 padding-35 margin-top-50-mobil">
            <h2>Thank you for your email!</h2>
        </div>
    </div>

</div>
    
    <?php
}
?>
<div class=""> <!-- row -->
   <div id="content" class="container">
<?php
 get_footer();