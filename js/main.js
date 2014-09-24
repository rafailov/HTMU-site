$(document).ready(function(){

    $("#faq").click(function(){
        $("#forus").attr('class','unActive');
        $("#newsbutton").attr('class','unActive');
        $("#forStudents").attr('class','unActive');
        $("#contacts").attr('class','unActive');
        $("#faq").attr('class','active');
    });

    $(".forus").click(function(){
        $("#forusInformation").show(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#structure").hide(500);


        $("#menu a").removeClass( "colored" );
        $(this).addClass( "colored" );
    });
    $(".structure").click(function(){
        $("#forusInformation").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#structure").show(500);


        $("#menu a").removeClass( "colored" );
        $(this).addClass( "colored" );
    });
    $(".staff").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#staff").show(500);


        $("#menu a").removeClass( "colored" );
        $(this).addClass( "colored" );
    });
    $(".committees").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#committees").show(500);


        $("#menu a").removeClass( "colored" );
        $(this).addClass( "colored" );
    });
    $(".homesBoard").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#projects").hide(500);
        $("#homesBoard").show(500);



        $("#menu a").removeClass( "colored" );
        $(this).addClass( "colored" );
    });
    $(".projects").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").show(500);


        $("#menu a").removeClass( "colored" );
        $(this).addClass( "colored" );

    });

    $("#studentDocMenu p").click(function(){
        $("#studentDocMenu p").removeClass( "colored" );
        $(this).addClass( "colored" );
    });

    $(".norm").click(function(){
        $("#normAct").show(200);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });
    $(".uchPlan").click(function(){
        $("#normAct").hide(500);
        $("#planove").show(200);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });
    $(".stipen").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").show(200);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });
    $(".obshtak").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").show(200);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });
    $(".ects").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").show(200);
        $("#diplomni").hide(500);
    });
    $(".diplomna").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").show(200);
    });


});
