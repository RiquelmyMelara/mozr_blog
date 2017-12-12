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
        
        add_member_to_list(jQuery("#mailchimpwl-fullname").val(),jQuery("#mailchimpwl-email").val(),jQuery("#mailchimpwl-website").val(),jQuery("#mailchimpwl-listid").val());
    });
    
});

function add_member_to_list(fullname, email, website, listId){
    var fields = fullname.split(' ');    
    var firstname = fields[0];
    var lastname = fields[1];

    jQuery.ajax({
        type:"POST",
        url: my_ajax_object.ajax_url,
        data: { 
            action: "mapi_add_member",
            email: email,
            listID: listId,
            firstname: firstname,
            lastname: lastname,
            website: website,
        },
        success: function (data) {
            console.log(data); 
        }
    });
}