$(document).ready(function () {
    $("#afiseaza_inainte").click(function(){
        $.ajax({
            type:"POST",
            url:_SITE_BASE + "includes/ajax/post_afiseaza_evenimente.php",
            data:{
                data:$("#data_inainte").val(),
                tip:1
            },
            success: function(event){
                if(event=="nu"){
                    alert("Format incorect pentru data! (DD.MM.YYYY)");
                } else {
                    //completare
                }
            }
        });
    });
    $("#afiseaza_dupa").click(function(){
        $.ajax({
            type:"POST",
            url:_SITE_BASE + "includes/ajax/post_afiseaza_evenimente.php",
            data:{
                data:$("#data_dupa").val(),
                tip:2
            },
            success: function(event){
                if(event=="nu"){
                    alert("Format incorect pentru data! (DD.MM.YYYY)");
                } else {
                    //completare
                }
            }
        });
    });
});