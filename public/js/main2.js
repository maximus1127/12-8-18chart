var letters = ["C", "D", "H", "K", "N", "O", "R", "S", "V", "Z"];
var numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9" , "5"];
var ees = ["d","j","i","e", "d","j","i","e","i","j"];
var pictures = ["k", "h", "f", "g", "b", "c", "k", "h", "f", "g", "b", "c"];
var image = letters;
var fontType = true;
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
      if(fontType == false && singleLetter == false){
    $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' /> <img src='/images/" + image[size[0]] + "' />" );
  } if (fontType == true && singleLetter == false) {
    $("#line1").html(image[size[1]] + " " + image[size[2]] + " "+ image[size[3]] + " "+ image[size[4]] + " "+ image[size[0]]);
  } if(fontType == false && singleLetter == true){
    $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
  } if (fontType == true && singleLetter == true){
    $("#line1").html(image[size[1]]);
  }

    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  } else if (data.size == 80){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "' /> <img src='/images/" + image[size[4]] + "' />" );
} if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[1]] + " " + image[size[2]] + " "+ image[size[3]] + " "+ image[size[4]] );
} if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
} if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
}
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  } else if (data.size == 100){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "'/>" );
} if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[1]] + " " + image[size[2]] + " "+ image[size[3]]);
} if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
} if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
}
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  } else if (data.size == 200){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "'/>" );
} if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[1]] + " " + image[size[2]]);
} if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
} if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
}
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  } else if (data.size == 300 || data.size == 400){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/>" );
} if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[1]]);
} if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
} if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
}
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  } else if (data.size == 400200 ){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/>" );
  $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "'/>" );
  } if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[1]]);
  $("#line2").html(image[numbers2[0]] + " " + image[numbers2[1]]);
  } if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
  $('#line2').html("<img src='/images/" + image[size[2]] + "'/> ");
  } if (fontType == true && singleLetter == true){
    $("#line1").html(image[size[1]]);
  $("#line2").html(image[size[2]]);
  }
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  }else if (data.size == 1008070 ){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> <img src='/images/" + image[size[2]] + "' /> <img src='/images/" + image[size[3]] + "'/>" );
  $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' />" );
  $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  } if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[1]] + " " + image[size[2]] + " "+ image[size[3]]);
  $("#line2").html(image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] );
  $("#line3").html(image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
  } if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
  $('#line2').html("<img src='/images/" + image[size[2]] + "'/> ");
  $('#line3').html("<img src='/images/" + image[size[3]] + "'/> ");
  } if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
  $("#line2").html(image[size[2]]);
  $("#line3").html(image[size[3]]);

  }
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  }else if (data.size == 605040 ){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "'/> <img src='/images/" + image[size[3]] + "'/> <img src='/images/" + image[size[4]] + "'/>" );
  $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "'/>" );
  $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  } if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[0]] + " " + image[size[1]] + " "+ image[size[2]]+ " "+ image[size[3]]+ " "+ image[size[4]]);
  $("#line2").html(image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] + " "+ image[numbers2[4]] );
  $("#line3").html(image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
  } if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
  $('#line2').html("<img src='/images/" + image[size[2]] + "'/> ");
  $('#line3').html("<img src='/images/" + image[size[3]] + "'/> ");
  } if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
  $("#line2").html(image[size[2]]);
  $("#line3").html(image[size[3]]);

  }
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  }else if (data.size == 302520 ){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "'/> <img src='/images/" + image[size[3]] + "'/> <img src='/images/" + image[size[4]] + "'/>" );
  $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "'/>" );
  $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  } if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[0]] + " " + image[size[1]] + " "+ image[size[2]]+ " "+ image[size[3]]+ " "+ image[size[4]]);
  $("#line2").html(image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] + " "+ image[numbers2[4]] );
  $("#line3").html(image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
  } if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
  $('#line2').html("<img src='/images/" + image[size[2]] + "'/> ");
  $('#line3').html("<img src='/images/" + image[size[3]] + "'/> ");
  } if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
  $("#line2").html(image[size[2]]);
  $("#line3").html(image[size[3]]);

  }
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  }else if (data.size == 6020 ){
    clear();
    if(fontType == false && singleLetter == false){
  $('#line1').html("<img src='/images/" + image[size[0]] + "'/> <img src='/images/" + image[size[1]] + "' /> <img src='/images/" + image[size[2]] + "'/> <img src='/images/" + image[size[3]] + "'/> <img src='/images/" + image[size[4]] + "'/>" );
  $('#line2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "'/>" );
  $('#line3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  $('#line4').html("<img src='/images/" + image[numbers4[0]] + "'/> <img src='/images/" + image[numbers4[1]] + "' /> <img src='/images/" + image[numbers4[2]] + "'/> <img src='/images/" + image[numbers4[3]] + "'/> <img src='/images/" + image[numbers4[4]] + "'/>" );
  $('#line5').html("<img src='/images/" + image[numbers5[0]] + "'/> <img src='/images/" + image[numbers5[1]] + "' /> <img src='/images/" + image[numbers5[2]] + "' /> <img src='/images/" + image[numbers5[3]] + "' /> <img src='/images/" + image[numbers5[4]] + "'/>" );
  $('#line6').html("<img src='/images/" + image[numbers6[0]] + "'/> <img src='/images/" + image[numbers6[1]] + "' /> <img src='/images/" + image[numbers6[2]] + "' /> <img src='/images/" + image[numbers6[3]] + "' /> <img src='/images/" + image[numbers6[4]] + "' />" );
  } if (fontType == true && singleLetter == false) {
  $("#line1").html(image[size[0]] + " " + image[size[1]] + " "+ image[size[2]]+ " "+ image[size[3]]+ " "+ image[size[4]]);
  $("#line2").html(image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] + " "+ image[numbers2[4]] );
  $("#line3").html(image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
  $("#line4").html(image[numbers4[0]] + " " + image[numbers4[1]] + " "+ image[numbers4[2]] + " "+ image[numbers4[3]] + " "+ image[numbers4[4]] );
  $("#line5").html(image[numbers5[0]] + " " + image[numbers5[1]] + " "+ image[numbers5[2]] + " "+ image[numbers5[3]] + " "+ image[numbers5[4]] );
  $("#line6").html(image[numbers6[0]] + " " + image[numbers6[1]] + " "+ image[numbers6[2]] + " "+ image[numbers6[3]] + " "+ image[numbers6[4]] );
  } if(fontType == false && singleLetter == true){
  $('#line1').html("<img src='/images/" + image[size[1]] + "'/> ");
  $('#line2').html("<img src='/images/" + image[size[2]] + "'/> ");
  $('#line3').html("<img src='/images/" + image[size[3]] + "'/> ");
  $('#line4').html("<img src='/images/" + image[size[4]] + "'/> ");
  $('#line5').html("<img src='/images/" + image[size[0]] + "'/> ");
  $('#line6').html("<img src='/images/" + image[size[2]] + "'/> ");
  } if (fontType == true && singleLetter == true){
  $("#line1").html(image[size[1]]);
  $("#line2").html(image[size[2]]);
  $("#line3").html(image[size[3]]);
  $("#line4").html(image[size[4]]);
  $("#line5").html(image[size[0]]);
  $("#line6").html(image[size[2]]);

  }
    $("*.lineButtonActive").removeClass("lineButtonActive");
     $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
  }else if (data.size == "mode1"){
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#singleLetter").addClass("modeButtonActive");
    fontType = true;
    image = letters
  }else if (data.size == "mode2"){
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#number").addClass("modeButtonActive");
    fontType = true;
    image = numbers
  }else if (data.size == "mode3"){
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#tumblingE").addClass("modeButtonActive");
    fontType = true;
    image = ees;
  }else if (data.size == "mode4"){
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#picture").addClass("modeButtonActive");
    fontType = true;
    image = pictures;
  }else if (data.size == "duochrome"){
    $("#duochrome").toggleClass("duochrome");
  }else if (data.size == "mute"){
    $("#mute").toggleClass("duochrome");
  }

});

function clear(){
  $("#line1").html("");
  $("#line2").html("");
  $("#line3").html("");
  $("#line4").html("");
  $("#line5").html("");
  $("#line6").html("");
}

function initialTrigger(){
  $("#singleLetter").trigger("click");
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
