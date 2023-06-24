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
    });

    $("form[name='reset-password']").validate({
        rules: {
            password: {
                required: true,
                minlength: 5
            },
            confirm: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },
        messages: {
            password: {
                required: "Field can't be empty",
                minlength : "Password should be atleast 5 characters"
            },
            confirm: {
                required: "Field can't be empty",
                minlength : "Password should be atleast 5 characters",
                equalTo : "Password do not match"
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

    $("form[name='email-verification']").validate({
        rules: {
            code: {
                required: true,
                maxlength: 4
            }
        },
        messages: {
            code: {
                required: "Field can't be empty",
                maxlength : "Code can not be more than 4 numbers"
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
})(jQuery)

