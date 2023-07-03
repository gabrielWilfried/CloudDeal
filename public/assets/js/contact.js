
//$('.cf-msg').hide();
/* $('form#cf button#submit').on('click', function() {
    $(this).prop('disabled', true);
    var fname = $('#fname').val();
    var subject = $('#subject').val();
    var email = $('#email').val();
    var msg = $('#msg').val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!regex.test(email)) {
        $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Email not valid</div>')
        return false;
        $(this).prop('disabled', false);
    }

    fname = $.trim(fname);
    subject = $.trim(subject);
    email = $.trim(email);
    msg = $.trim(msg);

    if (fname != '' && email != '' && msg != '') {
        var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
        var csrfToken = $('input[name="_token"]').val();
        $.ajax({
            type: "POST",
            url: "/clouddeal/contact",
            data: values,
            headers: {
                'X-CSRF-TOKEN': csrfToken
              },
            success: function() {
                $('#fname').val('');
                $('#subject').val('');
                $('#email').val('');
                $('#msg').val('');
                toastr.success("Saved successfully")
                $(this).prop('disabled', false);
                setTimeout(function() {
                    $('.cf-msg').fadeOut('slow');
                }, 4000);
            }
        });
    } else {
        $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
        $(this).prop('disabled', false);
    }
    return false;
});
 */
/* 
windows.setInterval(myFunction,50);

$('form#cf').on('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    $('.cf-msg').hide();
    $('form#cf button#submit').prop('disabled', true);

    var fname = $('#fname').val();
    var subject = $('#subject').val();
    var email = $('#email').val();
    var msg = $('#msg').val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!regex.test(email)) {
        $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Email not valid</div>');
        $('form#cf button#submit').prop('disabled', false);
        return false;
    }

    fname = $.trim(fname);
    subject = $.trim(subject);
    email = $.trim(email);
    msg = $.trim(msg);

    if (fname != '' && email != '' && msg != '') {
        var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
        var csrfToken = $('input[name="_token"]').val();

        $.ajax({
            type: "POST",
            url: "/clouddeal/contact",
            data: values,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function() {
                $('#fname').val('');
                $('#subject').val('');
                $('#email').val('');
                $('#msg').val('');
                toastr.success("Saved successfully");
                $('form#cf button#submit').prop('disabled', false);
                setTimeout(function() {
                    $('.cf-msg').fadeOut('slow');
                }, 4000);
            }
        });
    } else {
        $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fill up the information correctly.</div>');
        $('form#cf button#submit').prop('disabled', false);
    }
}); */


// Disable the submit button on page load if the form is empty
$(document).ready(function() {
    setInterval(myFunction,50);
  });
  
  $('form#cf').on('submit', function(event) {
    event.preventDefault(); 

    // Your form submission logic here
    $('.cf-msg').hide();
    $('form#cf button#submit').prop('disabled', true);

    var fname = $('#fname').val();
    var subject = $('#subject').val();
    var email = $('#email').val();
    var msg = $('#msg').val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!regex.test(email)) {
        $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Email not valid</div>');
        $('form#cf button#submit').prop('disabled', false);
        return false;
    }

    fname = $.trim(fname);
    subject = $.trim(subject);
    email = $.trim(email);
    msg = $.trim(msg);

    if (fname != '' && email != '' && msg != '') {
        var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
        var csrfToken = $('input[name="_token"]').val();

        $.ajax({
            type: "POST",
            url: "/clouddeal/contact",
            data: values,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function() {
                $('#fname').val('');
                $('#subject').val('');
                $('#email').val('');
                $('#msg').val('');
                toastr.success("Saved successfully");
                $('form#cf button#submit').prop('disabled', false);
                setTimeout(function() {
                    $('.cf-msg').fadeOut('slow');
                }, 4000);
            }
        });
    } else {
        $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fill up the information correctly.</div>');
        $('form#cf button#submit').prop('disabled', false);
    }
  });
  
  function myFunction() {
    const fname = $('#fname').val();
    const subject = $('#subject').val();
    const email = $('#email').val();
    const msg = $('#msg').val();
  
    // Check if all form fields are empty
    if (fname === '' && subject === '' && email === '' && msg === '') {
      $('#submit').prop('disabled', true);
      $('.cf-msg').fadeIn().html('<div class="alert alert-warning"><strong>Warning!</strong> Please fill up the information correctly.</div>');
        console.log("I am here");
    } else {
      $('#submit').prop('disabled', false);
      console.log("not herer");
    }
  }
  
  // Bind the function to input changes on the form fields
  $('#fname, #subject, #email, #msg').on('input', function() {
    myFunction();
  });
  


/* function myFunction(){
    const isActive = false;

    if(document.getElementById("fname").val == '' && document.getElementById("subject").val == '' && document.getElementById("email").val == '' && document.getElementById("msg").val == '' ){
        document.getElementById("submit").disabled=true;
    }else{
        document.getElementById("submit").disabled=false;
    }
}
 */