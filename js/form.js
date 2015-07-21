
$(document).ready(function() {
    $('.contact-form input').on('click', function() {
        $('.error-field').hide();
    });
});

function contactForm(form) {  
    var regex_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 

    if (form.name.value == "") {
         //alert( "Please fill in a name" );
         form.name.focus();
         $('.title-error').text('Name Error').show();
         return false;
    }   
    if (form.email.value == "") {
         //alert( "Please fill in an email address" );
         form.email.focus();
         $('.email-error').text('email Error').show();
         return false;
    }
    if(!form.email.value.match(regex_mail)) {
          //alert( "Please fill in a valid email address" );
          form.email.focus();
          $('.email-error').text('email Error').show();
          return false;
    }   
    if (form.mess.value == "") {
         //alert( "Please fill in a mess" );
         form.mess.focus();
         $('.mess-error').text('Please fill in a mess').show();
         return false;
    }   
}



