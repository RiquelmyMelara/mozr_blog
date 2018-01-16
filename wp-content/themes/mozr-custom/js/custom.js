jQuery.fn.exists = function(){return this.length>0;}

jQuery( document ).ready(function() {

    //Check if TL;DR exists on this post page
    if (jQuery('#tldr').exists()) {
        // Append Banner
        jQuery('#under-thumb-right').append("<span id='tldrBanner'><a href='#tldrref' style='color: black;'><img style='width: 10px; margin-right: 5px;' src='" + custom_varibles.contenturl + "/uploads/2017/11/tldr.png'></img> Go to the TL;DR section</a></span>");
    }
    try {
        jQuery('.post-navigation').css('margin-top', jQuery('#comments').outerHeight()+70);
        jQuery('.nav-next .meta-nav').append(' post <i class="fa fa-long-arrow-right" aria-hidden="true"></i>');
        jQuery('.nav-previous .meta-nav').prepend('<i class="fa fa-long-arrow-left" aria-hidden="true"></i> ');
        jQuery('.nav-previous .meta-nav').append(' post');
    }
    catch(err) {
        console.log(err.message);

    }
    jQuery("#categories").on("change", function(){
        debugger
        if(jQuery(this).val()==""){
            window.location.href = base_url + "/blog/"
        }else{
            window.location.href = base_url + "/blog/?category=" + jQuery(this).val()
        }
    });
    jQuery('#tldrBanner a').click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(jQuery(this).attr('href')).offset().top
        }, 500);
        return false;
    });
    jQuery('.footer-link').click(function () {
        var link = jQuery(jQuery(this)).attr("linkto");
        window.location.href = base_url + "/" +link;
    });
    jQuery("#homepage-learn-more").click(function() {
        var aTag = jQuery(".shape-1-container");
        jQuery('html,body').animate({scrollTop: aTag.offset().top},'slow');
     });
    jQuery("#contact-support").click(function() {
        event.preventDefault(); 
        jQuery("#siButtonText-chat").click();
    }); 
     jQuery('.sign-up-button').click(function () {
        window.location.href = base_url + "/sign-up";
    });
    jQuery('.footer-link-support').click(function () {
        var win = window.open('https://mozr.freshdesk.com', '_blank');
        if (win) {
            //Browser has allowed it to be opened
            win.focus();
        } 
    });
    jQuery('#menu-item-32').click(function () {
        if(jQuery(".page-template-mozr_home-php")[0]) {
            var aTag = jQuery(".shape-1-container");
            jQuery('html,body').animate({scrollTop: aTag.offset().top},'slow');
        } else {
            window.location.href = base_url + "#home-our-platform"
        }
    });
});

jQuery(window).load(function(){
    jQuery('.linenums p > *').unwrap();
    jQuery(".linenums li").filter(function(){
        return jQuery(this).html().match(/&nbsp;/) !== null;
    }).addClass("removeBashStyle");
});
