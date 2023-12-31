$("document").ready(function () {
    $("#image1").click(function () {
        $("#imageInput1").click();
    });
    $("#image2").click(function () {
        $("#imageInput2").click();
    });
    $("#image3").click(function () {
        $("#imageInput3").click();
    });
    $("#image4").click(function () {
        $("#imageInput4").click();
    });
    $("#alertbottomleft").addClass("disappear");

    $("#toggle-create").on("click", function () {
        $("#categoryModal").addClass("modal-visible");
    });
    $("#changePasswd").on("click", function () {
        $("#passwordModal").addClass("modal-visible");
    });
    $("#changeProfile").on("click", function () {
        $("#profileModal").addClass("modal-visible");
    });

    $("#close-modal-button").on("click", function () {
        console.log("hello");
        $("#categoryModal").removeClass("modal-visible");
        $("#categoryModal").addClass("modal-invisible");
    });
    $("#close-modal-password").on("click", function () {
        console.log("hello");
        $("#passwordModal").removeClass("modal-visible");
        $("#passwordModal").addClass("modal-invisible");
    });
    $("#close-modal-profile").on("click", function () {
        console.log("hello");
        $("#profileModal").removeClass("modal-visible");
        $("#profileModal").addClass("modal-invisible");
    });

    $.validator.addMethod(
        "greaterThan",
        function (value, element, param) {
            var startValue = $(param).val();
            return new Date(value) > new Date(startValue);
        },
        "End date must be greater than the start date."
    );

    $("#boost-form").validate({
        rules: {
            price: {
                required: true,
                number: true,
            },
            start_at: {
                required: true,
            },
            end_at: {
                required: true,
                greaterThan: "#start_at",
            },
        },
        messages: {
            price: {
                required: "The field is required",
                number: "Cannnot contain caracters",
            },
            start_at: {
                required: "The field is required",
            },
            end_at: {
                required: "The field is required",
            },
        },

        submitHandler: function (form) {
            event.preventDefault();
            var xhr = new XMLHttpRequest();
            var id = $("#idContainer").attr("data-ad-id");
            var formData = new FormData(form);
            formData.append("_method", "PUT");
            var csrfToken = $('input[name="_token"]').val();
            xhr.open("POST", "/admin/myads/boost/" + id, true);
            xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    toastr.success("Your boost has been created, please finish payment to upgrade your product");
                    window.open(response, '_blank');
                    $('#closed-boost-modal').click();
                }
            };
            xhr.send(formData);
            form.reset();
            //$('#exampleModalCenter').attr('data-dismiss', 'modal')
        }
    });

    $("form[name='create-category']").validate();
    $("form[name='create-town']").validate();

    $("form[name='edit-profile']").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
            },
            pseudo: {
                required: true,
            },
            phone: {
                required: false,
            },
            address: {
                required: false,
            },
        },
        messages: {
            name: {
                required: "The field is required",
            },
            email: {
                required: "The field is required",
            },
            pseudo: {
                required: "The field is required",
            },
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
    });

    $("form[name='edit-form']").validate({
        rules: {
            name: {
                required: true,
            },
            price: {
                required: true,
                number: true,
            },
            description: {
                required: true,
            },
            image: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "The field is required",
            },
            price: {
                required: "The field is required",
                number: "Must contain only integers",
            },
            description: {
                required: "The field is required",
            },
            image: {
                required: "The field is required",
            },
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            event.preventDefault();
            var formData = new FormData(form);
            formData.append("_method", "PUT");

            swal(
                {
                    title: "Are you sure?",
                    text: "Your modifications will be applied",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#006BDD",
                    confirmButtonText: "Yes, Update it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                },
                function (isConfirm) {
                    var id = $("#idContainer").attr("data-ad-id");
                    var csrfToken = $('input[name="_token"]').val();
                    if (isConfirm) {
                        fetch("/admin/myads/update/" + id, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": csrfToken,
                            },
                            body: formData,
                        })
                            .then((response) => response.json())
                            .then((data) => {
                                swal(
                                    {
                                        title: "Updated!",
                                        text: data.message,
                                        type: "success",
                                        showCancelButton: false,
                                        confirmButtonColor: "#006BDD",
                                        confirmButtonText: "OK",
                                    },
                                    function (isConfirm) {
                                        window.location.href = "/admin/myads";
                                    }
                                );
                            })
                            .catch((error) => {
                                swal("Cancelled", error, "error");
                                console.error(error);
                            });
                    } else {
                        swal("Cancelled", "No modification applied", "error");
                    }
                }
            );
        },
    });

    $("form[name='create-form']").validate({
        rules: {
            name: {
                required: true,
            },
            price: {
                required: true,
                number: true,
            },
            description: {
                required: true,
            },
            image: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "The field is required",
            },
            price: {
                required: "The field is required",
                number: "Must contain only integers",
            },
            description: {
                required: "The field is required",
            },
            image: {
                required: "The field is required",
            },
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            // event.preventDefault();
            // var formData = new FormData(form);
            // var id = $("#idContainer").attr("data-ad-id");
            // var csrfToken = $('input[name="_token"]').val();

            // fetch("/admin/myads/store/", {
            //     method: "POST",
            //     headers: {
            //         "X-CSRF-TOKEN": csrfToken,
            //     },
            //     body: formData,
            // })
            //     .then((response) => response.json())
            //     .then((data) => {
            //         swal(
            //             {
            //                 title: "Created!",
            //                 text: data.message,
            //                 type: "success",
            //                 showCancelButton: false,
            //                 confirmButtonColor: "#006BDD",
            //                 confirmButtonText: "OK",
            //             },
            //             function (isConfirm) {
            //                 window.location.href = "/admin/myads";
            //             }
            //         );
            //     })
            //     .catch((error) => {
            //         swal("Cancelled", error, "error");
            //         console.error(error);
            //     });
            form.submit()
        },
    });
});
window.addEventListener("alpine:init", () => {
    Alpine.data("data", () => ({
        data: [],
        page: 1,
        totalPages: 2,
        selectedId: null,
        csrfToken: $('input[name="_token"]').val(),
        nextPage() {
            this.page++;
        },
        previousPage() {
            this.page--;
        },
        loadAds() {
            fetch("/admin/myads/ads?page=" + this.page, {
                method: "GET",
            })
                .then((response) => response.json())
                .then((data) => {
                    this.data = data;
                    this.totalPages = data.annonces.last_page;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        deleteAd() {
            console.log(this.selectedId);
            fetch("/admin/myads/delete/" + this.selectedId, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": this.csrfToken,
                },
            });
            this.loadAds();
        },
    }));
});
