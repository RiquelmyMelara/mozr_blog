
<?php
/*
Template Name: MOZR Contact Template
*/

get_header(); ?>

<div class='contactform container-fluid'>
                <div class='col-md-5 contactform-left' >
                    <div class='col-md-7 contact-title'>Want to switch to MOZR?</div>
                    <div class='col-md-7 contact-subtitle'>Join our waiting list and we will contact you with more information</div>
                </div>
                <div class='col-md-7 contactform-right'>
                    <div class='col-md-12' style='padding: 0px'>
                        <div class='col-md-8'>
                            <input type='text' id='fullname'>
                            <div class="input-description">Full Name</div>
                        </div>
                        <div class='col-md-8'>
                            <input type='text' id='website'>
                            <div class="input-description">Website</div>
                        </div>
                        <div class='col-md-8'>
                            <input type='text' id='email'>
                            <div class="input-description">Email Address</div>
                        </div>
                    </div>

                    <div class='col-md-12' style='padding: 0px;margin-bottom: 50px;'>
                        <div class='col-md-4'>
                            <button>Join Our Waiting List</button>
                        </div>
                    </div>
                </div>
</div>

<style>

.contactform .contactform-left{
    padding-top: 80px;
}
.page-template-mozr_contact .container-fluid{
    background-color: #F7F6F4;
    padding-right: 0px;
    padding-left: 0px;
}

.contactform .contactform-right{
    background-color: white;
    padding: 5% 4%;
}
.page-template-mozr_contact #content{
    width: 100% !important;
}
.contactform{
    font-family: 'Open Sans', sans-serif;
}
.contactform .input-description{
    font-size: 10px;
    font-family: 'Montserrat', sans-serif;
}
.contactform input{
    height: 42px;
    background-color: white;
    border-top: 0px;
    border-right: 0px;
    border-left: 0px;
    border-bottom: 2px solid #d1d1d1;
    font-size: 20px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 900;
}

.contactform input:focus{
    border-color: #F75737;
}

.contactform .contact-title{
    font-size: 39px;
    font-weight: 900;
    line-height: 1.3;
    margin-bottom: 30px;
    float: right;
}

.contactform .contact-subtitle{
    font-size: 20px;
    font-weight: 900;
    color: #F75737;
    float: right;
}

.contactform button{
    width: 100%;
    margin-top: 50px;
    padding: 15px;
    background-color: #F75737;
    text-transform: none;
    font-size: 12px;
    font-weight: 400 !important;
    border-radius: 0px;
}
@media (max-width: 990px) {
    .contactform-left{
        height:210px;
        padding-top: 40px !important;
        margin-left: 25px;
    }
    .contactform .contact-title{
        float:left;
    }
    .contactform .contact-subtitle{
        float:left;
    }
}

@media (max-width: 540px){
    .contactform-left {
        height: 280px;
    }
}
@media (max-width: 410px){
    .contactform-left {
        height: 310px;
    }
}

@media (max-width: 350px){
    .contactform-left {
        height: 350px;
    }
}

</style>

<?php
get_footer();