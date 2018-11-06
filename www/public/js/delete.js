$(document).ready(function(){
    $("#deleteButton").on("click", function(){
        swal({
            title: $('#deleteTitle').val(),
            text: $('#deleteMessage').val(),
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $('#deleteForm').submit();
            }
        });
    });
});