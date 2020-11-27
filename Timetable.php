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
  width:200px;
}
.time{
  width: 70px;
}
.day_box{
  /* width:250px; */
  text-align:center;
  /* border: 1px solid; */
}
.mon{
  position: absolute;
  left: 7%;
  border: 1px solid;
}
.tue{
  position: absolute;
  left: 19%;
  border: 1px solid;
}
.wed{
  position: absolute;
  left: 34%;
  border: 1px solid;
}
.thur{
  position: absolute;
  left: 50%;
  border: 1px solid;
}
.fri{
  position: absolute;
  left: 59%;
  border: 1px solid;
}
</style>
</head>

<body class="default">
<?php 
$query = "SELECT max(table_number) FROM time_table;";
$result = mysqli_query($conn, $query);
$table_num_ = mysqli_fetch_row($result);
$table_num = $table_num_[0];
?>

<p>총 <?php echo $table_num?>개의 추천 시간표가 있습니다.</p>
<p>안녕 &#9;안녕 &nbsp; 안녕 &emsp; 안녕</p>


<?php
for ($i=1; $i<=$table_num; $i++){
  $table_index = $i;
?>
<table style="border:1px solid;" id="timetable">
<!-- 몇 학점 추천 시간표 -->
<thead><tr>
<th style="border:1px solid;">시간</th>
<th class="day" style="border:1px solid;">월</th>
<th class="day" style="border:1px solid;">화</th>
<th class="day" style="border:1px solid;">수</th>
<th class="day" style="border:1px solid;">목</th>
<th class="day" style="border:1px solid;">금</th>
</tr></thead>
<tr>
<td class="time" style="border:1px solid;">1교시</td>
<?php 
$query = "SELECT * FROM time_table where table_number = $table_index and period=1;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
    if (!strcmp($day,"월"))     echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
    if (!strcmp($day,"화"))     echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
    if (!strcmp($day,"수"))     echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
    if (!strcmp($day,"목"))     echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
    if (!strcmp($day,"금"))     echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>
</tr>
<tr><td class="time" style="border:1px solid;">2교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = $table_index and period=2;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
  if (!strcmp($day,"월"))      echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
  if (!strcmp($day,"화"))      echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
  if (!strcmp($day,"수"))      echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
  if (!strcmp($day,"목"))      echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
  if (!strcmp($day,"금"))      echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>

</tr>
<tr><td class="time" style="border:1px solid;">3교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = $table_index and period=3;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
  if (!strcmp($day,"월"))      echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
  if (!strcmp($day,"화"))      echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
  if (!strcmp($day,"수"))      echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
  if (!strcmp($day,"목"))      echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
  if (!strcmp($day,"금"))      echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>

</tr>
<tr><td class="time" style="border:1px solid;">4교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = $table_index  and period=4;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
  if (!strcmp($day,"월"))      echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
  if (!strcmp($day,"화"))      echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
  if (!strcmp($day,"수"))      echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
  if (!strcmp($day,"목"))      echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
  if (!strcmp($day,"금"))      echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>

</tr>
<tr><td class="time" style="border:1px solid;">5교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = $table_index and period=5;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
  if (!strcmp($day,"월"))      echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
  if (!strcmp($day,"화"))      echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
  if (!strcmp($day,"수"))      echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
  if (!strcmp($day,"목"))      echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
  if (!strcmp($day,"금"))      echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>

</tr>
<tr><td class="time" style="border:1px solid;">6교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = $table_index and period=6;";
$result = mysqli_query($conn, $query);  
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
  if (!strcmp($day,"월"))      echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
  if (!strcmp($day,"화"))      echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
  if (!strcmp($day,"수"))      echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
  if (!strcmp($day,"목"))      echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
  if (!strcmp($day,"금"))      echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>

</tr>
<tr><td class="time" style="border:1px solid;">7교시</td>

<?php 
$query = "SELECT * FROM time_table where table_number = $table_index and period=7;";
$result = mysqli_query($conn, $query);
while ($table_1 = mysqli_fetch_assoc($result)){
  $day = $table_1['week'];
  $course = $table_1['course_name'];
  if (!strcmp($day,"월"))      echo '<div class="day_box"><td class="mon">',$course,'</td></div>';
  if (!strcmp($day,"화"))      echo '<div class="day_box"><td class="tue">',$course,'</td></div>';
  if (!strcmp($day,"수"))      echo '<div class="day_box"><td class="wed">',$course,'</td></div>';
  if (!strcmp($day,"목"))      echo '<div class="day_box"><td class="thur">',$course,'</td></div>';
  if (!strcmp($day,"금"))      echo '<div class="day_box"><td class="fri">',$course,'</td></div>';
}
?>
</tr>
</table>
<?php }?>


</body>
</html>