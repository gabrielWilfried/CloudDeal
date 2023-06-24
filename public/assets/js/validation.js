(function ($) {
    $("form[name='login']").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            email: {
                required: "Please provide an email"
            },
            password: {
                required: "Please provide password",
                minlength: "Pasword should be at least 5 characters long"
            }
        },
        submitHandler: function (form) {
            form.submit()
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
            $(".form-style .form-error").css("display", "block");
        }
    });

    $("form[name='forgot-password']").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            email: {
                required: "Please provide an email"
            }
        },
        submitHandler: function (form) {
            form.submit()
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
            $(".form-style .form-error").css("display", "block");
        }
    })
})(jQuery)
