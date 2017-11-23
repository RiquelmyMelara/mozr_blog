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
    jQuery('#tldrref a').click(function(){
        jQuery('html, body').animate({
            scrollTop: jQuery( jQuery(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
});

jQuery(window).load(function(){
    jQuery('.linenums p > *').unwrap();
    jQuery(".linenums li").filter(function(){
        return jQuery(this).html().match(/&nbsp;/) !== null;
    }).addClass("removeBashStyle");
});


