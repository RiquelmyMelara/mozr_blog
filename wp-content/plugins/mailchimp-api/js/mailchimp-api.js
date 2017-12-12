jQuery(document).ready(function($){
    jQuery("#mailchimpnl-button").click(function(){

        $('#mailchimpnl-holder').fadeOut('slow', function() {
            $('.loader').fadeIn('slow');
        });
        
        jQuery.ajax({
            type:"POST",
            url: my_ajax_object.ajax_url,
            data: { 
                action: "mapi_add_member",
                email: jQuery("#mailchimpnl-email").val(),
                listID: jQuery("#mailchimpnl-listid").val()
            },
            success: function (data) {
                
                if(data.status == "Success"){
                    $('.loader').fadeOut('slow', function() {
                        $('#newsletter-success').fadeIn('slow');
                    });
                    
                }else{
                    $('.loader').fadeOut('slow', function() {
                        $('#newsletter-error').fadeIn('slow');
                    });
                    console.log(data);
                }
                
            }
        });
    });
    
    jQuery("#submit-waiting-list").click(function(){
        $('#mailchimpwl-holder').fadeOut('slow', function() {
            $('.loader').fadeIn('slow');
        });

        var fields = (jQuery("#mailchimpwl-fullname").val()).split(' ');    
        var firstname = fields[0];
        var lastname = fields[1];
    
        jQuery.ajax({
            type:"POST",
            url: my_ajax_object.ajax_url,
            data: { 
                action: "mapi_add_member",
                email: jQuery("#mailchimpwl-email").val(),
                listID: jQuery("#mailchimpwl-listid").val(),
                firstname: firstname,
                lastname: lastname,
                website: jQuery("#mailchimpwl-website").val(),
            },
            success: function (data) {
                if(data.status == "Success"){
                    $('.loader').fadeOut('slow', function() {
                        $('#waitingl-success').fadeIn('slow');
                    });
                    
                }else{
                    $('.loader').fadeOut('slow', function() {
                        $('#waitingl-error').fadeIn('slow');
                    });
                    console.log(data);
                }
            }
        });
    });
    
});