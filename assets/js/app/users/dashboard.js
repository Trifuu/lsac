$(document).ready(function () {

    var checkbox=[];
    $('.checkbox_users').click(function(){
        if (this.checked) {
            checkbox.push($(this).attr("data-id"));
        }else{
            checkbox.pop($(this).attr("data-id"));
        }
        console.log(checkbox);
    });

    $('#users_table').DataTable();

    $(".del-user").on("click", function () {
        
        var r = confirm("Stergi contul " + $(this).attr("data-email") + "?");
        
        if (r == true) {
            $.ajax({
                type: "POST",
                url: _SITE_BASE + "includes/ajax/post_delete_users.php",
                data: {id: $(this).attr("data-id"),
                       multiple:false},
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
                $(".add_line td:nth-child(3) input").val("");
                $(".add_line td:nth-child(4) input").val("");
                $(".add_line td:nth-child(5) input").val("");
                $(".add_line td:nth-child(6) input").val("");
                $(".alert").remove();
                //modificat aici sa se dea refresh si dupa sa se faca apend
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
    $(".modifica").dblclick(function(){
        $("#modifica").parent().text($("#modifica").val());
        $("#modifica").remove();
        
        var text=$(this).text();
        $(this).text("");
        $(this).append("<input id=\"modifica\" type=\"text\" value=\""+text+"\" style=\"width:"+($(this).width()-20)+"px;\">");
        $(".modifica-user").click(function(){
            var col = $("#modifica").parent().index();
            if(col==2){
                col="nume";
            }else if(col==3){
                col="tel";
            }else if(col==4){
                col="email";
            }else if(col==5){
                col="categorie";
            }
            var id=$("#modifica").parent().parent("tr").children("td").eq(1).text();
            if(id==$(this).parent().parent().children("td").eq(1).text())
            {
                var val=$("#modifica").val();
                $.ajax({
                    type: "POST",
                    url: _SITE_BASE + "includes/ajax/post_update_users.php",
                    data: {id: id,
                           col: col,
                           val: val
                    },
                    success: function (event) {
                        $("#modifica").parent().text(val);
                        $("#modifica").remove();
                    },
                    error: function (xhr, status, error) {
                        //alert(error);
                    },
                });
            }
        }); 
    });
    $("#delete_button").click(function(){
            
        if(checkbox.length>0){
            var r = confirm("Stergi contul " + $(this).attr("data-email") + "?");

            if (r == true) {
            $.ajax({
                type: "POST",
                url: _SITE_BASE + "includes/ajax/post_delete_users.php",
                data: {id: checkbox,
                       multiple:true},
                success: function (event) {
                    //alert(event);
                    console.log(event);
                    location.reload();
                },
                error: function (xhr, status, error) {
                    //alert(error);
                },
            });
            } else {
                return false;
            }
        } else{
            alert("Selectati minim un rand pentru stergere.");
        }
        
    });
});