
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
    $('.imgForRemoveNews').click(function(){
        var id = $(this).attr('id');
        id = id.substr(4);

        $('#newsRow'+id).slideUp(90);
        /*<?php include '../database/db.php';
        $db = new DatabaseConnect;
        $sql = "UPDATE `studsavet`.`news` SET `isDeleted` = '1' WHERE `news`.`id` = `2`;";
        $db->execute($sql);
        ?>*/
        console.log(id);
    });

});
