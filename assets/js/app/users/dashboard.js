$(document).ready(function() {
   
    $('#users_table').DataTable();
    
    $(".link-del-user").on("click", function () {
            var email = $(this).attr("data-email");

            var r = confirm("Stergi contul " + email + "?");
            if (r == true) {
                    
            } else {
                    return false;
            }
    });
    $(".checkbox_users").change(function(){
       if(this.checked){
           alert($(this).attr("data-id"));
       } 
    });
    $("#users_table_filter label").before("<div class=\"btn-group users_buttons_general\">\n\
                                            <button id=\"add_button\" type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Add</button>\n\
                                            <button type=\"button\" class=\"btn btn-danger\"><i class='fa fa-times' aria-hidden=\"true\"></i> Delete</button>\n\
                                        </div>");
    $("#add_button").on("click",function(){
       $("#users_table tbody tr:first-child").before("<tr><td></td>\n\
                                                        <td></td>\n\
                                                        <td><input type=\"text\"></td>\n\
                                                        <td><input type=\"text\"></td>\n\
                                                        <td><input type=\"text\"></td>\n\
                                                        <td><input type=\"text\"></td>\n\
                                                        <td><button id=\"buton_add\" type=\"button\" class=\"btn btn-success btn-xs\"><i class='fa fa-times' aria-hidden=\"true\"></i> Salveaza</button></td></tr>");
       $("#buton_add").click(function(){
	
                var nume=$("#users_table tbody tr:first-child td:nth-child(3) input").val();
	        var telefon=$("#users_table tbody tr:first-child td:nth-child(4) input").val();
	        var email=$("#users_table tbody tr:first-child td:nth-child(5) input").val();
	        var categorie=$("#users_table tbody tr:first-child td:nth-child(6) input").val();
	        $.ajax({
	            type: "POST",
	            url:_SITE_BASE+"includes/ajax/post_add_users.php",
	            data: {nume:nume,
	                   telefon:telefon,
	                   email:email,
	                   categorie:categorie},
	            success: function(){
	               
	            },
                    error: function(xhr, status, error) {
                        //alert(status);
                    },
	            
	        });
	    });
    });
} );