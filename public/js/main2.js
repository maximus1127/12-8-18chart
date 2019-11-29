var letters = ["C", "D", "H", "K", "N", "O", "R", "S", "V", "Z"];
var numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9" , "5"];
var ees = ["d","j","i","e", "d","j","i","e","i","j"];
var pictures = ["k", "h", "f", "g", "b", "c", "k", "h", "f", "g", "b", "c"];
var image = letters;
var fontType = true;
var singleLetter = false;
var colorMode = false;



Echo.channel('default').listen('EventWasTriggered', (data) =>{




// var socket = io('http://' + location.hostname + ':8000');
// socket.on('private-default:App\\Events\\EventWasTriggered', function(data){

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
$(".lineButtonActive").trigger('click');
  }

  if(data.size == "retinoscopy"){
    clear();
      $("#retinoscopy").removeClass("retinoscopy");
      $("#retinoscopy").addClass("retinoscopyActive");
      $("*.lineButtonActive").removeClass('lineButtonActive');
      $("#line1").html("");
    }
    if(data.size == "colorPlates"){
      clear();
      if(colorMode == false){
        $("#retinoscopy").removeClass("retinoscopyActive");
        $("*.lineButtonActive").removeClass('lineButtonActive');
        $('#sizeHolder').css('display', 'none');
        $('#colorHolder').css('display', 'block');
        $('#colorPlates').toggleClass('colorPlatesActive');
      } else {
        $('#colorPlates').toggleClass('colorPlatesActive');
        $('#sizeHolder').css('display', 'block');
        $('#colorHolder').css('display', 'none');
      }
      colorMode = !colorMode;
      }

      if(data.size == 'cp12'){
        $("#line1").html("12");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp8'){
        $("#line1").html("8");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp29'){
        $("#line1").html("29");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp51'){
        $("#line1").html("5");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp3'){
        $("#line1").html("3");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp15'){
        $("#line1").html("15");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp74'){
        $("#line1").html("74");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp6'){
        $("#line1").html("6");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp45'){
        $("#line1").html("45");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp5'){
        $("#line1").html("5");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp7'){
        $("#line1").html("7");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp16'){
        $("#line1").html("16");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp73'){
        $("#line1").html("73");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp26'){
        $("#line1").html("26");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }
      if(data.size == 'cp42'){
        $("#line1").html("42");
        $("*.lineButtonActive").removeClass("lineButtonActive");
         $('*[data-size="' + data.size + '"]').toggleClass("lineButtonActive");
      }


  if (data.size == "refresh"){
    location.reload();
  }
  if(data.size == 10 || data.size == 15 || data.size == 20 || data.size == 25 || data.size == 30 || data.size == 40 || data.size == 50 || data.size == 60 || data.size == 70){
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
    $("#line1size").html("20/400");
    $("#line2size").html("20/200");

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
    $("#line1size").html("20/100");
    $("#line2size").html("20/80");
    $("#line3size").html("20/70");
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
    $("#line1size").html("20/60");
    $("#line2size").html("20/50");
    $("#line3size").html("20/40");
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
    $("#line1size").html("20/30");
    $("#line2size").html("20/25");
    $("#line3size").html("20/20");

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

    $("#line1size").html("20/60");
    $("#line2size").html("20/50");
    $("#line3size").html("20/40");
    $("#line4size").html("20/30");
    $("#line5size").html("20/25");
    $("#line6size").html("20/20");

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
    clear()
    colorMode = false;
    $("#colorHolder").hide();
    $("#sizeHolder").show();
    $("#colorPlates").removeClass('colorPlatesActive');
    $("#colorPlates").addClass("colorPlates");
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#singleLetter").addClass("modeButtonActive");
    fontType = true;
    image = letters
  }else if (data.size == "mode2"){
    clear();
    colorMode = false;
    $("#colorHolder").hide();
    $("#sizeHolder").show();
    $("#colorPlates").removeClass('colorPlatesActive');
    $("#colorPlates").addClass("colorPlates");
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#number").addClass("modeButtonActive");
    fontType = true;
    image = numbers
  }else if (data.size == "mode3"){
    clear();
    colorMode = false;
    $("#colorHolder").hide();
    $("#sizeHolder").show();
    $("#colorPlates").removeClass('colorPlatesActive');
    $("#colorPlates").addClass("colorPlates");
    $("*.modeButtonActive").removeClass("modeButtonActive");
    $("#tumblingE").addClass("modeButtonActive");
    fontType = true;
    image = ees;
  }else if (data.size == "mode4"){
    clear();
    colorMode = false;
    $("#colorHolder").hide();
    $("#sizeHolder").show();
    $("#colorPlates").removeClass('colorPlatesActive');
    $("#colorPlates").addClass("colorPlates");
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
  $("#line2size").html("");
  $("#line3size").html("");
  $("#line1size").html("");
  $("#line4size").html("");
  $("#line5size").html("");
  $("#line6size").html("");
  $("#retinoscopy").removeClass('retinoscopyActive').addClass('retinoscopy');

}

function initialTrigger(){
  $("#singleLetter").trigger("click");
}

 $(document).ready(function(){
$("body").css('height', screen.height);
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
   if(colorMode == false){
   $( "#fourHundred" ).trigger( "click" );
 } else {
   $("#plate1").trigger('click');
 }
 };
if(event.which == 87 ){
  if(colorMode == false){
 $( "#threeHundred" ).trigger( "click" );
} else {
  $("#plate2").trigger('click');
}
};
if (event.which == 69 ){
  if(colorMode == false){
 $( "#twoHundred" ).trigger( "click" );
} else {
  $("#plate3").trigger('click');
}
};
if (event.which == 82 ){
  if(colorMode == false){
 $( "#oneHundred" ).trigger( "click" );
} else {
  $("#plate4").trigger('click');
}
};
if (event.which == 84 ){
  if(colorMode == false){
 $( "#eighty" ).trigger( "click" );
} else {
  $("#plate5").trigger('click');
}
};
if (event.which == 89 ){
  if(colorMode == false){
 $( "#seventy" ).trigger( "click" );
} else {
  $("#plate6").trigger('click');
}
};
if (event.which == 85 ){
  if(colorMode == false){
 $( "#sixty" ).trigger( "click" );
} else {
  $("#plate7").trigger('click');
}
};
if (event.which == 73 ){
  if(colorMode == false){
 $( "#fifty" ).trigger( "click" );
} else {
  $("#plate8").trigger('click');
}
};
if (event.which == 79 ){
  if(colorMode == false){
 $( "#forty" ).trigger( "click" );
} else {
  $("#plate9").trigger('click');
}
};
if (event.which == 80 ){
  if(colorMode == false){
 $( "#thirty" ).trigger( "click" );
} else {
  $("#plate10").trigger('click');
}
};
if (event.which == 65 ){
  if(colorMode == false){
     $( "#twentyFive" ).trigger( "click" );
   } else {
     $("#plate11").trigger('click');
   }
};
if (event.which == 83 ){
  if(colorMode == false){
     $( "#twenty" ).trigger( "click" );
   } else {
     $("#plate12").trigger('click');
   }
};
if (event.which == 90 ){
  if(colorMode == false)
 $( "#fifteen" ).trigger( "click" );
};
if (event.which == 88 ){
  if(colorMode == false)
 $( "#ten" ).trigger( "click" );
};
if (event.which == 68 ){
  if(colorMode == false){
 $( "#groupOne" ).trigger( "click" );
} else {
  $("#plate13").trigger('click');
}
};
if (event.which == 70 ){
  if(colorMode == false){
 $( "#groupTwo" ).trigger( "click" );
} else {
  $("#plate14").trigger('click');
}
};
if (event.which == 71 ){
  if(colorMode == false){
 $( "#groupThree" ).trigger( "click" );
} else {
  $("#plate15").trigger('click');
}
};
if (event.which == 72 ){
  if(colorMode == false)
 $( "#groupFour" ).trigger( "click" );
};
if (event.which == 74 ){
  if(colorMode == false)
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
if (event.which == 56 ){
 $( "#colorPlates" ).trigger( "click" );
};
if (event.which == 57 ){
 $( "#retinoscopy" ).trigger( "click" );
};
if (event.which == 67 ){
 $( "#refresh" ).trigger( "click" );
};
});
