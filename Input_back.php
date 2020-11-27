<?php session_start();
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email']; 
$mysql_port=3306;
$conn = mysqli_connect('localhost', 'root', '1234', 'graduate');
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
if(mysqli_connect_errno()){ echo "연결실패! ".mysqli_connect_error();}

// String[] time_out = request.getParameterValues("time_out");
$user_credit = $_POST['user_credit'];
$user_grade = $_POST['user_grade'];
$time = $_POST['time_out'];
$time_out = "";
for($i=0; $i<count($time); $i++){
    $time_out = "$time_out"."$time[$i]";
}
$time_out = (int)$time_out; 

$credit_query = "UPDATE user SET user_credit = $user_credit WHERE user_id = $user_id;";
mysqli_query($conn, $credit_query);
$grade_query = "UPDATE user SET user_grade = $user_grade WHERE user_id = $user_id;";
mysqli_query($conn, $grade_query);
$timeout_query = "UPDATE user SET time_out = $time_out WHERE user_id = $user_id;";
mysqli_query($conn, $timeout_query);
?>
<script>
    alert("입력완료");
    location.href='Timetable.php'; 
</script>
<?php
mysqli_close($conn);
?>

