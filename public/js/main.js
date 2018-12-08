var letters = ["C.png", "D.png", "H.png", "K.png", "N.png", "O.png", "R.png", "S.png", "V.png", "Z.png"];
var numbers = ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png" , "5.png"];
var ees = ["Down.png","Up.png","Left.png","Right.png", "Down.png","Up.png","Left.png","Right.png","Left.png","Right.png"];
var pictures = ["Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png", "Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png"];
var image = letters;
var singleLetter = false;

var socket = io('http://' + location.hostname + ':8000');
socket.on('private-default:App\\Events\\EventWasTriggered', function(data){

  var number = data.size;
  var size = data.numbers;
  var numbers2 = data.numbers2;
  var numbers3 = data.numbers3;
  var numbers4 = data.numbers4;
  var numbers5 = data.numbers5;
  var numbers6 = data.numbers6;
  console.log(data);
  if(data.size == "singleFilter"){
    singleLetter = !singleLetter;
    console.log(singleLetter);
    if(singleLetter == true){

      $("#singleFilter").removeClass("singleFilter");
      $("#singleFilter").addClass("singleFilterActive");
    } else {
      $("#singleFilter").removeClass("singleFilterActive");
      $("#singleFilter").addClass("singleFilter");
    }
  }

  if (data.size == "refresh"){
    location.reload();
  }
  if(data.size == 20 || data.size == 25 || data.size == 30 || data.size == 40 || data.size == 50 || data.size == 60 || data.size == 70){
    clear();
    $("#line1").css("display", "block");
    if(singleLetter == true){
        $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    } else {
      $("#oneone").attr("src", "/images/" + image[size[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[size[2]]).show();
      $("#onethree").attr("src", "/images/" + image[size[3]]).show();
      $("#onefour").attr("src", "/images/" + image[size[4]]).show();
      $("#onefive").attr("src", "/images/" + image[size[0]]).show();
  // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' /> <img src='/images/" + image[size[0]] + "' />" );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");

} else if (data.size == 80){
  clear();
   $("#line1").css("display", "block");
  if(singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> " );
  } else {
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[2]]).show();
    $("#onethree").attr("src", "/images/" + image[size[3]]).show();
    $("#onefour").attr("src", "/images/" + image[size[4]]).show();
    // $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
  // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' /> " );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");

} else if (data.size == 100){
  clear();
   $("#line1").css("display", "block");
  if(singleLetter == true){
   $("#oneone").attr("src", "/images/" + image[size[1]]).show();
  } else {
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[2]]).show();
    $("#onethree").attr("src", "/images/" + image[size[3]]).show();
    // $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
    // $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
  // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> " );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");

} else if (data.size == 200){
  clear();
   $("#line1").css("display", "block");
  if(singleLetter == true){
 $("#oneone").attr("src", "/images/" + image[size[1]]).show();
  } else {
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[2]]).show();
    // $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
    // $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
    // $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
  // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> " );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");

} else if (data.size == 300 || data.size == 400){
  clear();
   $("#line1").css("display", "block");
   $("#oneone").attr("src", "/images/" + image[size[1]]).show();
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
} else if (data.size == 400200 ){
  clear();
   $("#line1").css("display", "block");
    $("#line2").css("display", "block");
  if (singleLetter == true){
     $("#oneone").attr("src", "/images/" + image[size[1]]).show();
      $("#twoone").attr("src", "/images/" + image[size[2]]).show();
    // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> " );
    // $('#line2').html("<img src='/images/" + image[size[2]] + "'/> " );
  } else {
     $("#oneone").attr("src", "/images/" + image[size[1]]).show();
      $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
       $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
  // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> " );
  // $("#line2").html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' />");
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");

}else if (data.size == 1008070 ){
  clear();
   $("#line1").css("display", "block");
    $("#line2").css("display", "block");
     $("#line3").css("display", "block");
  if(singleLetter == true){
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
     $("#twoone").attr("src", "/images/" + image[size[2]]).show();
     $("#threeone").attr("src", "/images/" + image[size[3]]).show();

    // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> " );
    // $('#line2').html("<img src='/images/" + image[size[2]] + "'/> " );
    // $('#line3').html("<img src='/images/" + image[size[3]] + "'/> " );
  } else {
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[2]]).show();
    $("#onethree").attr("src", "/images/" + image[size[3]]).show();

    $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
    $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
    $("#twothree").attr("src", "/images/" + image[numbers2[2]]).show();
    $("#twofour").attr("src", "/images/" + image[numbers2[3]]).show();

    $("#threeone").attr("src", "/images/" + image[numbers3[0]]).show();
    $("#threetwo").attr("src", "/images/" + image[numbers3[1]]).show();
    $("#threethree").attr("src", "/images/" + image[numbers3[2]]).show();
    $("#threefour").attr("src", "/images/" + image[numbers3[3]]).show();
    $("#threefive").attr("src", "/images/" + image[numbers3[4]]).show();
  // $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> " );
  // $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> " );
  // $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
}else if (data.size == 605040 ){
  clear();
   $("#line1").css("display", "block");
    $("#line2").css("display", "block");
     $("#line3").css("display", "block");
  if (singleLetter == true){
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
     $("#twoone").attr("src", "/images/" + image[size[2]]).show();
     $("#threeone").attr("src", "/images/" + image[size[3]]).show();
  } else {
    $("#oneone").attr("src", "/images/" + image[size[0]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[1]]).show();
    $("#onethree").attr("src", "/images/" + image[size[2]]).show();
    $("#onefour").attr("src", "/images/" + image[size[3]]).show();
    $("#onefive").attr("src", "/images/" + image[size[4]]).show();

    $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
    $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
    $("#twothree").attr("src", "/images/" + image[numbers2[2]]).show();
    $("#twofour").attr("src", "/images/" + image[numbers2[3]]).show();
    $("#twofive").attr("src", "/images/" + image[numbers2[4]]).show();

    $("#threeone").attr("src", "/images/" + image[numbers3[0]]).show();
    $("#threetwo").attr("src", "/images/" + image[numbers3[1]]).show();
    $("#threethree").attr("src", "/images/" + image[numbers3[2]]).show();
    $("#threefour").attr("src", "/images/" + image[numbers3[3]]).show();
    $("#threefive").attr("src", "/images/" + image[numbers3[4]]).show();
  // $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
  // $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
  // $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
}else if (data.size == 302520 ){
  clear();
  $("#line1").css("display", "block");
   $("#line2").css("display", "block");
    $("#line3").css("display", "block");
  if(singleLetter == true){
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
     $("#twoone").attr("src", "/images/" + image[size[2]]).show();
     $("#threeone").attr("src", "/images/" + image[size[3]]).show();
  }else {
    $("#oneone").attr("src", "/images/" + image[size[0]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[1]]).show();
    $("#onethree").attr("src", "/images/" + image[size[2]]).show();
    $("#onefour").attr("src", "/images/" + image[size[3]]).show();
    $("#onefive").attr("src", "/images/" + image[size[4]]).show();

    $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
    $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
    $("#twothree").attr("src", "/images/" + image[numbers2[2]]).show();
    $("#twofour").attr("src", "/images/" + image[numbers2[3]]).show();
    $("#twofive").attr("src", "/images/" + image[numbers2[4]]).show();

    $("#threeone").attr("src", "/images/" + image[numbers3[0]]).show();
    $("#threetwo").attr("src", "/images/" + image[numbers3[1]]).show();
    $("#threethree").attr("src", "/images/" + image[numbers3[2]]).show();
    $("#threefour").attr("src", "/images/" + image[numbers3[3]]).show();
    $("#threefive").attr("src", "/images/" + image[numbers3[4]]).show();
  // $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
  // $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
  // $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
}else if (data.size == 6020 ){
  clear();
  $("#line1").css("display", "block");
   $("#line2").css("display", "block");
    $("#line3").css("display", "block");
    $("#line4").css("display", "block");
     $("#line5").css("display", "block");
      $("#line6").css("display", "block");
  if (singleLetter == true){
    $("#oneone").attr("src", "/images/" + image[size[1]]).show();
    $("#twoone").attr("src", "/images/" + image[size[2]]).show();
    $("#threeone").attr("src", "/images/" + image[size[3]]).show();
    $("#fourone").attr("src", "/images/" + image[size[4]]).show();
    $("#fiveone").attr("src", "/images/" + image[size[0]]).show();
    $("#sixone").attr("src", "/images/" + image[size[2]]).show();
  } else {

    $("#oneone").attr("src", "/images/" + image[size[0]]).show();
    $("#onetwo").attr("src", "/images/" + image[size[1]]).show();
    $("#onethree").attr("src", "/images/" + image[size[2]]).show();
    $("#onefour").attr("src", "/images/" + image[size[3]]).show();
    $("#onefive").attr("src", "/images/" + image[size[4]]).show();

    $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
    $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
    $("#twothree").attr("src", "/images/" + image[numbers2[2]]).show();
    $("#twofour").attr("src", "/images/" + image[numbers2[3]]).show();
    $("#twofive").attr("src", "/images/" + image[numbers2[4]]).show();

    $("#threeone").attr("src", "/images/" + image[numbers3[0]]).show();
    $("#threetwo").attr("src", "/images/" + image[numbers3[1]]).show();
    $("#threethree").attr("src", "/images/" + image[numbers3[2]]).show();
    $("#threefour").attr("src", "/images/" + image[numbers3[3]]).show();
    $("#threefive").attr("src", "/images/" + image[numbers3[4]]).show();

    $("#fourone").attr("src", "/images/" + image[numbers4[0]]).show();
    $("#fourtwo").attr("src", "/images/" + image[numbers4[1]]).show();
    $("#fourthree").attr("src", "/images/" + image[numbers4[2]]).show();
    $("#fourfour").attr("src", "/images/" + image[numbers4[3]]).show();
    $("#fourfive").attr("src", "/images/" + image[numbers4[4]]).show();

    $("#fiveone").attr("src", "/images/" + image[numbers5[0]]).show();
    $("#fivetwo").attr("src", "/images/" + image[numbers5[1]]).show();
    $("#fivethree").attr("src", "/images/" + image[numbers5[2]]).show();
    $("#fivefour").attr("src", "/images/" + image[numbers5[3]]).show();
    $("#fivefive").attr("src", "/images/" + image[numbers5[4]]).show();

    $("#sixone").attr("src", "/images/" + image[numbers6[0]]).show();
    $("#sixtwo").attr("src", "/images/" + image[numbers6[1]]).show();
    $("#sixthree").attr("src", "/images/" + image[numbers6[2]]).show();
    $("#sixfour").attr("src", "/images/" + image[numbers6[3]]).show();
    $("#sixfive").attr("src", "/images/" + image[numbers6[4]]).show();
  // $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
  // $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
  // $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  // $('#line4').html("<img src='/images/" + image[numbers4[0]] + "'/> <img src='/images/" + image[numbers4[1]] + "' /> <img src='/images/" + image[numbers4[2]] + "' /> <img src='/images/" + image[numbers4[3]] + "' /> <img src='/images/" + image[numbers4[4]] + "' />" );
  // $('#line5').html("<img src='/images/" + image[numbers5[0]] + "'/> <img src='/images/" + image[numbers5[1]] + "' /> <img src='/images/" + image[numbers5[2]] + "' /> <img src='/images/" + image[numbers5[3]] + "' /> <img src='/images/" + image[numbers5[4]] + "' />" );
  // $('#line6').html("<img src='/images/" + image[numbers6[0]] + "'/> <img src='/images/" + image[numbers6[1]] + "' /> <img src='/images/" + image[numbers6[2]] + "' /> <img src='/images/" + image[numbers6[3]] + "' /> <img src='/images/" + image[numbers6[4]] + "' />" );
}
  $("*.lineButtonActive").removeClass("lineButtonActive");
   $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
}else if (data.size == "mode1"){
  $("*.modeButtonActive").removeClass("modeButtonActive");
  $("#singleLetter").addClass("modeButtonActive");
  image = letters;
}else if (data.size == "mode2"){
  $("*.modeButtonActive").removeClass("modeButtonActive");
  $("#number").addClass("modeButtonActive");
  image = numbers;
}else if (data.size == "mode3"){
  $("*.modeButtonActive").removeClass("modeButtonActive");
  $("#tumblingE").addClass("modeButtonActive");
  image = ees;
}else if (data.size == "mode4"){
  $("*.modeButtonActive").removeClass("modeButtonActive");
  $("#picture").addClass("modeButtonActive");
  image = pictures;
}else if (data.size == "duochrome"){
  $("#duochrome").toggleClass("duochrome");
}else if (data.size == "mute"){
  $("#mute").toggleClass("duochrome");
}

});

function clear(){
  $("*img").attr('src', '');
  $("*img").css("display", "none");
  $("#line1").css("display", "none");
  $("#line2").css("display", "none");
  $("#line3").css("display", "none");
  $("#line4").css("display", "none");
  $("#line5").css("display", "none");
  $("#line6").css("display", "none");
}

 $(document).ready(function(){

   $('.singleButtons').on('click', function(){

     var numbers = $(this).data('size');
     $.ajax({
       url: '/a',
       data: {
         'size': numbers,
       },
       success: function(response){
         // $("p").html(response + ": " + numbers);
         // console.log(response);
       }
     });
   });

 });

 $( "html" ).on( "keydown", function( event ) {

   if(event.which == 13){
     if($("#instructions").css("display") == "none"){
       $("#instructions").css("display", "block");
     }else {
       $("#instructions").css("display", "none");
     }
   }
 if (event.which == 81 ){
   $( "#fourHundred" ).trigger( "click" );
 };
if(event.which == 87 ){
 $( "#threeHundred" ).trigger( "click" );
};
if (event.which == 69 ){
 $( "#twoHundred" ).trigger( "click" );
};
if (event.which == 82 ){
 $( "#oneHundred" ).trigger( "click" );
};
if (event.which == 84 ){
 $( "#eighty" ).trigger( "click" );
};
if (event.which == 89 ){
 $( "#seventy" ).trigger( "click" );
};
if (event.which == 85 ){
 $( "#sixty" ).trigger( "click" );
};
if (event.which == 73 ){
 $( "#fifty" ).trigger( "click" );
};
if (event.which == 79 ){
 $( "#forty" ).trigger( "click" );
};
if (event.which == 80 ){
 $( "#thirty" ).trigger( "click" );
};
if (event.which == 65 ){
 $( "#twentyFive" ).trigger( "click" );
};
if (event.which == 83 ){
 $( "#twenty" ).trigger( "click" );
};
if (event.which == 68 ){
 $( "#groupOne" ).trigger( "click" );
};
if (event.which == 70 ){
 $( "#groupTwo" ).trigger( "click" );
};
if (event.which == 71 ){
 $( "#groupThree" ).trigger( "click" );
};
if (event.which == 72 ){
 $( "#groupFour" ).trigger( "click" );
};
if (event.which == 74 ){
 $( "#groupSix" ).trigger( "click" );
};
if (event.which == 49 ){
 $( "#singleLetter" ).trigger( "click" );
};
if (event.which == 50 ){
 $( "#number" ).trigger( "click" );
};
if (event.which == 51 ){
 $( "#tumblingE" ).trigger( "click" );
};
if (event.which == 52 ){
 $( "#picture" ).trigger( "click" );
};
if (event.which == 53 ){
 $( "#duochrome" ).trigger( "click" );
};
if (event.which == 54 ){
 $( "#mute" ).trigger( "click" );
};
if (event.which == 40 ){
 $( "#zoomOut" ).trigger( "click" );
};
if (event.which == 38 ){
 $( "#zoomIn" ).trigger( "click" );
};
if (event.which == 77 ){
 $( "#mirror" ).trigger( "click" );
};
if (event.which == 106 ){
 $( "#reset" ).trigger( "click" );
};
if (event.which == 55 ){
 $( "#singleFilter" ).trigger( "click" );
};
if (event.which == 67 ){
 $( "#refresh" ).trigger( "click" );
};
});
