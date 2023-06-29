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
        onkeyup:function(element, event) {
            if(event.which === 9 && this.elementValue(element) === ""){
                return
            }
            else{
                this.element(element);
            }
            if(element.nextElementSibling.innerHTML==='' || element.nextElementSibling.tagName==='P'){
                element.style.setProperty("margin-bottom", "25px")
            }
            else{
                element.style.setProperty("margin-bottom", "0px")
            }
        },
        submitHandler: function (form) {
            form.submit()
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
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
        onkeyup:function(element, event) {
            if(event.which === 9 && this.elementValue(element) === ""){
                return
            }
            else{
                this.element(element);
            }
            if(element.nextElementSibling.innerHTML==='' || element.nextElementSibling.tagName==='P'){
                element.style.setProperty("margin-bottom", "25px")
            }
            else{
                element.style.setProperty("margin-bottom", "0px")
            }
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
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
        onkeyup:function(element, event) {
            if(event.which === 9 && this.elementValue(element) === ""){
                return
            }
            else{
                this.element(element);
            }
            if(element.nextElementSibling.innerHTML==='' || element.nextElementSibling.tagName==='P'){
                element.style.setProperty("margin-bottom", "25px")
            }
            else{
                element.style.setProperty("margin-bottom", "0px")
            }
        },
        submitHandler: function (form) {
            form.submit()
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
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
        onkeyup:function(element, event) {
            if(event.which === 9 && this.elementValue(element) === ""){
                return
            }
            else{
                this.element(element);
            }
            if(element.nextElementSibling.innerHTML==='' || element.nextElementSibling.tagName==='P'){
                element.style.setProperty("margin-bottom", "25px")
            }
            else{
                element.style.setProperty("margin-bottom", "0px")
            }
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
        }
    });

    $("form[name='register']").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email:true
            },
            password: {
                required: true,
                minlength:5
            },
            confirm: {
                required: true,
                minlength:5,
                equalTo: "#password"
            },
            pseudo: {
                required: true,
                minlength:5,
            }
        },
        messages: {
            name: {
                required: "Field can't be empty",
            },
            email: {
                required: "Field can't be empty",
                email: "Enter a valid email address"
            },
            password: {
                required: "Field can't be empty",
                minlength: "Password should be atleast 5 characters"
            },
            confirm: {
                required: "Field can't be empty",
                minlength: "Password should be atleast 5 characters",
                equalTo: "Passwords do not match"
            },
            pseudo: {
                required: "Field can't be empty",
                minlength: "Must be atleast 5 characters"
            }

        },
        onkeyup:function(element, event) {
            if(event.which === 9 && this.elementValue(element) === ""){
                return
            }
            else{
                this.element(element);
            }
            if(element.nextElementSibling.innerHTML==='' || element.nextElementSibling.tagName==='P'){
                element.style.setProperty("margin-bottom", "25px")
            }
            else{
                element.style.setProperty("margin-bottom", "0px")
            }
        },
        errorPlacement: function (error, element) {
            element.css("margin-bottom", "0px");
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            form.submit()
        },

    });
})(jQuery)

