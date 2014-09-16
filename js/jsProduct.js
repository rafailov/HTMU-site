
$(document).ready(function(){
    $('#newsLink').click(function(){
        $('.addAdmin').hide(90);
        $('#allNews').show("slow");
                
    });
    $('#addAdminLink').click(function(){
        $('#allNews').hide(90);
        $('.addAdmin').show("slow");
    });
    $('#removeMessage').click(function(){
        $('#message').slideUp('slow');
    });
    $('#removeError').click(function(){
        $('#errorMessage').slideUp('slow');
    });




    $('.addNews input[type="checkbox"]').click(function(){
        $('#idInforPdf').toggleClass("infoPDF");
    });


    $('.imgForRemoveNews').click(function(){
        var id = $(this).attr('id');
        id = id.substr(4);


        //var keys = $(this).val();
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

    })


});
