<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'graduate');
// session_start();
// $id = $_SESSION['user_id'];
// $query = "SELECT credit from user where user = '$id';";
// mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');
.default{
  text-align:center;
  width:100%;
  height:100%;
  font-size: 20px;
  font-family: 'Do Hyeon', sans-serif;
}
.day{
  width:250px;
}
.time{
  width: 70px;
}
.first{
  margin-top:2%;
  width:250px;
}
.second{
  width:250px;
}
</style>
</head>

<body class="default">
<table>
<!-- 몇 학점 추천 시간표 -->
<p>추천 시간표</p>
<?php 
$query = "SELECT max(table_number) FROM time_table;";
$result = mysqli_query($conn, $query);
$table_num_ = mysqli_fetch_row($result);
$table_num = $table_num_[0];
echo $table_num;
?>

<nav><ul><?php 
for($i = 1; $i <= $table_num; $i++){
  echo "<button>",$i,"</button>";
}
?></ul></nav> 
<p>안녕 &#9;안녕 &nbsp; 안녕 &emsp; 안녕</p>

<thead><tr>
<th>시간</th>
<th class="day">월</th>
<th class="day">화</th>
<th class="day">수</th>
<th class="day">목</th>
<th class="day">금</th>
</tr></thead>

<tbody>
<tr>
<td class="time">1교시</td>
<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=1;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="first">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="first">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="first">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="first">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="first">',$course,'</td>';
}
?>
</tr>
<tr><td class="time">2교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=2;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="second">',$course,'</td>';
}
?>

</tr>
<tr><td class="time">3교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=3;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="second">',$course,'</td>';
}
?>

</tr>
<tr><td class="time">4교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=4;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="second">',$course,'</td>';
}
?>

</tr>
<tr><td class="time">5교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=5;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="second">',$course,'</td>';
}
?>

</tr>
<tr><td class="time">6교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=6;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="second">',$course,'</td>';
}
?>

</tr>
<tr><td class="time">7교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = 1 and period=7;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"화"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"수"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"목"))      echo '<td class="second">',$course,'</td>';
    if (!strcmp($day,"금"))      echo '<td class="second">',$course,'</td>';
}
?>
</tr>
</tbody>
<!-- <tbody>
<tr>
<td>1교시</td>
<td class="first"></td>
<td class="first"></td>
<td class="first"></td>
<td class="first"></td>
<td class="first"></td>
</tr>

<tr>
<td>2교시</td>
<td class="second"></td>
<td class="second"></td>
<td class="second"></td>
<td class="second"></td>
<td class="second"></td>
</tr> -->

</tbody>
</table>
</body>
</html>





<!-- 
<body>
  <div class="default_box">
        <form method="POST" action="Join_back.php">
          <input type="text" class="txt_box" id="ex4-id-input" name="id" placeholder="학번 7자리"/>
          <br>
          <input type="password" class="txt_box" id="ex4-pw-input" name="password" placeholder="비밀번호"/>
          <br>
          <button type="button" id="myBtn" class="txt_box">전공 선택</button>
          <br>
          <input type="submit" value="회원가입" class="default_btn">      
          <br><br>
          <a href = "Login.php" style = "font-size: 18px; color: #777777; 
          text-decoration: none;">이미 계정이 있으신가요? 지금 <p style="display:inline; color:#99aa8c; font-weight:bold;">로그인</p>하세요!</a>  
          </form>
    </div>

          <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>                                                               
              <p>전공을 검색하세요</p>
              <input id="majors" name="major" placeholder="ex) 컴퓨터공학">
              <button>선택</button>
            </div>
          </div>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

$(function() {
  var allMajors = [];
  <?php 
    $major_ = "SELECT major_name FROM department;";
    $major = mysqli_query($conn, $major_);
    while($result = mysqli_fetch_assoc($major)){?>
      allMajors.push('<?php echo $result['major_name'] ?>');
  <?php }  ?>

// 자동검색
  $("#majors").autocomplete({
    source: allMajors,
    select: function(event, ui) {
        console.log(ui.item);
    },
    focus: function(event, ui) {
        return false;
        //event.preventDefault();
    } 
  });
});

(function cleanText($) {
  var $pw = $('#ex4-id-input, #ex4-pw-input')
  $pw.on('click focus', function() {
    $(this).siblings('label').hide()
  });
  $pw.on('blur', function() {
    $this = $(this)
    if ($.trim($this.val()).length === 0) {
      $this.siblings('label').show()
    }
  });
})(jQuery);




 // Get the modal
 var modal = document.getElementById('myModal');
 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");
 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];   

 // When the user clicks on the button, open the modal 
 btn.onclick = function() {
     modal.style.display = "block";
 }
 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     modal.style.display = "none";
 }
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
</script>
</body>
</html>  -->