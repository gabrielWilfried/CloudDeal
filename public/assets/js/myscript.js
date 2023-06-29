
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

function fetchAds(page) {
    return fetch('/clouddeal/ads?page=' + page)
      .then(response => response.json())
      .then(data => {
        return data.allAds.data;
      })
      .catch(error => {
        console.error(error);
        return [];
      });
  }
  window.addEventListener('DOMContentLoaded', () => {
    const adsContainer = document.getElementById('ads-container');
    const alpineData = {
      ads: [],
      page: 1,
      totalPages: null,
      loadAds: function() {
        fetchAds(this.page)
          .then(data => {
            this.ads = this.ads.concat(data);
            this.page++;
            this.totalPages = data.total_pages;
          });
      }
    };

    Alpine.data('ads', alpineData);

    Alpine.start();
  });
