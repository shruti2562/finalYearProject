$(document).ready(function() {
  $("#register").validate({
    rules: {
      name: {
        required: true
      },

      email: {
        required: true,
        email: true
      },

      contact: 
      {
        required:true,
        minlength:10,
        maxlength:10,
        number: true
      },

      username : {
        required: true 
      },

      password: {
        required: true,
        minlength: 6,
        maxlength: 8
      },

      cpassword:{
        required:true,
        equalTo : '#password',
        minlength: 6,
        maxlength: 8
      }
  
    },
    messages : {
      name: {
        required: "Name is required"
      },
       email: {
        required: "Email is required",
        email: "Please enter proper email"
      },

      contact: 
      {
        required: "Contact is required",
        number: "Please enter 10 digit number"
      },
     
      username: {
        required: "Username is required"
      },

      password:{
        required:"Password is required",
        minlength:"Minimum 6 characters",
        maxlength:"Maximum 8 characters"     
      },
      
      cpassword:{
        required:"Confirm password is required",
        equalTo: "Password should match"
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