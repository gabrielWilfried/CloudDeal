$("document").ready(function () {
    $("form[name='newsletter-form']").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            email: {
                required: "Field can't be empty",
                email: "Enter a valid email address",
            },
        },
        submitHandler: function (form) {
            const formData = new FormData(form);

            fetch("/", {
                method: "POST",
                body: formData,
            }).then((response) => {
                if (response.ok) toastr.success("Email saved successfully!");
                else
                    toastr.error(
                        "An error occurred while submitting the form."
                    );
            });
        },
    });

    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1400, 'swing', function () {
            window.location.hash = target;
        });
    });
});
