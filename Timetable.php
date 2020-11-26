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
</table>
</body>
</html>
