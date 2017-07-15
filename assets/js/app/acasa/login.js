

$(document).ready(function () {

    $("#parola").val("");
    $("#email").val("");

    $('#login_form').validate({
        rules: {
            parola: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).css("border-color", "red");
        },
        unhighlight: function (element) {
            $(element).css("border-color", "#fff");
        }
    });

});