<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    $mysqli = new mysqli('localhost', 'root', '1234', 'graduate');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_major = $_POST['user_major'];
    if(isset($user_id) && isset($user_pw) && isset($user_major)){
        $query="select user_id from user where user_id='$user_id'";
        $result=mysqli_query($mysqli, $query);
        $re = mysqli_fetch_array($result);
        if(!empty($re)){
	        echo ("<script>alert(\"이미 등록되어 있습니다!\");history.back()</script>");
        }else{
            $query="insert into graduate.user (user_id, user_pw, user_major, user_credit, user_grade, time_out) values ('$user_id','$user_pw','$user_major','','','');";
	        $result=mysqli_query($mysqli, $query);
	        if($result){
		        echo("<script>location.href='Login.php'; </script>");
    	    }else{
		        echo"<script>alert('에러 발생');history.back();</script>";
	        }
        }
    }else{
        echo"<script>alert('필수 항목이 입력되지 않았습니다!');history.back();</script>";
    }
?>