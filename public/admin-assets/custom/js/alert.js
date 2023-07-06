$('#delete-alert').click(function(){
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#FF6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function(){
        var id = $('#idContainer').attr('data-ad-id');
        var csrfToken = $('input[name="_token"]').val();
        $.ajax({
            url: "/admin/myads/delete/"+id,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response){
                swal("Deleted!", response.message, "success");
                window.location.href = "/admin/myads";
            },
            error: function(xhr, status, error){
                swal("Cancelled", "An error ocurred", "error");
            }
        })

    });
});

//Parameter
$('#edit-alert').click(function(){
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
                success: function(response){
                    swal("Updated!", response.message, "success");
                    window.location.href = "/admin/myads";
                },
                error: function(xhr, status, error){
                    swal("Cancelled", "An error ocurred", "error");
                }
            })
            swal("Updated!", response.message, "success");
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
});
