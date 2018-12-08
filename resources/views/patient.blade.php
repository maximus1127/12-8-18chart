<html>

<head>

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
     padding-top: 40px !important;
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
    margin-left: 35px;
    margin-right: 35px;
      margin-bottom: 40px;
  }

  .tumble300 img {

    height: 1500%;
    margin-left: 35px;
    margin-right: 35px;;
       margin-bottom: 40px;
  }

  .tumble200 img {

    height: 1000%;
    margin-left: 35px;
    margin-right: 35px;
       margin-bottom: 40px;
  }

  .tumble100 img {

    height: 500%;
    margin-left: 35px;
    margin-right: 35px;
       margin-bottom: 40px;
  }

  .tumble80 img {

    height: 400%;
    margin-left: 35px;
    margin-right: 35px;
       margin-bottom: 40px;
  }

  .tumble70 img {

    height: 350%;
    margin-left: 35px;
    margin-right: 35px;
       margin-bottom: 40px;
  }

  .tumble60 img {
    height: 300%;
    margin-right: 35px;
    margin-left: 35px;
       margin-bottom: 40px;
  }

  .tumble50 img {
    height: 250%;
    margin-right: 35px;
    margin-left: 35px;
       margin-bottom: 40px;
  }

  .tumble40 img {
    height: 200%;
    margin-right: 35px;
    padding-left: 35px;
       margin-bottom: 40px;
  }

  .tumble30 img {
    height: 150%;
    margin-right: 35px;
    padding-left: 35px;
       margin-bottom: 40px;
  }

  .tumble25 img {
    height: 125%;
    margin-right: 35px;
    padding-left: 35px;
       margin-bottom: 40px;
  }

  .tumble20 img {
    margin-right: 35px;
    height: 100%;
    margin-left: 35px;
       margin-bottom: 40px;
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
    }




</style>

</head>


<body>


<div id="background"></div>


<div id="testDisplay">
<div id="content">


  <div id="patient1" class="noFlow">
    <img src="" id="oneone" />
    <img src="" id="onetwo" />
    <img src="" id="onethree" />
    <img src="" id="onefour" />
    <img src="" id="onefive" />
  </div>
  <div id="patient2" class="noFlow">
    <img src="" id="twoone" />
    <img src="" id="twotwo" />
    <img src="" id="twothree" />
    <img src="" id="twofour" />
    <img src="" id="twofive" /></div>
  <div id="patient3" class="noFlow">
    <img src="" id="threeone" />
    <img src="" id="threetwo" />
    <img src="" id="threethree" />
    <img src="" id="threefour" />
    <img src="" id="threefive" /></div>
  <div id="patient4" class="noFlow">
    <img src="" id="fourone" />
    <img src="" id="fourtwo" />
    <img src="" id="fourthree" />
    <img src="" id="fourfour" />
    <img src="" id="fourfive" /></div>
  <div id="patient5" class="noFlow">
    <img src="" id="fiveone" />
    <img src="" id="fivetwo" />
    <img src="" id="fivethree" />
    <img src="" id="fivefour" />
    <img src="" id="fivefive" /></div>
  <div id="patient6" class="noFlow">
    <img src="" id="sixone" />
    <img src="" id="sixtwo" />
    <img src="" id="sixthree" />
    <img src="" id="sixfour" />
    <img src="" id="sixfive" /></div>

</div>



</div>
<div id="cover"></div>

<div id="instructions">

<ul style="float:left;">
  These are the keyboard shortcuts to interact with the chart without a connected controlling device.

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
        Q = 20/400
      </li>
      <li>
        W = 20/300
      </li>
      <li>
        E = 20/200
      </li>
      <li>
        R = 20/100
      </li>
      <li>
        T = 20/80
      </li>
      <li>
        Y = 20/70
      </li>
      <li>
        U = 20/60
      </li>
      <li>
        I = 20/50
      </li>
      <li>
        O = 20/40
      </li>
      <li>
        P = 20/30
      </li>
      <li>
        A = 20/25
      </li>
      <li>
        S = 20/20
      </li>
      <li>
        D = 20/400 and 20/200 group
      </li>
      <li>
        F = 20/100, 20/80, and 20/70 group
      </li>
      <li>
        G = 20/60, 20/50, 20/40 group
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
<script>
function clear(){

  $("*img").attr('src', '');
  $("*img").css("display", "none");
  $("#patient1").css("display", "none");
  $("#patient2").css("display", "none");
  $("#patient3").css("display", "none");
  $("#patient4").css("display", "none");
  $("#patient5").css("display", "none");
  $("#patient6").css("display", "none");
}


var currentZoom;
var letters = ["C.png", "D.png", "H.png", "K.png", "N.png", "O.png", "R.png", "S.png", "V.png", "Z.png"];
var numbersImg = ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png" , "5.png"];
var ees = ["Down.png","Up.png","Left.png","Right.png", "Down.png","Up.png","Left.png","Right.png","Left.png","Right.png"];
var pictures = ["Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png", "Phone.png", "Horse.png", "Car.png", "Hand.png", "Bird.png", "Cake.png"];
var image = letters;
var singleLetter = false;
var socket = io('http://' + location.hostname + ':8000');
socket.on('private-default:App\\Events\\EventWasTriggered', function(data){

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

  if(size == 20){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble20");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
 }
   $("h2").html("20/"+size);
  }
  if(size == 25){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble25");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
 }
  $("h2").html("20/"+size);

  }
  if(size == 30){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble30");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  }
   $("h2").html("20/"+size);

  }
  if(size == 40){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble40");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  }
  $("h2").html("20/"+size);

  }
  if(size == 50){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble50");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  }
   $("h2").html("20/"+size);

  }
  if(size == 60){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble60");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  }
  $("h2").html("20/"+size);

  }
  if(size == 70){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble70");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
 }
   $("h2").html("20/"+size);

  }
  if(size == 80){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble80");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
    //  $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
 }
  $("h2").html("20/"+size);

  }
  if(size == 100){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble100");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      // $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      // $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  }
   $("h2").html("20/"+size);

  }
  if(size == 200){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble200");
    if (singleLetter == true){
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
    //  $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    } else {
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
      $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
      // $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();
      // $("#onefour").attr("src", "/images/" + image[numbers[4]]).show();
      // $("#onefive").attr("src", "/images/" + image[numbers[0]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' /> <img src='/images/" + image[numbers[0]] + "' />" );
  }
  $("h2").html("20/"+size);

  }
  if(size == 300){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble300");
    $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
   //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> " );
   $("h2").html("20/"+size);

  }
  if(size == 400){
    clear();
    $("#patient1").css("display", "block");
    firstLine.className = ("tumble400");
      $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
  //$("#patient1").html("<img src='/images/" + image[numbers[1]] + "'/> " );
  $("h2").html("20/"+size);
  }

 if (data.size == 400200 ){
   clear();
   $("#patient1").css("display", "block");
   $("#patient2").css("display", "block");
   firstLine.className = ("tumble400");
   secondLine.className = ("tumble200");
   if (singleLetter == true){
     $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
     $("#twoone").attr("src", "/images/" + image[numbers[2]]).show();
     //$('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
     //$('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> " );
   } else {
     $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
     $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
     $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
    //$('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
    //$("#patient2").html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' />");
  }
    $("h2").html("20/400 <br /> 20/200");

  }
   if (data.size == 1008070 ){
     clear();
     $("#patient1").css("display", "block");
     $("#patient2").css("display", "block");
     $("#patient3").css("display", "block");

     firstLine.className = ("tumble100");
     secondLine.className = ("tumble80");
     thirdLine.className = ("tumble70");
     if (singleLetter == true){
       $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
       $("#twoone").attr("src", "/images/" + image[numbers[2]]).show();
       $("#threeone").attr("src", "/images/" + image[numbers[3]]).show();

       // $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
       // $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> " );
       // $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> " );
     } else {
       $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
       $("#onetwo").attr("src", "/images/" + image[numbers[2]]).show();
       $("#onethree").attr("src", "/images/" + image[numbers[3]]).show();

       $("#twoone").attr("src", "/images/" + image[numbers2[0]]).show();
       $("#twotwo").attr("src", "/images/" + image[numbers2[1]]).show();
       $("#twothree").attr("src", "/images/" + image[numbers2[2]]).show();
       $("#twofour").attr("src", "/images/" + image[numbers2[3]]).show();

       $("#threeone").attr("src", "/images/" + image[numbers3[0]]).show();
       $("#threetwo").attr("src", "/images/" + image[numbers3[1]]).show();
       $("#threethree").attr("src", "/images/" + image[numbers3[2]]).show();
       $("#threefour").attr("src", "/images/" + image[numbers3[3]]).show();
       $("#threefive").attr("src", "/images/" + image[numbers3[4]]).show();

    // $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> " );
    // $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> " );
    // $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  }
    $("h2").html("20/100 <br /> 20/80 <br /> 20/70");
  }
   if (data.size == 605040 ){
     clear();
     $("#patient1").css("display", "block");
     $("#patient2").css("display", "block");
     $("#patient3").css("display", "block");
     firstLine.className = ("tumble60");
     secondLine.className = ("tumble50");
     thirdLine.className = ("tumble40");
     if (singleLetter == true){
       $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
       $("#twoone").attr("src", "/images/" + image[numbers[2]]).show();
       $("#threeone").attr("src", "/images/" + image[numbers[3]]).show();
       // $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
       // $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> " );
       // $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> " );
     } else {
       $("#oneone").attr("src", "/images/" + image[numbers[0]]).show();
       $("#onetwo").attr("src", "/images/" + image[numbers[1]]).show();
       $("#onethree").attr("src", "/images/" + image[numbers[2]]).show();
       $("#onefour").attr("src", "/images/" + image[numbers[3]]).show();
       $("#onefive").attr("src", "/images/" + image[numbers[4]]).show();

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
    // $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
    // $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
    // $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  }
    $("h2").html("20/60 <br /> 20/50 <br /> 20/40");

  }
   if (data.size == 302520 ){
     clear();
     $("#patient1").css("display", "block");
     $("#patient2").css("display", "block");
     $("#patient3").css("display", "block");
     firstLine.className = ("tumble30");
     secondLine.className = ("tumble25");
     thirdLine.className = ("tumble20");
     if (singleLetter == true){
       $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
       $("#twoone").attr("src", "/images/" + image[numbers[2]]).show();
       $("#threeone").attr("src", "/images/" + image[numbers[3]]).show();
       // $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
       // $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> " );
       // $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> " );
     } else {
       $("#oneone").attr("src", "/images/" + image[numbers[0]]).show();
       $("#onetwo").attr("src", "/images/" + image[numbers[1]]).show();
       $("#onethree").attr("src", "/images/" + image[numbers[2]]).show();
       $("#onefour").attr("src", "/images/" + image[numbers[3]]).show();
       $("#onefive").attr("src", "/images/" + image[numbers[4]]).show();

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
    // $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
    // $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
    // $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
  }
    $("h2").html("20/30 <br /> 20/25 <br /> 20/20");

  }
   if (data.size == 6020 ){
     clear();
     $("#patient1").css("display", "block");
     $("#patient2").css("display", "block");
     $("#patient3").css("display", "block");
     $("#patient4").css("display", "block");
     $("#patient5").css("display", "block");
     $("#patient6").css("display", "block");
     firstLine.className = ("tumble60");
     secondLine.className = ("tumble50");
     thirdLine.className = ("tumble40");
     fourthLine.className = ("tumble30");
     fifthLine.className = ("tumble25");
     sixthLine.className = ("tumble20");
     if (singleLetter == true){
       $("#oneone").attr("src", "/images/" + image[numbers[1]]).show();
       $("#twoone").attr("src", "/images/" + image[numbers[2]]).show();
       $("#threeone").attr("src", "/images/" + image[numbers[3]]).show();
       $("#fourone").attr("src", "/images/" + image[numbers[4]]).show();
       $("#fiveone").attr("src", "/images/" + image[numbers[0]]).show();
       $("#sixone").attr("src", "/images/" + image[numbers[2]]).show();
       // $('#patient1').html("<img src='/images/" + image[numbers[1]] + "'/> " );
       // $('#patient2').html("<img src='/images/" + image[numbers[2]] + "'/> " );
       // $('#patient3').html("<img src='/images/" + image[numbers[3]] + "'/> " );
       // $('#patient4').html("<img src='/images/" + image[numbers[4]] + "'/> " );
       // $('#patient5').html("<img src='/images/" + image[numbers[0]] + "'/> " );
       // $('#patient6').html("<img src='/images/" + image[numbers[2]] + "'/> " );
     } else {
       $("#oneone").attr("src", "/images/" + image[numbers[0]]).show();
       $("#onetwo").attr("src", "/images/" + image[numbers[1]]).show();
       $("#onethree").attr("src", "/images/" + image[numbers[2]]).show();
       $("#onefour").attr("src", "/images/" + image[numbers[3]]).show();
       $("#onefive").attr("src", "/images/" + image[numbers[4]]).show();

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
    // $('#patient1').html("<img src='/images/" + image[numbers[0]] + "'/> <img src='/images/" + image[numbers[1]] + "' /> <img src='/images/" + image[numbers[2]] + "' /> <img src='/images/" + image[numbers[3]] + "' /> <img src='/images/" + image[numbers[4]] + "' />" );
    // $('#patient2').html("<img src='/images/" + image[numbers2[0]] + "'/> <img src='/images/" + image[numbers2[1]] + "' /> <img src='/images/" + image[numbers2[2]] + "' /> <img src='/images/" + image[numbers2[3]] + "' /> <img src='/images/" + image[numbers2[4]] + "' />" );
    // $('#patient3').html("<img src='/images/" + image[numbers3[0]] + "'/> <img src='/images/" + image[numbers3[1]] + "' /> <img src='/images/" + image[numbers3[2]] + "' /> <img src='/images/" + image[numbers3[3]] + "' /> <img src='/images/" + image[numbers3[4]] + "' />" );
    // $('#patient4').html("<img src='/images/" + image[numbers4[0]] + "'/> <img src='/images/" + image[numbers4[1]] + "' /> <img src='/images/" + image[numbers4[2]] + "' /> <img src='/images/" + image[numbers4[3]] + "' /> <img src='/images/" + image[numbers4[4]] + "' />" );
    // $('#patient5').html("<img src='/images/" + image[numbers5[0]] + "'/> <img src='/images/" + image[numbers5[1]] + "' /> <img src='/images/" + image[numbers5[2]] + "' /> <img src='/images/" + image[numbers5[3]] + "' /> <img src='/images/" + image[numbers5[4]] + "' />" );
    // $('#patient6').html("<img src='/images/" + image[numbers6[0]] + "'/> <img src='/images/" + image[numbers6[1]] + "' /> <img src='/images/" + image[numbers6[2]] + "' /> <img src='/images/" + image[numbers6[3]] + "' /> <img src='/images/" + image[numbers6[4]] + "' />" );
  }
    $("h2").html("20/60 <br /> 20/50 <br /> 20/40 <br />20/30 <br /> 20/25 <br /> 20/20");

  }

   if (data.size == "mode1"){
    image = letters;
  }if (data.size == "mode2"){
    image = numbersImg;
  }if (data.size == "mode3"){
    image = ees;
  } if (data.size == "mode4"){
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
      $("#content").css('height', currentZoom + 'px');
      localStorage.setItem("storeSize", currentZoom);
      console.log("grow triggered");
  }


  function shrink(){
     currentZoom -= 1;
     $("#content").css('font-size', currentZoom + 'px');
     $("#content").css('height', currentZoom + 'px');
     localStorage.setItem("storeSize", currentZoom);
     console.log("shrink triggered");
  }

  function reset() {
    localStorage.removeItem("storeSize");
    localStorage.removeItem("mirror");

    window.location.href = window.location.href;
  }

   function mirror(){
       $("testDisplay").addClass("mirror");
       localStorage.setItem("mirror", 1);
   }

   if (localStorage.mirror){
       $("#testDisplay").addClass("mirror");
   }


});



  $(document).ready(function(){
    var numbers;

    if (!localStorage.storeSize) {
      currentZoom = 40;
    } else {

    $("#content").css('font-size', localStorage.storeSize);
    $("#content").css('height', localStorage.storeSize);
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
        numbers = 400;
      };
      if (event.which == 87 ){
      numbers = 300;
      };
      if (event.which == 69 ){
      numbers = 200;
      };
      if (event.which == 82 ){
      numbers = 100;
      };
      if (event.which == 84 ){
      numbers = 80;
      };
      if (event.which == 89 ){
      numbers = 70;
      };
      if (event.which == 85 ){
      numbers = 60;
      };
      if (event.which == 73 ){
      numbers = 50;
      };
      if (event.which == 79 ){
      numbers = 40;
      };
      if (event.which == 80 ){
      numbers = 30;
      };
      if (event.which == 65 ){
      numbers = 25;
      };
      if (event.which == 83 ){
      numbers = 20;
      };
      if (event.which == 68 ){
      numbers = 400200;
      };
      if (event.which == 70 ){
      numbers = 1008070;
      };
      if (event.which == 71 ){
      numbers = 605040;
      };
      if (event.which == 72 ){
      numbers = 302520;
      };
      if (event.which == 74 ){
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


</script>
</body>
</html>
