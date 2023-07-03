$("document").ready(function () {
    // $("form[name='delete-ad-form']").validate({
    //     submitHandler: function (form) {
    //         const formData = new FormData(form);

    //         fetch("/admin/myads/", {
    //             method: "DELETE",
    //             body: formData,
    //         })
    //             .then((response) => response.json())
    //             .then((data) => {
    //                 if (data.status) {
    //                     toastr.success("Ad deleted Successfully");
    //                 } else {
    //                     toastr.error("Unable to delete ad");
    //                 }
    //             })
    //             .catch((error) => {
    //                 toastr.error("An error occured");
    //             });
    //     },
    // });

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
});
