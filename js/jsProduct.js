
$(document).ready(function(){
    $('#newsLink').click(function(){
        $('.addAdmin').slideUp(100);
        $('.groupeAndDocs').slideUp(100);
        $('#allNews').slideDown("fast");
                
    });
    $('#addAdminLink').click(function(){
        $('#allNews').slideUp(100);
        $('.groupeAndDocs').slideUp(100);
        $('.addAdmin').slideDown("fast");
    });
    $('#addGroupPDF').click(function(){
        $('#allNews').slideUp(100);
        $('.addAdmin').slideUp(100);
        $('.groupeAndDocs').slideDown("fast");
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

    })


});
