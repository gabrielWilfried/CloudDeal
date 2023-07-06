
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

            fetch("/clouddeal", {
                method: "POST",
                body: formData,
            }).then(response => response.json())
            .then((data) => {
                if(data.status === 'success'){
                    toastr.success("Email saved successfully")
                }
                else if(data.status === 'failed'){
                    toastr.error("Email Already exists")
                }


            }).catch(error => {
                toastr.error("An error occured")
            });;
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
window.addEventListener('alpine:init', () => {
    Alpine.data('ads', () => ({
        ads: [],
        page: 1,
        totalPages: 2,
        loadAds() {
            fetch('/clouddeal/ads?page=' + this.page).then(response => response.json())
                .then(data => {
                    this.ads = (this.ads || []).concat(data.allAds.data);
                    this.page++;
                    this.totalPages = data.allAds.last_page;
                    console.log(this.ads);
                })
                .catch(error => {
                    console.error(error);
                });
        },
    })
)})
