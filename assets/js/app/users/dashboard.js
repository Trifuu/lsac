$(document).ready(function () {

    $('#users_table').DataTable();

    $(".link-del-user").on("click", function () {
        
        var r = confirm("Stergi contul " + $(this).attr("data-email") + "?");
        
        if (r == true) {
            $.ajax({
                type: "POST",
                url: _SITE_BASE + "includes/ajax/post_delete_users.php",
                data: {id: $(this).attr("data-id")},
                success: function (event) {
                    location.reload();
                },
                error: function (xhr, status, error) {
                    //alert(status);
            },
            });
        } else {
            return false;
        }
    });
    $(".checkbox_users").change(function () {
        if (this.checked) {
            alert($(this).attr("data-id"));
        }
    });
    $("#users_table_filter label").before("<div class=\"btn-group users_buttons_general\">\n\
                                            <button id=\"add_button\" type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Add</button>\n\
                                            <button id=\"delete_button\"type=\"button\" class=\"btn btn-danger\"><i class='fa fa-times' aria-hidden=\"true\"></i> Delete</button>\n\
                                        </div>");
    $("#add_button").on("click", function () {
        $(".add_line").show();
    });
    $("#buton_add").click(function () {
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_add_users.php",
            data: {nume: $(".add_line td:nth-child(3) input").val(),
                   telefon: $(".add_line td:nth-child(4) input").val(),
                   email: $(".add_line td:nth-child(5) input").val(),
                   categorie: $(".add_line td:nth-child(6) input").val()
            },
            success: function (event) {
                $(".add_line").hide();
                $(".user_alert").remove();
                $(".row").css("margin-top", "0px");
                $("#users_table_wrapper").before("<div class=\"alert alert-success\" style=\"padding:0px;margin-bottom:6px;height:38px;\">\n\
                                                        <strong style=\"margin-top:8px;display:inline-block;\">Success!</strong> Contul a fost creat, parola acestuia este identica cu parola dumneavoastra.\n\
                                                  </div>");
                setTimeout(function () {
                    $(".alert").remove();
                    $(".row").css("margin-top", "44px");
                    location.reload();
                }, 3000);
            },
            error: function (xhr, status, error) {
                //alert(status);
            },
        });
    });
});