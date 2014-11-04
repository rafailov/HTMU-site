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
    });
    $(".structure").click(function(){
        $("#forusInformation").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#structure").show(500);
    });
    $(".staff").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#staff").show(500);
    });
    $(".committees").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#committees").show(500);
    });
    $(".homesBoard").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#projects").hide(500);
        $("#homesBoard").show(500);
    });
    $(".projects").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").show(500);
    });
    $("#menu a").click(function(){
        $("#menu a").removeClass("colored");
        $(this).addClass("colored");
    });



    $("#studentDocMenu p").click(function(){
        $("#studentDocMenu p").removeClass( "colored" );
        $(this).addClass( "colored" );
    });
//----------------------
 
    $(".norm").click(function(){
		console.log("NORMATIVNI AKTOVE");
        $("#studentFileMenu div").removeClass("visible");
        $("#studentFileMenu div").addClass("unVisible");
        $("#normAct").addClass("visible");
        $("#normAct").removeClass("unVisible");
    });
    /*$(".norm").click(function(){
        $("#normAct").show(200);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });*/
    $(".uchPlan").click(function(){
		console.log("UchebniPlanove");
        $("#studentFileMenu div").removeClass("visible");
        $("#studentFileMenu div").addClass("unVisible");
        $("#planove").addClass("visible");
        $("#planove").removeClass("unVisible");
    });
    /*$(".uchPlan").click(function(){
        $("#normAct").hide(500);
        $("#planove").show(200);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });*/
    $(".stipen").click(function(){
		console.log("Stipendii");
        $("#studentFileMenu div").removeClass("visible");
        $("#studentFileMenu div").addClass("unVisible");
        $("#stipendii").addClass("visible");
        $("#stipendii").removeClass("unVisible");
    });
    /*$(".stipen").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").show(200);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });*/
    $(".obshtak").click(function(){
		console.log("Obshtak");
        $("#studentFileMenu div").removeClass("visible");
        $("#studentFileMenu div").addClass("unVisible");
        $("#obsht").addClass("visible");
        $("#obsht").removeClass("unVisible");
    });
    /*$(".obshtak").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").show(200);
        $("#ects").hide(500);
        $("#diplomni").hide(500);
    });*/
    $(".ects").click(function(){
		console.log("ETCS");
        $("#studentFileMenu div").removeClass("visible");
        $("#studentFileMenu div").addClass("unVisible");
        $("#ects").addClass("visible");
        $("#ects").removeClass("unVisible");
    });
    /*$(".ects").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").show(200);
        $("#diplomni").hide(500);
    });*/
    $(".diplomna").click(function(){
		console.log("DIPLOMNA");
        $("#studentFileMenu div").removeClass("visible");
        $("#studentFileMenu div").addClass("unVisible");
        $("#diplomni").addClass("visible");
        $("#diplomni").removeClass("unVisible");
    });
    /*$(".diplomna").click(function(){
        $("#normAct").hide(500);
        $("#planove").hide(500);
        $("#stipendii").hide(500);
        $("#obsht").hide(500);
        $("#ects").hide(500);
        $("#diplomni").show(200);
    });*/
//--------------

    $("#fxt").click(function(){
        $("#fxsiDiv").slideUp(200);
        $("#fmmDiv").slideUp(200);
        $("#fxtDiv").slideDown(500);
    });

    $("#fxsi").click(function(){
        $("#fxtDiv").slideUp(200);
        $("#fmmDiv").slideUp(200);
        $("#fxsiDiv").slideDown(500);
    });

    $("#fmm").click(function(){
        $("#fxtDiv").slideUp(200);
        $("#fxsiDiv").slideUp(200);
        $("#fmmDiv").slideDown(500);
    });
    $("#staff h3").click(function(){
        $("#staff h3").removeClass( "greenColor" );
        $(this).addClass( "greenColor" );
    });



    $("#committees ul li").click(function(){
        $("#committees ul li").removeClass( "greenColor" );
        $(this).addClass( "greenColor" );
    });





    $("#kud").click(function(){
        $("#ksbvuDiv").slideUp(200);
        $("#kmdDiv").slideUp(200);
        $("#kboDiv").slideUp(200);
        $("#ksDiv").slideUp(200);
        $("#kudDiv").slideDown(500);
    });
    $("#ksbvu").click(function(){
        $("#kmdDiv").slideUp(200);
        $("#kboDiv").slideUp(200);
        $("#ksDiv").slideUp(200);
        $("#kudDiv").slideUp(200);
        $("#ksbvuDiv").slideDown(500);
    });
    $("#kmd").click(function(){
        $("#ksbvuDiv").slideUp(200);
        $("#kboDiv").slideUp(200);
        $("#ksDiv").slideUp(200);
        $("#kudDiv").slideUp(200);
        $("#kmdDiv").slideDown(500);
    });
    $("#kbo").click(function(){
        $("#ksbvuDiv").slideUp(200);
        $("#kmdDiv").slideUp(200);
        $("#ksDiv").slideUp(200);
        $("#kudDiv").slideUp(200);
        $("#kboDiv").slideDown(500);
    });
    $("#ks").click(function(){
        $("#ksbvuDiv").slideUp(200);
        $("#kmdDiv").slideUp(200);
        $("#kboDiv").slideUp(200);
        $("#kudDiv").slideUp(200);
        $("#ksDiv").slideDown(500);
    });



});
