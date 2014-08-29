$(document).ready(function(){
        $("#forus").click(function(){
            $("#forus").attr('class','active');
            $("#newsbutton").attr('class','unActive');
            $("#forStudents").attr('class','unActive');
            $("#contacts").attr('class','unActive');
            $("#faq").attr('class','unActive');
        });
        $("#newsbutton").click(function(){
            $("#forus").attr('class','unActive');
            $("#newsbutton").attr('class','active');
            $("#forStudents").attr('class','unActive');
            $("#contacts").attr('class','unActive');
            $("#faq").attr('class','unActive');
        });
        $("#forStudents").click(function(){
            $("#forus").attr('class','unActive');
            $("#newsbutton").attr('class','unActive');
            $("#forStudents").attr('class','active');
            $("#contacts").attr('class','unActive');
            $("#faq").attr('class','unActive');
        });
        $("#contacts").click(function(){
            $("#forus").attr('class','unActive');
            $("#newsbutton").attr('class','unActive');
            $("#forStudents").attr('class','unActive');
            $("#contacts").attr('class','active');
            $("#faq").attr('class','unActive');
        });
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


        $(".forus").addClass( "colored" );
        $(".staff").removeClass( "colored" );
        $(".committees").removeClass( "colored" );
        $(".homesBoard").removeClass( "colored" );
        $(".projects").removeClass( "colored" );
        $(".structure").removeClass( "colored" );
    });
    $(".structure").click(function(){
        $("#forusInformation").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#structure").show(500);


        $(".forus").removeClass( "colored" );
        $(".staff").removeClass( "colored" );
        $(".committees").removeClass( "colored" );
        $(".homesBoard").removeClass( "colored" );
        $(".projects").removeClass( "colored" );
        $(".structure").addClass( "colored" );
    });
    $(".staff").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#staff").show(500);



        $(".forus").removeClass( "colored" );
        $(".staff").addClass( "colored" );
        $(".committees").removeClass( "colored" );
        $(".homesBoard").removeClass( "colored" );
        $(".projects").removeClass( "colored" );
        $(".structure").removeClass( "colored" );
    });
    $(".committees").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").hide(500);
        $("#committees").show(500);



        $(".forus").removeClass( "colored" );
        $(".staff").removeClass( "colored" );
        $(".committees").addClass( "colored" );
        $(".homesBoard").removeClass( "colored" );
        $(".projects").removeClass( "colored" );
        $(".structure").removeClass( "colored" );
    });
    $(".homesBoard").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#projects").hide(500);
        $("#homesBoard").show(500);



        $(".forus").removeClass( "colored" );
        $(".staff").removeClass( "colored" );
        $(".committees").removeClass( "colored" );
        $(".homesBoard").addClass( "colored" );
        $(".projects").removeClass( "colored" );
        $(".structure").removeClass( "colored" );
    });
    $(".projects").click(function(){
        $("#forusInformation").hide(500);
        $("#structure").hide(500);
        $("#staff").hide(500);
        $("#committees").hide(500);
        $("#homesBoard").hide(500);
        $("#projects").show(500);



        $(".forus").removeClass( "colored" );
        $(".staff").removeClass( "colored" );
        $(".committees").removeClass( "colored" );
        $(".homesBoard").removeClass( "colored" );
        $(".projects").addClass( "colored" );
        $(".structure").removeClass( "colored" );
    });


});
/*                */

/**/