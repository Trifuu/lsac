$(document).ready(function () {

    $("#afiseaza_inainte").click(function(){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:_SITE_BASE + "includes/ajax/post_afiseaza_evenimente.php",
            data:{
                data:$("#data_inainte").val(),
                tip:$('#inainte').is(':checked') ? 1 : 2
            },
            success: function(event){
                $(".afiseza_evenimente").empty();
                var limit=event.length>4? 4:event.length;
                var str="";
                for(var i=0;i<limit;i++){
                    str+="<div class='interior_event'>\n\
                            <form action='http://localhost/lsac/evenimente/detalii&id=1' method='get'>\n\
                                "+event[i]["nume"]+"\
                                <button class='detalii_evenimente btn btn-success' type='submit'>detalii</button>\n\
                            </form>\n\
                          </div>";
                }
                $(".afiseza_evenimente").append(str);
            },
            error: function(event){
                $("#data_inainte").val("");
                alert("Format incorect pentru data! (recomandat DD.MM.YYYY)");
            }
        });
    });
});