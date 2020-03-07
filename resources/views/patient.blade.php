<html>

<head>
<script src='/js/persist-min.js'></script>
  <style>
  html {
    height: 100%;

  }

    .mirror{
         transform: scaleX(-1);
    }

  body {
    margin: auto;
    height: 100%;
    width: 100%;



  }

  img {
     margin-bottom: 0 !important;
     padding-top: 20px !important;
   }

  .inverted {
    background-color: black;
    filter: invert(100%);

  }


  .duochrome {
    background-color: red;
  }

  .background {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background-color: rgb(0, 210, 5);
    z-index: -1;

  }

  #testDisplay {
    position: absolute;
    width: 100%;
    height: 90%;
    display: table;
    align-content: center;

    top: 3%;
    bottom: 0;
    left: 0;
    right:0;

  }
  #content {

    height: 30px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;

  }



  .tumble400 img {

    height: 2000%;

  }

  .tumble300 img {

    height: 1500%;

  }

  .tumble200 img {

    height: 1000%;

  }

  .tumble100 img {

    height: 500%;
  }

  .tumble80 img {

    height: 400%;

  }

  .tumble70 img {

    height: 350%;

  }

  .tumble60 img {
    height: 300%;

  }

  .tumble50 img {
    height: 250%;

  }

  .tumble40 img {
    height: 200%;

  }

  .tumble30 img {
    height: 150%;
  padding: .15em .15em;
  }

  .tumble25 img {
    height: 125%;
  padding: .125em .125em;
  }

  .tumble20 img {

    height: 100%;
    padding: .1em .1em;
  }

  .tumble15 img {

    height: 75%;
    padding: .1em .1em;
  }

  .tumble10 img {

    height: 50%;
    padding: .1em .1em;
  }

/* ------------------------------------------------------------------------------------------------ */

  .tumble400 {

    font-size: 2000%;
    margin-top: .3em;

  }

  .tumble300 {

    font-size: 1500%;
    margin-top: .3em;

  }

  .tumble200 {

    font-size: 1000%;
    letter-spacing: .3em;
        margin-top: .3em;

  }

  .tumble100 {
    text-align: center;
    padding: 20px 0;

    font-size: 500%;
    letter-spacing: .3em;
        margin-top: .3em;

  }

  .tumble80 {
    padding: 20px 0;
        margin-top: .3em;
    font-size: 400%;
    letter-spacing: .35em;

  }

  .tumble70 {
    padding: 20px 0;
        margin-top: .3em;
    font-size: 350%;
    letter-spacing: .3em;
  }

  .tumble60 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 300%;
    letter-spacing: .3em;


  }

  .tumble50 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 250%;
    letter-spacing: .25em;


  }

  .tumble40 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 200%;
    letter-spacing: .2em;
;
  }

  .tumble30 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 150%;
    letter-spacing: .15em;

  }

  .tumble25 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 125%;
    letter-spacing: .125em;


  }

  .tumble20 {
    padding: 20px 20px;
    margin-top: .3em;
    font-size: 100%;
    letter-spacing: .1em;

  }
  .tumble15 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 75%;
    letter-spacing: .1em;

  }
  .tumble10 {
    padding: 20px 20px;
        margin-top: .3em;
    font-size: 50%;
    letter-spacing: .1em;

  }


  #cover{
  position:fixed;
  top:0;
  left:0;
  background:rgba(0,0,0,1);
  z-index:5;
  width:100%;
  height:100%;
  display:none;
}

    .noFlow{
        position:relative;
    }

    .fixed-bottom{
      position:fixed;
      bottom: 0;
      left: 0;
      font-family: "Arial Black", Gadget, sans-serif

    }

    #instructions{
      height: 100%;
      width: 100%;
      position: fixed;
      display: none;
      top: 0;
      left: 0;
      background:rgba(252,252,252,1);
      z-index: 10;
      line-height: 20px;
        overflow:scroll;
    }

    @font-face{
font-family: 'Sloan';
src: url('/font/Sloan.ttf') format('truetype');
}


.text{
font-family: 'Sloan';

}

#video{
  display: none;
  width: 100%;
  height:100%;
  position: relative;
}
#video video{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 100%;
  max-height: 100%;
  width: 100%;
}

#color{
  display: none;
  width: 100%;
  height:100%;
  position: relative;
}

#color img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 100%;
  max-height: 100%;
  height: 100%;
}

.lineSolo{
  visibility: hidden;
}

</style>

</head>


<body>


<div id="background"></div>


<div id="testDisplay">

  <div id="content" class="text">

    <div id="video"></div>
    <div id="color"></div>
    <div id="patient1" class="noFlow" data-size="solo1" data-keepClass="soloLine"></div>
    <div id="patient2" class="noFlow" data-size="solo2" data-keepClass="soloLine"></div>
    <div id="patient3" class="noFlow" data-size="solo3" data-keepClass="soloLine"></div>
    <div id="patient4" class="noFlow" data-size="solo4" data-keepClass="soloLine"></div>
    <div id="patient5" class="noFlow" data-size="solo5" data-keepClass="soloLine"></div>
    <div id="patient6" class="noFlow" data-size="solo6" data-keepClass="soloLine"></div>

  </div>



</div>
<div id="cover"></div>

<div id="instructions">

<ul style="float:left;">
  These are the keyboard shortcuts to interact with the chart without a connected controlling device.

    <h3>Your network IP is: <span id=list>-</span></h3>

      <li>
        1 = Set patient viewing images to letters
      </li>
      <li>
        2 = Set patient viewing images to numbers
      </li>
      <li>
        3 = Set patient viewing images to tumbling E's
      </li>
      <li>
        4 = Set patient viewing images to pictures
      </li>
      <li>
        5 = Toggle Duochrome filter on and off
      </li>
      <li>
        6 = Toggle screen blackout on and off
      </li>
      <li>
        7 = Activate "single letter" mode
      </li>
      <li>
        8 = Activate color plate testing
      </li>
      <li>
        9 = Activate retinoscopy video
      </li>
      <li>
        Q = 20/400 --OR-- color plate '12'
      </li>
      <li>
        W = 20/300 --OR-- color plate '8'
      </li>
      <li>
        E = 20/200 --OR-- color plate '29'
      </li>
      <li>
        R = 20/100 --OR-- color plate '5'
      </li>
      <li>
        T = 20/80 --OR-- color plate '3'
      </li>
      <li>
        Y = 20/70 --OR-- color plate '15'
      </li>
      <li>
        U = 20/60 --OR-- color plate '74'
      </li>
      <li>
        I = 20/50 --OR-- color plate '6'
      </li>
      <li>
        O = 20/40 --OR-- color plate '45'
      </li>
      <li>
        P = 20/30 --OR-- color plate '5'
      </li>
      <li>
        A = 20/25 --OR-- color plate '7'
      </li>
      <li>
        S = 20/20 --OR-- color plate '16'
      </li>
      <li>
        Z = 20/15
      </li>
      <li>
        X = 20/10
      </li>
      <li>
        D = 20/400 and 20/200 group --OR-- color plate '73'
      </li>
      <li>
        F = 20/100, 20/80, and 20/70 group --OR-- color plate '26'
      </li>
      <li>
        G = 20/60, 20/50, 20/40 group --OR-- color plate '42'
      </li>
      <li>
        H = 20/30, 20/25, 20/20 group
      </li>
      <li>
        J = 20/60 through 20/20 group
      </li>
      <li>
        Arrow Up = Calibration button to set letters to larger size
      </li>
      <li>
        Arrow Down = Calibration buttons to set letters to smaller size
      </li>
      <li>
        M = Calibration button to make letters a mirror image
      </li>
      <li>
        * = Reset cailbration of chart and delete all user-saved settings
      </li>
      <li>
        C = Clear patient screen to erase filters and set back to full rows of letters (deactivates mute, duochrome, single letter mode)
      </li>
</ul>

<ul style="float:left;">
Here we have the sizes of the 20/20 lines that you need to configure for each exam room
      <li>
        6' = 2.6mm
      </li>
      <li>
        6'6" = 2.8mm
      </li>
      <li>
        7' = 3.1mm
      </li>
      <li>
        7'6" = 3.3mm
      </li>
      <li>
        8' = 3.5mm
      </li>
      <li>
        8'6" = 3.7mm
      </li>
      <li>
        9' = 3.9mm
      </li>
      <li>
        9'6" = 4.2mm
      </li>
      <li>
        10' = 4.4mm
      </li>
      <li>
        10'6" = 4.6mm
      </li>
      <li>
        11' = 4.8mm
      </li>
      <li>
        11'6" = 5.0mm
      </li>
      <li>
        12' = 5.3mm
      </li>
      <li>
        12'6" = 5.5mm
      </li>
      <li>
        13' = 5.7mm
      </li>
      <li>
        13'6" = 5.9mm
      </li>
      <li>
        14' = 6.2mm
      </li>
      <li>
        14'6" = 6.4mm
      </li>
      <li>
        15' = 6.6mm
      </li>
      <li>
        15'6" = 6.9mm
      </li>

</ul>
<ul style="float:left;">
<br />
      <li>
        16' = 7.1mm
      </li>
      <li>
        16'6" = 7.3mm
      </li>
      <li>
        17' = 7.5mm
      </li>
      <li>
        17'6" = 7.8mm
      </li>
      <li>
        18' = 8mm
      </li>
      <li>
        18'6" = 8.2mm
      </li>
      <li>
        19' = 8.4mm
      </li>
      <li>
        19'6" = 8.6mm
      </li>
      <li>
        20' = 8.9mm
      </li>
      <li>
        20'6" = 9.1mm
      </li>
      <li>
        21 = 9.3mm
      </li>
      <li>
        21'6" = 9.5mm
      </li>
      <li>
        22 = 9.8mm
      </li>
      <li>
        22'6" = 10mm
      </li>
      <li>
        23' = 10.2mm
      </li>
      <li>
        23'6" = 10.4mm
      </li>
      <li>
        24' = 10.6mm
      </li>
      <li>
        24'6" = 10.9mm
      </li>
      <li>
        25' = 11.1mm
      </li>

</ul>
</div>

<div class="fixed-bottom">
  <p>
    <h2></h2>
  </p>
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/socket.io.js"></script>
<script src="/js/popper.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>

<script>



function clear(){
  $("#patient1").html("").removeClass();
  $("#patient2").html("").removeClass();
  $("#patient3").html("").removeClass();
  $("#patient4").html("").removeClass();
  $("#patient5").html("").removeClass();
  $("#patient6").html("").removeClass();
  $("#video").html("");
  $("#video").css('display', 'none');
  $("#color").html('');
  $('#color').css('display', 'none');
  $("h2").html('');

}


var currentZoom = 20;
var letters = ["C", "D", "H", "K", "N", "O", "R", "S", "V", "Z"];
var numbersImg = ["1", "2", "3", "4", "5", "6", "7", "8", "9" , "5"];
var ees = ["d","j","i","e", "d","j","i","e","i","j"];
var pictures = ["k", "h", "f", "g", "b", "c", "k", "h", "f", "g", "b", "c"];
var image = letters;
var singleLetter = false;
var fontType = true;
var colorMode = false;
Echo.channel('default').listen('EventWasTriggered', (data) =>{

  if(data.size.includes('solo')){
    var divs = $('[data-keepClass]');

    $(divs).each(function(e){
      if($(this).data('size') != data.size){
        $(this).addClass('lineSolo')
      }else{
        $(this).removeClass('lineSolo')
      }
    })
  }


  var size = data.size;
  var numbers = data.numbers;
  var numbers2 = data.numbers2;
  var numbers3 = data.numbers3;
  var numbers4 = data.numbers4;
  var numbers5 = data.numbers5;
  var numbers6 = data.numbers6;





   firstLine = document.getElementById("patient1");
   secondLine = document.getElementById("patient2");
   thirdLine = document.getElementById("patient3");
   fourthLine = document.getElementById("patient4");
   fifthLine = document.getElementById("patient5");
   sixthLine = document.getElementById("patient6");

   if (size == "singleFilter"){
     singleLetter = !singleLetter;
   }
   if (size == "refresh"){
     location.reload();
   }

   if(size == 'retinoscopy'){
     clear();
     $("h2").html('');
     $('#video').css('display', 'block');
     $("#video").html(`<video width="1040" height="880" autoplay muted>
                         <source src="{{asset('/images/rolypoly.webm')}}" type="video/webm">
                       </video>`);
   }

   if(data.size == "colorPlates"){
     colorMode = !colorMode;

       clear();

   }


   if(data.size == 'cp12'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate1.jpg')}}" />`);
     $("h2").html("12");

   }
   if(data.size == 'cp8'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate2.jpg')}}" />`);
     $("h2").html("8");
   }
   if(data.size == 'cp29'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate3.jpg')}}" />`);
     $("h2").html("29");
   }
   if(data.size == 'cp51'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate4.jpg')}}" />`);
     $("h2").html("5");
   }
   if(data.size == 'cp3'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate5.jpg')}}" />`);
     $("h2").html("3");
   }
   if(data.size == 'cp15'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate6.jpg')}}" />`);
     $("h2").html("15");
   }
   if(data.size == 'cp74'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate7.jpg')}}" />`);
     $("h2").html("74");
   }
   if(data.size == 'cp6'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate8.jpg')}}" />`);
     $("h2").html("6");
   }
   if(data.size == 'cp45'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate9.jpg')}}" />`);
     $("h2").html("45");
   }
   if(data.size == 'cp5'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate10.jpg')}}" />`);
     $("h2").html("5");
   }
   if(data.size == 'cp7'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate11.jpg')}}" />`);
     $("h2").html("7");
   }
   if(data.size == 'cp16'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate12.jpg')}}" />`);
     $("h2").html("16");
   }
   if(data.size == 'cp73'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate13.jpg')}}" />`);
     $("h2").html("73");
   }
   if(data.size == 'cp26'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate14.jpg')}}" />`);
     $("h2").html("26");
   }
   if(data.size == 'cp42'){
     clear();
     $("#color").show();
     $("#color").html(`<img src="{{asset('/images/Plate15.jpg')}}" />`);
     $("h2").html("42");
   }




   if(size == 10){
     clear();
     firstLine.className = ("tumble10");
     if (singleLetter == true && fontType == false){
     $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
   } if (singleLetter == true && fontType == true){
     $("#patient1").html(image[numbers[1]]);
   } if(singleLetter == false && fontType == false){
    $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
    $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }

    $("h2").html("20/"+size);
   }




   if(size == 15){
     clear();
     firstLine.className = ("tumble15");
     if (singleLetter == true && fontType == false){
     $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
   } if (singleLetter == true && fontType == true){
     $("#patient1").html(image[numbers[1]]);
   } if(singleLetter == false && fontType == false){
    $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
    $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }

    $("h2").html("20/"+size);
   }



  if(size == 20){
    clear();
    firstLine.className = ("tumble20");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
 } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
 }

   $("h2").html("20/"+size);
  }
  if(size == 25){
    clear();
    firstLine.className = ("tumble25");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
 } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
 }
  $("h2").html("20/"+size);

  }
  if(size == 30){
    clear();
    firstLine.className = ("tumble30");
    if (singleLetter == true && fontType == false){
    $('#patient1').html(" <img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }
   $("h2").html("20/"+size);

  }
  if(size == 40){
    clear();
    firstLine.className = ("tumble40");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }
  $("h2").html("20/"+size);

  }
  if(size == 50){
    clear();
    firstLine.className = ("tumble50");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }
   $("h2").html("20/"+size);

  }
  if(size == 60){
    clear();
    firstLine.className = ("tumble60");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html("&nbsp" + image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }
  $("h2").html("20/"+size);

  }
  if(size == 70){
    clear();
    firstLine.className = ("tumble70");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html("&nbsp" + image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]] + " " + image[numbers[0]]);
  }
   $("h2").html("20/"+size);

  }
  if(size == 80){
    clear();
    firstLine.className = ("tumble80");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]] + " " +  image[numbers[4]]);
  }
  $("h2").html("20/"+size);

  }
  if(size == 100){
    clear();
    firstLine.className = ("tumble100");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' />" );
  } if (singleLetter == false && fontType == true){
   $("#patient1").html("&nbsp" + image[numbers[1]] +" "+  image[numbers[2]] + " " + image[numbers[3]]);
  }
   $("h2").html("20/"+size);

  }
  if(size == 200){
    clear();
    firstLine.className = ("tumble200");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "'  />" );
 } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] +" "+  image[numbers[2]]);
 }

  $("h2").html("20/"+size);

  }
  if(size == 300){
    clear();
    firstLine.className = ("tumble300");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "' />" );
 } if (singleLetter == false && fontType == true){
   $("#patient1").html("&nbsp" + image[numbers[1]] );
 }
   $("h2").html("20/"+size);

  }
  if(size == 400){
    clear();
    firstLine.className = ("tumble400");
    if (singleLetter == true && fontType == false){
    $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
  } if (singleLetter == true && fontType == true){
    $("#patient1").html(image[numbers[1]]);
  } if(singleLetter == false && fontType == false){
   $("#patient1").html("<img src='/images/" + image[numbers[1]] + "' />" );
 } if (singleLetter == false && fontType == true){
   $("#patient1").html( "&nbsp" +image[numbers[1]] );
 }
  $("h2").html("20/"+size);
  }

 if (data.size == 400200 ){
   clear();
   firstLine.className = ("tumble400");
   secondLine.className = ("tumble200");
   if (singleLetter == true && fontType == false){
   $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
 } if (singleLetter == true && fontType == true){
   $("#patient1").html(image[numbers[1]]);
 } if(singleLetter == false && fontType == false){
  $("#patient1").html("<img src='/images/" + image[numbers[1]] + "' />" );
     $("#patient2").html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "'  />" );
} if (singleLetter == false && fontType == true){
  $("#patient1").html("&nbsp;"+ image[numbers[1]] );
     $("#patient2").html( "&nbsp"+image[numbers2[0]] +" "+  image[numbers2[1]]);
}
    $("h2").html("20/400 <br /> 20/200");

  }
   if (data.size == 1008070 ){
     clear();
     firstLine.className = ("tumble100");
     secondLine.className = ("tumble80");
     thirdLine.className = ("tumble70");
     if (singleLetter == true && fontType == false){
     $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
     $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> " );
     $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> " );
   } if (singleLetter == true && fontType == true){
     $("#patient1").html(image[numbers[1]]);
     $("#patient2").html(image[numbers[2]]);
     $("#patient3").html(image[numbers[3]]);
   } if(singleLetter == false && fontType == false){
    $("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "'/>" );
       $("#patient2").html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' />" );
       $("#patient3").html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  } if (singleLetter == false && fontType == true){
    $("#patient1").html( "&nbsp"+image[numbers[1]] + " " + image[numbers[2]] + " "+ image[numbers[3]]);
    $("#patient2").html( "&nbsp"+image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] );
    $("#patient3").html( "&nbsp"+image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
  }
    $("h2").html("20/100 <br /> 20/80 <br /> 20/70");
  }
   if (data.size == 605040 ){

     clear();

     firstLine.className = ("tumble60");
     secondLine.className = ("tumble50");
     thirdLine.className = ("tumble40");
     if(fontType == false && singleLetter == false){
   $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "'/> <img src='/images/" + image[numbers[3]] + "'/> <img src='/images/" + image[numbers[4]] + "'/>" );
   $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "'/>" );
   $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   } if (fontType == true && singleLetter == false) {
   $("#patient1").html( "&nbsp"+image[numbers[0]] + " " + image[numbers[1]] + " "+ image[numbers[2]]+ " "+ image[numbers[3]]+ " "+ image[numbers[4]]);
   $("#patient2").html( "&nbsp"+image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] + " "+ image[numbers2[4]] );
   $("#patient3").html( "&nbsp"+image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
   } if(fontType == false && singleLetter == true){
   $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> ");
   $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> ");
   $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> ");
   } if (fontType == true && singleLetter == true){
   $("#patient1").html(image[numbers[1]]);
   $("#patient2").html(image[numbers[2]]);
   $("#patient3").html(image[numbers[3]]);

   }
    $("h2").html("20/60 <br /> 20/50 <br /> 20/40");

  }
   if (data.size == 302520 ){
     clear();

     firstLine.className = ("tumble30");
     secondLine.className = ("tumble25");
     thirdLine.className = ("tumble20");
     if(fontType == false && singleLetter == false){
   $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "'/> <img src='/images/" + image[numbers[3]] + "'/> <img src='/images/" + image[numbers[4]] + "'/>" );
   $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "'/>" );
   $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   } if (fontType == true && singleLetter == false) {
   $("#patient1").html( "&nbsp"+image[numbers[0]] + " " + image[numbers[1]] + " "+ image[numbers[2]]+ " "+ image[numbers[3]]+ " "+ image[numbers[4]]);
   $("#patient2").html( "&nbsp"+image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] + " "+ image[numbers2[4]] );
   $("#patient3").html( "&nbsp"+image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
   } if(fontType == false && singleLetter == true){
   $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> ");
   $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> ");
   $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> ");
   } if (fontType == true && singleLetter == true){
   $("#patient1").html(image[numbers[1]]);
   $("#patient2").html(image[numbers[2]]);
   $("#patient3").html(image[numbers[3]]);

   }
    $("h2").html("20/30 <br /> 20/25 <br /> 20/20");

  }
   if (data.size == 6020 ){
     clear();

     firstLine.className = ("tumble60");
     secondLine.className = ("tumble50");
     thirdLine.className = ("tumble40");
     fourthLine.className = ("tumble30");
     fifthLine.className = ("tumble25");
     sixthLine.className = ("tumble20");
     if(fontType == false && singleLetter == false){
   $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "'/> <img src='/images/" + image[numbers[3]] + "'/> <img src='/images/" + image[numbers[4]] + "'/>" );
   $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "'/>" );
   $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
   $('#patient4').html("<img src='/images/" + image[numbers4[0]] + "'/> <img src='/images/" + image[numbers4[1]] + "' /> <img src='/images/" + image[numbers4[2]] + "'/> <img src='/images/" + image[numbers4[3]] + "'/> <img src='/images/" + image[numbers4[4]] + "'/>" );
   $('#patient5').html("<img src='/images/" + image[numbers5[0]] + "'/> <img src='/images/" + image[numbers5[1]] + "' /> <img src='/images/" + image[numbers5[2]] + "' /> <img src='/images/" + image[numbers5[3]] + "' /> <img src='/images/" + image[numbers5[4]] + "'/>" );
   $('#patient6').html("<img src='/images/" + image[numbers6[0]] + "'/> <img src='/images/" + image[numbers6[1]] + "' /> <img src='/images/" + image[numbers6[2]] + "' /> <img src='/images/" + image[numbers6[3]] + "' /> <img src='/images/" + image[numbers6[4]] + "' />" );
   } if (fontType == true && singleLetter == false) {
   $("#patient1").html("&nbsp"+image[numbers[0]] + " " + image[numbers[1]] + " "+ image[numbers[2]]+ " "+ image[numbers[3]]+ " "+ image[numbers[4]]);
   $("#patient2").html("&nbsp"+image[numbers2[0]] + " " + image[numbers2[1]] + " "+ image[numbers2[2]] + " "+ image[numbers2[3]] + " "+ image[numbers2[4]] );
   $("#patient3").html("&nbsp"+image[numbers3[0]] + " " + image[numbers3[1]] + " "+ image[numbers3[2]] + " "+ image[numbers3[3]] + " "+ image[numbers3[4]] );
   $("#patient4").html("&nbsp"+image[numbers4[0]] + " " + image[numbers4[1]] + " "+ image[numbers4[2]] + " "+ image[numbers4[3]] + " "+ image[numbers4[4]] );
   $("#patient5").html("&nbsp"+image[numbers5[0]] + " " + image[numbers5[1]] + " "+ image[numbers5[2]] + " "+ image[numbers5[3]] + " "+ image[numbers5[4]] );
   $("#patient6").html("&nbsp"+image[numbers6[0]] + " " + image[numbers6[1]] + " "+ image[numbers6[2]] + " "+ image[numbers6[3]] + " "+ image[numbers6[4]] );
   } if(fontType == false && singleLetter == true){
   $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> ");
   $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> ");
   $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> ");
   $('#patient4').html("<img src='/images/" + image[numbers[4]] + "'/> ");
   $('#patient5').html("<img src='/images/" + image[numbers[0]] + "'/> ");
   $('#patient6').html("<img src='/images/" + image[numbers[2]] + "'/> ");
   } if (fontType == true && singleLetter == true){
   $("#patient1").html(image[numbers[1]]);
   $("#patient2").html(image[numbers[2]]);
   $("#patient3").html(image[numbers[3]]);
   $("#patient4").html(image[numbers[4]]);
   $("#patient5").html(image[numbers[0]]);
   $("#patient6").html(image[numbers[2]]);

   }
    $("h2").html("20/60 <br /> 20/50 <br /> 20/40 <br />20/30 <br /> 20/25 <br /> 20/20");

  }

   if (data.size == "mode1"){
     fontType = true;
    image = letters;
  }if (data.size == "mode2"){
    fontType = true;
    image = numbersImg;
  }if (data.size == "mode3"){
    fontType = true;
    image = ees;
  } if (data.size == "mode4"){
    fontType = true;
    image = pictures;
  }


  if(size == "grow"){
    grow();
  }
  if(size == "shrink"){
    shrink();
  }
  if(size == "reset"){
    reset();
  }
  if(size == "mirror"){
    mirror();
  }
  if(size == "duochrome"){
    duochrome();
  }
  if(size == "mute"){
    mute();
  }



  function duochrome() {
      $("html").toggleClass("duochrome");
      $("#background").toggleClass("background");

    }




    function mute(){
    if ($("#cover").css("display")=="none"){
      $("#cover").css("display", "block");
    } else {
       $("#cover").css("display", "none");
    }
  }




  function grow(){
      currentZoom += 1;
      $("#content").css('font-size', currentZoom + 'px');
      $.ajax({
        url: "/insert",
        data:{
          size: currentZoom
        }

      });

      // $("#content").css('height', currentZoom + 'px');
      // document.cookie = "storeSize="+currentZoom+"; expires=Thu, 18 Dec 2040 12:00:00 UTC;"
      // localStorage.setItem("storeSize", currentZoom);
      // console.log("grow triggered");
  }


  function shrink(){
     currentZoom -= 1;
     $("#content").css('font-size', currentZoom + 'px');
     $.ajax({
       url: "/insert",
       data:{
         size: currentZoom
       }

     });
  }

  function reset() {
document.cookie = "storeSize=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
document.cookie = "mirror=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";

    window.location.href = window.location.href;
  }

   function mirror(){
     var mirror;
     $.ajax({
       url: "/mirrorGet",
       success:function(result){
         mirror = result.mirror;
         if(mirror == 1){
           $("#testDisplay").removeClass("mirror");
           $.ajax({
             url: "/mirror",
             data:{
               mirror: 0
             }
           });
         } else if (mirror == 0) {
           $("#testDisplay").addClass("mirror");
           $.ajax({
             url: "/mirror",
             data:{
               mirror: 1
             }
           });
         }
       }
     });

   }



});
//replace up here

  $(document).ready(function(){



    var numbers;

    if ({{$calibration->size}} == null) {
      currentZoom = 40;
    } else {

    $("#content").css('font-size', {{$calibration->size}} + "px");

    }

    var invert2 = {{$calibration->mirror}};
    if (invert2 == 1){
        $("#testDisplay").addClass("mirror");
    }



    $('html').on('keydown', function(event){
      if(event.which == 13){
        if($("#instructions").css("display") == "none"){

          $("#instructions").css("display", "block");
        }else {
          $("#instructions").css("display", "none");
        }
      }
      if (event.which == 81 ){
        if(colorMode == false){
        numbers = 400;
      } else{
        numbers = 'cp12';
      }
      };
      if (event.which == 87 ){
        if(colorMode == false){
      numbers = 300;
    } else {
      numbers = 'cp8';
    }
      };
      if (event.which == 69 ){
        if(colorMode == false){
      numbers = 200;
    } else {
      numbers = 'cp29';
    }
      };
      if (event.which == 82 ){
        if(colorMode == false){
      numbers = 100;
    } else {
      numbers = 'cp51';
    }
      };
      if (event.which == 84 ){
        if(colorMode == false){
      numbers = 80;
    } else {
      numbers = 'cp3';
    }
      };
      if (event.which == 89 ){
        if(colorMode == false){
      numbers = 70;
    } else {
      numbers = 'cp15';
    }
      };
      if (event.which == 85 ){
        if(colorMode == false){
          numbers = 60;
        } else {
          numbers = 'cp74';
        }
      };
      if (event.which == 73 ){
        if(colorMode == false){
          numbers = 50;
        } else {
          numbers = 'cp6';
        }
      };
      if (event.which == 79 ){
        if(colorMode == false){
      numbers = 40;
    } else {
      numbers = 'cp45';
    }
      };
      if (event.which == 80 ){
        if(colorMode == false){
      numbers = 30;
    } else {
      numbers = 'cp5';
    }
      };
      if (event.which == 65 ){
        if(colorMode == false){
      numbers = 25;
    } else {
      numbers = 'cp7';
    }
      };
      if (event.which == 83 ){
        if(colorMode == false){
      numbers = 20;
    } else {
      numbers = 'cp16';
    }
      };
      if (event.which == 90 ){
        if(colorMode == false)
      numbers = 15;
      };
      if (event.which == 88 ){
        if(colorMode == false)
      numbers = 10;
      };
      if (event.which == 68 ){
        if(colorMode == false){
          numbers = 400200;
        } else {
          numbers = 'cp73';
        }
      };
      if (event.which == 70 ){
        if(colorMode == false){
      numbers = 1008070;
    } else {
      numbers = 'cp26';
    }
      };
      if (event.which == 71 ){
        if(colorMode == false){
          numbers = 605040;
        } else {
          numbers = 'cp42';
        }
      };
      if (event.which == 72 ){
        if(colorMode == false)
      numbers = 302520;
      };
      if (event.which == 74 ){
        if(colorMode == false)
      numbers = 6020;
      };
      if (event.which == 49 ){
      numbers = "mode1";
      };
      if (event.which == 50 ){
      numbers = "mode2";
      };
      if (event.which == 51 ){
      numbers = "mode3";
      };
      if (event.which == 52 ){
      numbers = "mode4";
      };
      if (event.which == 53 ){
      numbers = "duochrome";
      };
      if (event.which == 54 ){
      numbers = "mute";
      };
      if (event.which == 40 ){
      numbers = "shrink";
      };
      if (event.which == 38 ){
      numbers = "grow";
      };
      if (event.which == 77 ){
      numbers = "mirror";
      };
      if (event.which == 106 ){
      numbers = "reset";
      };
      if (event.which == 55 ){
      numbers = "singleFilter";
      };
      if (event.which == 67 ){
      numbers = "refresh";
      };
      if (event.which == 56 ){
      numbers = "colorPlates";
      };
      if (event.which == 57 ){
      numbers = "retinoscopy";
      };


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





// NOTE: window.RTCPeerConnection is "not a constructor" in FF22/23
var RTCPeerConnection = /*window.RTCPeerConnection ||*/ window.webkitRTCPeerConnection || window.mozRTCPeerConnection;

if (RTCPeerConnection) (function () {
    var rtc = new RTCPeerConnection({iceServers:[]});
    if (1 || window.mozRTCPeerConnection) {      // FF [and now Chrome!] needs a channel/stream to proceed
        rtc.createDataChannel('', {reliable:false});
    };

    rtc.onicecandidate = function (evt) {
        // convert the candidate to SDP so we can run it through our general parser
        // see https://twitter.com/lancestout/status/525796175425720320 for details
        if (evt.candidate) grepSDP("a="+evt.candidate.candidate);
    };
    rtc.createOffer(function (offerDesc) {
        grepSDP(offerDesc.sdp);
        rtc.setLocalDescription(offerDesc);
    }, function (e) { console.warn("offer failed", e); });


    var addrs = Object.create(null);
    addrs["0.0.0.0"] = false;
    function updateDisplay(newAddr) {
        if (newAddr in addrs) return;
        else addrs[newAddr] = true;
        var displayAddrs = Object.keys(addrs).filter(function (k) { return addrs[k]; });
        console.log(displayAddrs);
        document.getElementById('list').textContent = displayAddrs[0];
    }

    function grepSDP(sdp) {
        var hosts = [];
        sdp.split('\r\n').forEach(function (line) { // c.f. http://tools.ietf.org/html/rfc4566#page-39
            if (~line.indexOf("a=candidate")) {     // http://tools.ietf.org/html/rfc4566#section-5.13
                var parts = line.split(' '),        // http://tools.ietf.org/html/rfc5245#section-15.1
                    addr = parts[4],
                    type = parts[7];
                if (type === 'host') updateDisplay(addr);
            } else if (~line.indexOf("c=")) {       // http://tools.ietf.org/html/rfc4566#section-5.7
                var parts = line.split(' '),
                    addr = parts[2];
                updateDisplay(addr);
            }
        });
    }
})(); else {
    // document.getElementById('list').innerHTML = "<code>ifconfig | grep inet | grep -v inet6 | cut -d\" \" -f2 | tail -n1</code>";
    // document.getElementById('list').nextSibling.textContent = "In Chrome and Firefox your IP should display automatically, by the power of WebRTCskull.";
}





});


</script>
</body>
</html>
