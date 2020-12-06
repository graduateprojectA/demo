<?php 
session_start();
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email']; 
$mysql_port=3306;
$conn = mysqli_connect('localhost', 'root', '1234', 'graduate');
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
if(mysqli_connect_errno()){ echo "연결실패! ".mysqli_connect_error();}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  height:100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #333333;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 7%;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
/* .numbertext {
  color: #111111;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
} */

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.aa{
    height:100px;
    width: 100px;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.0s;
  animation-name: fade;
  animation-duration: 2.0s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<form method="POST" action="Input_back.php">
<div class="slideshow-container">
<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="images/background_image_input_1.png" width="100%" height="760px">
  <img src="images/curvelio.png" height="100px" style = "position:absolute; top:3%;left:14%;">
  <div class="text" style = "position: absolute; top:280px; text-align: left; left: 50%; width: 400px; margin-left:-200px;">
        <p style = "border:solid 0px; font-size: 1.3em; font-weight:bolder; font-family: 'Jeju Gothic', sans-serif;">학년을 입력해주세요.</p>
        <input name = "user_grade" style = "height: 40px; width: 400px; background-color: #faefe8; border-bottom: solid 2px; border-color: #99aa8c; border-top: 0px; boder-left:0px; border-right:0px;"/>
        <br/><br/>
        <p style = " border:solid 0px; font-size: 1.3em; font-weight:bolder; font-family: 'Jeju Gothic', sans-serif;">이번 학기에 들을 학점을 입력해주세요.</p>
        <input name = "user_credit" style = "height: 40px; width: 400px; background-color: #faefe8; border-bottom: solid 2px; border-color: #99aa8c; border-top: 0px; boder-left:0px; border-right:0px;"/>
  </div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img src="images/background_image_input_2.png" width="100%" height="760px">
  <img src="images/curvelio.png" height="100px" style = "position:absolute; top:3%;left:14%;">
  <div class="text">
    <div style = "position: absolute; top: -45px; left:50%; width: 300px; margin-left: -150px;font-size: 1.2em; font-weight:bolder; font-family: 'Jeju Gothic', sans-serif;">불가능한 시간을 체크해주세요.</div>
    <p style = "position: absolute; top: -11px; left:640px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">월</p>
    <p style = "position: absolute; top: -11px; left:700px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">화</p>
    <p style = "position: absolute; top: -11px; left:762px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">수</p>
    <p style = "position: absolute; top: -11px; left:822px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">목</p>
    <p style = "position: absolute; top: -11px; left:882px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">금</p>
    <p style = "position: absolute; top: 10px; left:575px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">8:00</p>
    <p style = "position: absolute; top: 65px; left:575px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">9:30</p>
    <p style = "position: absolute; top: 128px; left:568px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">11:00</p>
    <p style = "position: absolute; top: 190px; left:568px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">12:30</p>
    <p style = "position: absolute; top: 255px; left:568px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">14:00</p>
    <p style = "position: absolute; top: 317px; left:568px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">15:30</p>
    <p style = "position: absolute; top: 380px; left:568px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">17:00</p>
    <p style = "position: absolute; top: 440px; left:568px; font-size: 1.1em; font-family: 'Jeju Gothic', sans-serif;">18:30</p>
    <div>
        <div style = "margin-bottom:-43px;">
            <label><input type="checkbox" name = "time_out[]" value="11" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="21" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="31" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="41" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="51" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
        <div style = "margin-bottom:-43px;">
            <label><input type="checkbox" name = "time_out[]" value="12" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="22" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="32" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="42" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="52" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
        <div style = "margin-bottom:-43px;">
            <label><input type="checkbox" name = "time_out[]" value="13" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="23" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="33" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="43" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="53" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
        <div style = "margin-bottom:-43px;">
            <label><input type="checkbox" name = "time_out[]" value="14" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="24" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="34" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="44" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="54" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
        <div style = "margin-bottom:-43px;">
            <label><input type="checkbox" name = "time_out[]" value="15" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="25" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="35" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="45" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="55" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
        <div style = "margin-bottom:-43px;">
            <label><input type="checkbox" name = "time_out[]" value="16" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="26" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="36" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="46" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="56" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
        <div>
            <label><input type="checkbox" name = "time_out[]" value="17" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="27" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="37" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="47" style = "width:60px;height:100px; margin-right:-7px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="57" style = "width:60px;height:100px; margin-right:-7px;"></label>
        </div>
    </div>       
  </div>
</div>


<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="images/background_image_input_3_2.png" width="100%" height="760px">
  <img src="images/curvelio.png" height="100px" style = "position:absolute; top:3%;left:14%;">
  <div class="text" style = "position: absolute; top:230px; text-align: left; left: 40%; width: 450px; margin-left:-200px;">
  <div style = "position: absolute; top: -45px; left:45%; width: 300px; margin-left: -180px; margin-botton: -80px; font-size: 1.2em; font-weight:bolder; font-family: 'Jeju Gothic', sans-serif;">제외할 수업을 체크해주세요.</div>
    <?php 
        // 32 이거 어떻게 해야하냐ㅠㅠㅠㅠㅠ 학년에서 다른 페이지와 받아야할 것 같음
        $majors_ = "SELECT * FROM majors WHERE recommend_time = 32";
        $major = mysqli_query($conn, $majors_);
        while($eachmajor = mysqli_fetch_array($major)){
            $num = $eachmajor[1];
            $divi = $eachmajor[6];
            $numdivi = $num."".$divi;
            $a = $eachmajor['major_name'].$eachmajor['professor_name'];
            ?>
        <input type = "checkbox" name = "major_check[]" value = "<?php echo $numdivi?>">
            <a href style = "text-decoration:none; font-size: 1.1em; color: #000000; font-family: 'Jeju Gothic', sans-serif;" 
            onmouseout="javascript:hideLayer('<?php echo $a ?>');" 
            onmouseover="javascript:showLayer('<?php echo $a ?>');">
              <p style = "float:left; margin-top:-23px; position:absolute; left:50px;"><?php echo $eachmajor['major_name']?></p>
              <p style = "float:left; margin-top:-23px; position:absolute; left:250px;"><?php echo $eachmajor['division_number']." 분반"?></p>
              <p style = "float:left; margin-top:-23px; position:absolute; left:330px;"><?php echo $eachmajor['professor_name']. "교수님"?></p>
              <br/>
            </a>
        </input>
        <br/>
        <?php } ?>
        <br/>
    <button style = "background:#faefe8; width:27vw; height:6vh; border:0; font-size: 15px;">시간표 생성하기</button>
  </div>
</div>
</form>

<div id="소프트웨어공학최병주" style=" position:absolute; right:530px; top:170px; visibility : hidden">
<div onmouseout="javascript:hideLayer('소프트웨어공학최병주');" onmouseover="javascript:showLayer('소프트웨어공학최병주');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
소프트웨어공학<br/>최병주 교수님</br>학수번호: 20472<br/>분반번호: 01<br/><br/>중간고사<br/>2020/10/16(금)<br/>기말고사<br/>2020/12/04(금)
</p>
</div>
</div>

<div id="SW리더십세미나II김현수" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('SW리더십세미나II김현수');" onmouseover="javascript:showLayer('SW리더십세미나II김현수');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
SW리더십세미나II<br/>김현수 교수님</br>학수번호: 38409<br/>분반번호: 01<br/><br/>중간고사<br/>일정없음<br/>기말고사<br/>일정없음
</p>
</div>
</div>

<div id="소프트웨어공학박지현" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('소프트웨어공학박지현');" onmouseover="javascript:showLayer('소프트웨어공학박지현');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
소프트웨어공학<br/>박지현 교수님</br>학수번호: 20472<br/>분반번호: 02<br/><br/>중간고사<br/>2020/10/16(금)<br/>기말고사<br/>2020/12/04(금)
</p>
</div>
</div>

<div id="컴퓨터그래픽스김영준" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('컴퓨터그래픽스김영준');" onmouseover="javascript:showLayer('컴퓨터그래픽스김영준');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
컴퓨터그래픽스<br/>김영준 교수님</br>학수번호: 20494<br/>분반번호: 01<br/><br/>중간고사<br/>2020/11/03(화)<br/>기말고사<br/>2020/12/18(금)
</p>
</div>
</div>

<div id="컴퓨터네트워크이미정" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('컴퓨터네트워크이미정');" onmouseover="javascript:showLayer('컴퓨터네트워크이미정');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
컴퓨터네트워크<br/>이미정 교수님</br>학수번호: 20495<br/>분반번호: 01<br/><br/>중간고사<br/>2020/10/28(수)<br/>기말고사<br/>2020/12/14(월)
</p>
</div>
</div>

<div id="컴퓨터네트워크이숙영" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('컴퓨터네트워크이숙영');" onmouseover="javascript:showLayer('컴퓨터네트워크이숙영');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
컴퓨터네트워크<br/>이숙영 교수님</br>학수번호: 20495<br/>분반번호: 02<br/><br/>중간고사<br/>2020/10/27(화)<br/>기말고사<br/>2020/12/15(화)
</p>
</div>
</div>

<div id="캡스톤디자인프로젝트A김현수" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('캡스톤디자인프로젝트A김현수');" onmouseover="javascript:showLayer('캡스톤디자인프로젝트A김현수');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
캡스톤디자인프로젝트A<br/>김현수 교수님</br>학수번호: 36506<br/>분반번호: 01<br/><br/>중간고사<br/>일정없음<br/>기말고사<br/>일정없음
</p>
</div>
</div>

<div id="임베디드시스템및실험박상수" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('임베디드시스템및실험박상수');" onmouseover="javascript:showLayer('임베디드시스템및실험박상수');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
임베디드시스템및실험<br/>박상수 교수님</br>학수번호: 37271<br/>분반번호: 01<br/><br/>중간고사<br/>2020/10/19(월)<br/>기말고사<br/>2020/12/14(월)
</p>
</div>
</div>

<div id="SW리더십세미나I김현수" style=" position:absolute; right:530px; top:150px; visibility : hidden">
<div onmouseout="javascript:hideLayer('SW리더십세미나I김현수');" onmouseover="javascript:showLayer('SW리더십세미나I김현수');">
<p style = "width: 160px; height:250px; position: absolute; color:#FFFFFF; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;">
SW리더십세미나I<br/>김현수 교수님</br>학수번호: 38408<br/>분반번호: 01<br/><br/>중간고사<br/>일정없음<br/>기말고사<br/>일정없음
</p>
</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<!-- <br> -->
<!-- 
<div style="text-align:center">
  <button type = "button" onclick="currentSlide(1)" class="aa">aa</button>
  <button type = "button" onclick="currentSlide(2)" class="aa">aa</button>
  <button type = "button" onclick="currentSlide(3)" class="aa">aa</button>
</div> -->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
   if (n > slides.length) {dot[n].style.display = "block";}    
   if (n < 1) {dot[n-1].style.display = "block";}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  

  var aas = document.getElementsByClassName("aa");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < aas.length; i++) {
      aas[i].className = aas[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  aas[slideIndex-1].className += " active";
}

function showLayer(layerID) {
document.all[layerID].style.visibility = "visible";
}
function hideLayer(layerID) {
document.all[layerID].style.visibility = "hidden";
}
</script>

</body>
</html> 
