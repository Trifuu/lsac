$(document).ready(function () {
    $("#afiseaza_inainte").click(function(){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:_SITE_BASE + "includes/ajax/post_afiseaza_evenimente.php",
            data:{
                data:$("#data_inainte").val(),
                tip:1
            },
            success: function(event){
                if(event=="incorect"){
                    alert("Format incorect pentru data! (recomandat DD.MM.YYYY)");
                } else {
                    console.log(event);
                }
            }
        });
    });
    $("#afiseaza_dupa").click(function(){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:_SITE_BASE + "includes/ajax/post_afiseaza_evenimente.php",
            data:{
                data:$("#data_dupa").val(),
                tip:2
            },
            success: function(event){
                if(event=="incorect"){
                    alert("Format incorect pentru data! (recomandat DD.MM.YYYY)");
                } else {
                    console.log(event);
                }
            }
        });
    });
});