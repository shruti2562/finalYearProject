$(document).ready(function() {
  $("#login").validate({
    rules: {

      username : {
        required: true
      },

      password: {
        required: true,
        minlength: 6,
        maxlength: 8
      }   

    },

    messages : {

      username: {
        required: "Username is required"
      },

      password:{
        required:"Password is required",
        minlength:"Minimum 6 characters",
        maxlength:"Maximum 8 characters"       
      }

    }
  });


  //full name validation
//     jQuery.validator.addMethod("name", function(value, element) {
//   if (/^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)/.test(value)) {
//     return true;
//   } else {
//     return false;
//   };
// }, 'Please enter your full name.');
});