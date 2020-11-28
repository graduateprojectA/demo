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
  width:15%;
}
.time{
  width: 5%;
}
.day_box{
  /* width:250px; */
  text-align:center;
}
.mon{
  width:12%;
  position: absolute;
  margin-left: 0.5%;
  border-right: 2px solid;
  border-bottom: 2px solid;
  font-size:17px;
}
.tue{
  width:12%;
  position: absolute;
  margin-left: 14%;
  border-right: 2px solid;
  border-bottom: 2px solid;
  font-size:17px;
}
.wed{
  width:12%;
  position: absolute;
  margin-left: 28%;
  border-right: 2px solid;
  border-bottom: 2px solid;
  font-size:17px;
}
.thur{
  width:12%;
  position: absolute;
  margin-left: 42%;
  border-right: 2px solid;
  border-bottom: 2px solid;
  font-size:17px;
}
.fri{
  width:12%;
  position: absolute;
  margin-left: 56%;
  border-right: 2px solid;
  border-bottom: 2px solid;
  font-size:17px;
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


<!-- #f9957f, #abcfd1, #d4e6c4, #ffcfcb, #f4c464, #abbeec, #f7d7c2, #8cc1d3
진한코랄 조금진한파스텔청록  파스텔연두 파스텔돼지핑크 찐한노랑 어두운하늘 살색 청록인데블루끼 가득 -->

<?php
$color_arr = array('#c6dbda', '#ffc5bf', '#ecd5e3', '#e0b588', '#ED8A81', '#e6d5ba', '#99aa8c');
for ($i=1; $i<=$table_num; $i++){
  $table_index = $i;
?>
<table style="border:1px solid; margin-left:12%; background: #f6eee8;" id="timetable">
<tr><th style="border:1px solid;">시간</th>
<th class="day" style="border:1px solid; background:#c6dbda;">월</th>
<th class="day" style="border:1px solid; background:#ffc5bf;">화</th>
<th class="day" style="border:1px solid; background:#ecd5e3;">수</th>
<th class="day" style="border:1px solid; background:#fae39d;">목</th>
<th class="day" style="border:1px solid; background:#99aa8c;">금</th>
</tr>

<tr>
<td class="time" style="border:1px solid; background:#f9957f;">1교시</td>
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
<tr><td class="time" style="border:1px solid; background:#abcfd1;">2교시</td>
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
<tr><td class="time" style="border:1px solid; background:#d4e6c4;">3교시</td>

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
<tr><td class="time" style="border:1px solid; background:#ffcfcb;">4교시</td>

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
<tr><td class="time" style="border:1px solid; background:#f4c464;">5교시</td>

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
<tr><td class="time" style="border:1px solid; background:#abbeec;">6교시</td>

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
<tr><td class="time" style="border:1px solid; background:#8cc1d3;">7교시</td>

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
</p>
<?php }?>


</body>
</html>