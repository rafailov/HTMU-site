
$(document).ready(function(){
    $('#newsLink').click(function(){
        $('.addAdmin').slideUp(10);
        $('.composition').slideUp(10);
        $('#allNews').slideDown("slow");

                
    });
    $('#addAdminLink').click(function(){
        $('#allNews').slideUp(10);
         $('.composition').slideUp(10);
        $('.addAdmin').slideDown("slow");
    });
    $('#composition').click(function(){
        $('#allNews').slideUp(10);
        $('.addAdmin').slideUp(10);
        $('.composition').slideDown("fast");
    });

    $('#removeMessage').click(function(){
        $('#message').slideUp('slow');
    });
    $('#removeError').click(function(){
        $('#errorMessage').slideUp('slow');
    });




    $('.addNews input[type="checkbox"]').click(function(){
        var thisCheck = $(this);

        if(this.checked) {
            $('#idInforPdf').slideDown(500);
        }else{
            $('#idInforPdf').slideUp(500);
        }
    });


    $('.imgForRemoveNews').click(function(){
        var id = $(this).attr('id');
        id = id.substr(4);


        $.ajax({
            url: "../admin/deleteNews.php",
            type: "POST",
            dataType: "html",
            data: {
                value: id
            }
        }).done(function(data) {
            $("#result").html(data);
            $('#newsRow'+id).hide(90);
            //alert("done");
        }).fail(function() {
            alert("Новината не беше премахната успешно !");
        })

    });

    $('.imgForRemoveComposition').click(function(){
        var id = $(this).attr('id');
        id = id.substr(11);

        $.ajax({
            url: "../admin/deleteComposition.php",
            type: "POST",
            dataType: "html",
            data: {
                value: id
            }
        }).done(function(data) {
            $("#result").html(data);
            $('#compositionRow'+id).hide(90);
            //alert(id);
        }).fail(function() {
            alert("Записът не беше премахната успешно !");
        })

    });


});
