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
});

function add_member_to_list(fullname, email, listId){
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
            lastname: lastname
        },
        success: function (data) {
            console.log(data); 
        }
    });
}