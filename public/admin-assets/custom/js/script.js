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
    $("#alertbottomleft").addClass('disappear');

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
                required: 'The field is required',
                number: "Must contain only integers",
            },
            description: {
                required: 'The field is required',
            },
            image: {
                required: 'The field is required',
            },
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            event.preventDefault();
            var formData = new FormData(form);

            swal({
                title: "Are you sure?",
                text: "Your modifications will be applied",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#006BDD",
                confirmButtonText: "Yes, Update it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm){

                var id = $('#idContainer').attr('data-ad-id');
                var csrfToken = $('input[name="_token"]').val();
                if (isConfirm) {
                    $.ajax({
                        url: "/admin/myads/update/"+id,
                        method: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        data: formData,
                        success: function(response){
                            swal("Deleted!", response.message, "success");
                            window.location.href = "/admin/myads";
                        },
                        error: function(xhr, status, error){
                            swal("Cancelled", error, "error");
                        }
                    })
                } else {
                    swal("Cancelled", "No modification applied", "error");
                }
            });
        },
    });
});
window.addEventListener('alpine:init', () => {
    Alpine.data('data', () => ({
        data: [],
        page: 1,
        totalPages: 2,
        selectedId: null,
        csrfToken:$('input[name="_token"]').val(),
        nextPage(){
            this.page++
        },
        previousPage(){
            this.page--
        },
        loadAds() {
            fetch('/admin/myads/ads?page=' + this.page,{
                method: 'GET',
            }).then(response => response.json())
                .then(data => {
                    this.data = data;
                    this.totalPages = data.annonces.last_page;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        deleteAd() {
            console.log(this.selectedId)
            fetch('/admin/myads/delete/'+this.selectedId ,{
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': this.csrfToken
                },
            });
            this.loadAds()
        },
    })
)})


