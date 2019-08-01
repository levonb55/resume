//Toggles login/register tabs
$(".Login1").on("click",function () {
    $("#login_form").removeClass("d-none");
    $("#registration_form").addClass("d-none");
});
$(".Registration1").on("click",function () {
    $("#registration_form").removeClass("d-none");
    $("#login_form").addClass("d-none");
});

//AJAX request to register users
$('#register').on('submit', function (e) {
    e.preventDefault();
    let form = $(this);
    $.ajax({
        url: "/register",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        data: form.serializeArray(),
        success: function() {
            window.location.href = '/';
        },
        error: function(error) {
            $('.error').empty();
            $.each(error.responseJSON.errors, function(key,value) {
                $('#' + key + '_error').html(value);
            });
        }
    });
});