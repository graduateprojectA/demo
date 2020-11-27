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
  bottom: 50%;
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
  <img src="images/bg1.png" width="100%" height="100%">
  <div class="text">
        학년을 입력해주세요
        <br/>
        <input name = "user_grade"/>
        <br/>
        이번 학기에 들을 학점을 입력해주세요
        <br/>
        <input name = "user_credit"/>
  </div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img src="images/bg2.png" style="width:100%">
  <div class="text">
    시간표선택
    <div>
        <div style = "border: solid 1px; margin-bottom:-47px;">
            <label><input type="checkbox" name = "time_out[]" value="11" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="21" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="31" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="41" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="51" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
        <div style = "border: solid 1px; margin-bottom:-47px;">
            <label><input type="checkbox" name = "time_out[]" value="12" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="22" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="32" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="42" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="52" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
        <div style = "border: solid 1px; margin-bottom:-47px;">
            <label><input type="checkbox" name = "time_out[]" value="13" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="23" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="33" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="43" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="53" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
        <div style = "border: solid 1px; margin-bottom:-47px;">
            <label><input type="checkbox" name = "time_out[]" value="14" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="24" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="34" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="44" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="54" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
        <div style = "border: solid 1px; margin-bottom:-47px;">
            <label><input type="checkbox" name = "time_out[]" value="15" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="25" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="35" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="45" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="55" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
        <div style = "border: solid 1px; margin-bottom:-47px;">
            <label><input type="checkbox" name = "time_out[]" value="16" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="26" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="36" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="46" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="56" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
        <div style = "border: solid 1px;">
            <label><input type="checkbox" name = "time_out[]" value="17" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="27" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="37" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="47" style = "width:65px;height:110px; margin-right:-5px;"></label>
            <label><input type="checkbox" name = "time_out[]" value="57" style = "width:65px;height:110px; margin-right:-5px;"></label>
        </div>
    </div>       
  </div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="images/bg3.png" style="width:100%">
  <div class="text">
    과목선택
    <?php 
        $majors_ = "SELECT major_name FROM majors WHERE recommend_time = 32";
        $major = mysqli_query($conn, $majors_);
        while($eachmajor = mysqli_fetch_assoc($major)){
            echo $eachmajor['major_name'];
        }
    ?>
    <button>제출</button>
  </div>
</div>
</form>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
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
</script>

</body>
</html> 
