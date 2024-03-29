<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Truvision Acuity</title>
	<style>
	html, body {
	width: 100%;
	margin: 0;
  font-size: 14pt;
    min-height: 100%;

}
body{
	/*width: 60%;*/
	/*margin: auto;*/
	/* background-image: radial-gradient(#333333, #666666, #333333);*/
	background-image: url('/images/bottomrleftdesign.png'), url('/images/toprightdesign.png'), url('/images/logotranslucentgray.png'), url('/images/background.png');
	background-position: left bottom, right top, 95% 5%, center top;
	background-size: 35%, 35%, 15%, cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
  margin-top: -30px;


}
/* @media only screen and (max-width: 600px) { */
@media only screen and (max-width: 800px) {
	body {
		/* width: 90%; */
		background-size: 80%, 80%, 35%, cover;
	}
}

.row {
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;

}

.justify-content-start {
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.gutter
{
	margin-left:1%;
	margin-right:1%;
}
@media only screen and (max-width: 800px) {
	.gutter {
		margin-left:2%;
		margin-right:2%;
	}
}

.margin-top {
	margin-top:6%;
}
/*
@media only screen and (max-width: 800px) {
	.margin-top {
		margin-top:3%;
	}
}
*/

.logobackground
{
	background-image: url('/images/logoColor.png');
	background-repeat: no-repeat;
	background-size: 20%;
	background-position: left top;
	padding:50px 50px 0 50px;
}
@media only screen and (max-width: 800px) {
	.logobackground
	{
		background-image: none;
		padding:0;
	}
}

@font-face{
	font-family: 'Sloan';
	src: url('/font/Sloan.ttf') format('truetype');
}
@font-face{
	font-family: 'GOTHIC';
	src: url('Font/GOTHIC.TTF') format('truetype');
}
@font-face{
	font-family: 'GOTHICB';
	src: url('Font/GOTHICB.TTF') format('truetype');
}

button:focus {
	outline: none;
}
button:active{
	/* background-color: #33383f; */
	transform: translateY(4px);
}

.modeHolder{
	/* margin: auto;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	align-content: center;
	align-items: stretch;*/
	/*text-align:center;*/
	background-image: linear-gradient(to top, #333 , #666);
	border-radius: 15px;
	margin: 0 90px 0 90px;
}

@media only screen and (max-width: 800px) {
	.modeHolder {
		margin: 0;

	}

}

.modeButton{
	height: 40px;
	width: 100px;
	background-image: linear-gradient(to top, #bfbfbf , #fff);
	font-weight: bold;
	color: #8E0202;
	/* float: left; */
	margin: 5px 7px 15px 7px; /*15px 7px 0 7px;*/
	border: none;
	border-radius: 5px;
	/* font-family: 'GOTHIC'; */
}

.duochrome{
	height: 40px;
	width: 100px;
	background-image: linear-gradient(to right, #022140 , #140289);
	color: white;
	/* float: left; */
	margin: 5px 7px 15px 7px;
	border: none;
	border-radius: 5px;
}

.lineButtonActive{
	height: 40px;
	width: 100px;
	background-image: linear-gradient(to right, #022140 , #140289);
	color: white;
	/* float: left; */
	margin: 5px 7px 15px 7px;
	border: none;
	border-radius: 5px;
}
.modeButtonActive{
	height: 40px;
	width: 100px;
	/*background-image: linear-gradient(to right, #022140 , #140289);*/
	color: white;
	/* float: left; */
	margin: 5px 7px 15px 7px;
	border-bottom: 5px solid #810815; /* #8E0202 */
	border-collapse: separate;
	border-radius: 5px;
	background-image: none;
	background-color:#1D2057;
	/* box-shadow: inset 0px -5px 0px 0px #810815;*/
}

.lineHolder{
	width: 100%;
	/* margin-top: 20px; */
	margin: 20px 0;
	border-radius: 10px;
	/* background-color: #474B4F; */
	background-image: url('/images/logotranslucent.png'), linear-gradient(to top, #666 , #808080);
	background-position: right bottom, center top;
	background-size: 10%, cover;
	background-repeat: no-repeat;
	min-height: 150px;
	text-align: center;
	/*display: table;*/
	position: relative;
	display:flex;
	justify-content:center;
}
@media only screen and (max-width: 800px) {
	.lineHolder {
		background-size: 15%, cover;
	}
}
@media only screen and (max-width: 650px) {
	 .modeButton{
	    width: 80px;
	}
  body{margin-top: opx;}
  .gutter{
    margin-top: 12%;
  }
}
@media only screen and (max-width: 450px) {
	 .modeButton{
	    width: 100px;
	}
  body{margin-top: opx;}
  .gutter{
    margin-top: 15%;
  }
}


.lineContent{
	line-height: 40px;
	/*display: table-cell;
	vertical-align: middle;*/
	align-self: center;
}

.lineContent img{
	height: 30px;
	margin: 0 10px;
	filter: contrast(150%);
}

/* .modeButtonRed
{
	background-color:#810815;
	background-image:none;
	color:#fff;
} */

.singleFilter{
	top: 10px;
	left: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #8e0202 , #bf0000);
	color: white;
	border: none;
	border-radius: 5px;
  width: 30px;
  height: 30px;
}

.singleFilterActive{
	top: 10px;
	left: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #022140 , #140289);
	color: white;
	border: none;
	border-radius: 5px;
  width: 30px;
  height: 30px;
}
.retinoscopy{
	top: 60px;
	left: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #8e0202 , #bf0000);
	color: white;
	border: none;
	border-radius: 5px;
  width: 30px;
  height: 30px;
}

.retinoscopyActive{
	top: 60px;
	left: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #022140 , #140289);
	color: white;
	border: none;
	border-radius: 5px;
  width: 30px;
  height: 30px;
}

.colorPlates{
	top: 110px;
	left: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #8e0202 , #bf0000);
	color: white;
	border: none;
	border-radius: 5px;
  width: 30px;
  height: 30px;
}

.colorPlatesActive{
	top: 110px;
	left: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #022140 , #140289);
	color: white;
	border: none;
	border-radius: 5px;
  width: 30px;
  height: 30px;
}

#refresh{
	top: 10px;
	right: 10px;
  width: 30px;
  height: 30px;
	position: absolute;
	background-image: linear-gradient(to right, #8e0202 , #bf0000);
	color: white;
	border: none;
	border-radius: 5px;
}

#movie{
	top: 60px;
  width: 30px;
  height:30px;
	right: 10px;
	position: absolute;
	background-image: linear-gradient(to right, #8e0202 , #bf0000);
	color: white;
	border: none;
	border-radius: 5px;
}

.text{
	font-family: 'Sloan';
	font-size: .8em;
	line-height: 30px;
}

.text2{
	font-family: 'Sloan';
	font-size: 2em;
	line-height: 30px;
	letter-spacing: 0.6em;
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
  overflow: scroll;
}

.dropbtn {
	background-image: linear-gradient(to right, #022140 , #140289);
	color: white;
	padding: 6px;
	font-size: 16px;
	border: none;
	cursor: pointer;
	position: relative;
	top: 0;
	left: 0;
}

.dropdown {
	position: absolute;
  top: 0;
  left: 0;
	display: inline-block;
}

.dropdown-content {
	display: none;
	position: fixed;
	/* top: 35px; */
	left: 0;
	background-color: #f9f9f9;
	min-width: 160px;
	/* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
	z-index: 1;
}

.dropdown-content button {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	width: 100%;
	display: block;
}

.dropdown-content button:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
	display: block;
}

.dropdown:hover .dropbtn {
	background-color: #3e8e41;
}

.newRow p, small{
  display: inline;
}

small{
  font-size: .9em;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
}

#colorHolder{
  display: none;
}

.soloLine{
  padding-left: 5px;
  padding-right: 3px;
  cursor: pointer;
}

</style>
</head>

<body class="container" onload="initialTrigger()">
	<div class="dropdown">
		<button class="dropbtn">Calibrate</button>
		<div class="dropdown-content">
			<button class="singleButtons" data-size = "shrink" id="zoomOut">Zoom Out</button>
			<button class="singleButtons" data-size = "grow" id="zoomIn">Zoom In</button>
			<button class="singleButtons" data-size = "mirror" id="mirror">Mirror</button>
			<button class="singleButtons" data-size = "reset" id="reset">Reset</button>
		</div>
	</div>

	<div class="row justify-content-center gutter margin-top" >
		<div class="logobackground">
			<div class="modeHolder">
				<div class="row justify-content-center">
				<button class="modeButton singleButtons modeButtonActive" id="singleLetter" data-size = "mode1" >Letters</button>
				<button class="modeButton singleButtons" id="number" data-size = "mode2">Numbers</button>
				<button class="modeButton singleButtons" id="tumblingE" data-size = "mode3">Tumbling E</button>
        <button class="singleButtons modeButton" id="colorPlates" data-size="colorPlates">Ishihara</button>
      </div>
          <div class="row justify-content-center col-sm-3 col-md-3 col-lg-3">
				<button class="modeButton singleButtons" id="picture" data-size = "mode4">LEA</button>
				<button class="modeButton singleButtons" id="duochrome" data-size = "duochrome">DuoChrome</button>
				<button class="modeButton singleButtons" id="mute" data-size = "mute">Mute</button>
        <button class="modeButton singleButtons" id="hotv" data-size="hotv">HOTV</button>
				</div>
			</div>

			<div class="lineHolder">
				<button class="singleButtons singleFilter" id="singleFilter" data-size="singleFilter">1</button>
        <button class="singleButtons retinoscopy" id="retinoscopy" data-size="retinoscopy">RS</button>
        {{-- <button class="singleButtons colorPlates" id="colorPlates" data-size="colorPlates">CP</button> --}}
				<button class="singleButtons" id="refresh" data-size="refresh">R</button>
        <button class="singleButtons" id="movie" data-size="movie">MV</button>
				<div class="lineContent text">
             <p id="line1" class="soloLine singleButtons" data-size="solo1"></p>
             <p id="line2" class="soloLine singleButtons" data-size="solo2"></p>
             <p id="line3" class="soloLine singleButtons" data-size="solo3"></p>
             <p id="line4" class="soloLine singleButtons" data-size="solo4"></p>
             <p id="line5" class="soloLine singleButtons" data-size="solo5"></p>
             <p id="line6" class="soloLine singleButtons" data-size="solo6"></p>
				  </div>
			</div>

			<div class="modeHolder">
        <div id="sizeHolder">
        <div class="row justify-content-center col-6 col-sm-6 col-md-6 col-lg-6">
				<button class="modeButton singleButtons" data-clicker='1' id="fourHundred" data-size="400">20/400</button>
				<button class="modeButton singleButtons" data-clicker="2" id="threeHundred" data-size="300">20/300</button>
				<button class="modeButton singleButtons" data-clicker="3" id="twoHundred" data-size="200">20/200</button>
        	{{-- </div>
        <div class="row justify-content-center col-sm-3 col-md-3 col-lg-6"> --}}
          <button class="modeButton singleButtons" data-clicker="4" id="oneHundred" data-size="100">20/100</button>
          <button class="modeButton singleButtons" data-clicker="5" id="eighty" data-size="80">20/80</button>
          <button class="modeButton singleButtons" data-clicker="6" id="seventy" data-size="70">20/70</button>
          <button class="modeButton singleButtons" data-clicker="7" id="sixty" data-size="60">20/60</button>

        </div>



				<div class="row justify-content-center col-6 col-sm-6 col-md-6 col-lg-6">
          <button class="modeButton singleButtons" data-clicker="8" id="fifty" data-size="50">20/50</button>
				  <button class="modeButton singleButtons" data-clicker="9" id="forty" data-size="40">20/40</button>
      {{-- </div>
            <div class="row justify-content-center col-sm-3 col-md-3 col-lg-6"> --}}
				<button class="modeButton singleButtons" data-clicker="10" id="thirty" data-size="30">20/30</button>
				<button class="modeButton singleButtons" data-clicker="11" id="twentyFive" data-size="25">20/25</button>
				<button class="modeButton singleButtons" data-clicker="12" id="twenty" data-size="20">20/20</button>
        <button class="modeButton singleButtons" data-clicker="13" id="fifteen" data-size="15">20/15</button>
        <button class="modeButton singleButtons" data-clicker="14" id="ten" data-size="10">20/10</button>
				</div>

				<div class="row justify-content-center">
					<hr style="width:80%"/>
				</div>

				<div class="row justify-content-center">
				<!--button class="modeButton singleButtons" data-clicker="" id="groupOne"  data-size = "400200" style="border: 5px solid #847777">400/200</button>
				<button class="modeButton singleButtons" data-clicker="" id="groupTwo" data-size = "1008070" style="border: 5px solid #847777">100/80/70</button>
				<button class="modeButton singleButtons" data-clicker="" id="groupThree" data-size = "605040" style="border: 5px solid #847777">60/50/40</button>
				<button class="modeButton singleButtons" data-clicker="" id="groupFour" data-size = "302520" style="border: 5px solid #847777">30/25/20</button>
				<button class="modeButton singleButtons" data-clicker="" id="groupSix" data-size = "6020" style="border: 5px solid #847777">60-20</button-->

				<button class="modeButton singleButtons"  data-clicker="15" id="groupOne"  data-size = "400200" style="border: 5px solid #810815">400/200</button>
        <button class="modeButton singleButtons"  data-clicker="16" id="groupTwo" data-size = "1008070" style="border: 5px solid #810815">100/80/70</button>
        <button class="modeButton singleButtons"  data-clicker="17" id="groupThree" data-size = "605040" style="border: 5px solid #810815">60/50/40</button>
				<button class="modeButton singleButtons"  data-clicker="18" id="groupFour" data-size = "302520" style="border: 5px solid #810815">30/25/20</button>
				<button class="modeButton singleButtons"  data-clicker="19" id="groupSix" data-size = "6020" style="border: 5px solid #810815">60-20</button>
				</div>

      </div>
        <div id="colorHolder">
          <div class="row justify-content-center col-6 col-sm-6 col-md-6 col-lg-6">
  				<button class="modeButton singleButtons" id="plate1" data-size="cp12">12</button>
  				<button class="modeButton singleButtons" id="plate2" data-size="cp8">8</button>
  				<button class="modeButton singleButtons" id="plate3" data-size="cp29">29</button>
          <button class="modeButton singleButtons" id="plate4" data-size="cp51">5</button>
        	<button class="modeButton singleButtons" id="plate5" data-size="cp3">3</button>
          </div>
          <div class="row justify-content-center col-6 col-sm-6 col-md-6 col-lg-6">
  				<button class="modeButton singleButtons" id="plate6" data-size="cp15">15</button>
  				<button class="modeButton singleButtons" id="plate7" data-size="cp74">74</button>
          <button class="modeButton singleButtons" id="plate8" data-size="cp6">6</button>
          <button class="modeButton singleButtons" id="plate9" data-size="cp45">45</button>
          <button class="modeButton singleButtons" id="plate10" data-size="cp5">5</button>
          </div>
          <div class="row justify-content-center col-6 col-sm-6 col-md-6 col-lg-6">
  				<button class="modeButton singleButtons" id="plate11" data-size="cp7">7</button>
          <button class="modeButton singleButtons" id="plate12" data-size="cp16">16</button>
          <button class="modeButton singleButtons" id="plate13" data-size="cp73">73</button>
          <button class="modeButton singleButtons" id="plate14" data-size="cp26">26</button>
          <button class="modeButton singleButtons" id="plate15" data-size="cp42">42</button>
          </div>
        </div>


			</div>
		</div>
	</div>


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
              7 = Activate "single letter" mode --OR-- press the button marked with "1"
            </li>
            <li>
              8 = Activate color testing --OR-- press the button marked with "CP"
            </li>
            <li>
              9 = Activate retinoscopy video --OR-- press the button marked with "RS"
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
              Plus/Equals = Calibration button to set letters to larger size
            </li>
            <li>
              Minus/Underscore = Calibration buttons to set letters to smaller size
            </li>
            <li>
              M = Calibration button to make letters a mirror image
            </li>
            <li>
              * = Reset cailbration of chart and delete all user-saved settings
            </li>
            <li>
              C = Refresh patient screen to erase filters and set back to full rows of letters (deactivates mute, duochrome, single letter mode)<br />--OR-- click the button marked with "R"
            </li>
      </ul>

      <ul style="float:left;">
      Here we have the sizes of the 20/20 lines that you need to configure for each exam room.<br /> Measure the distance from patient to screen. <br />If the room is mirrored, measure from patient to mirror, then mirror to screen.<br /> Activate the 20/20 line and make the letters larger or smaller to match the correct distance in feet for the room.
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
      <br />
      <br /><br />
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

	<script src="/js/jquery-3.3.1.min.js"></script>

	<script src="/js/socket.io.js"></script>
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="/js/popper.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>

	<script type="text/javascript" src="/js/main2.js"></script>

</body>
</html>
