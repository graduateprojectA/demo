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
$timeout = $_POST['time_out'];
for($i=0; $i<count($timeout); $i++){
    echo $timeout[$i];
}    

mysqli_close($conn);
?>