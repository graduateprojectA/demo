<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    $mysqli = new mysqli('localhost', 'root', '1234', 'graduate');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    // $query="select * from member where user_email='$email' and user_pw = md5('$password')";
    $query="SELECT * FROM user_info WHERE user_id='$user_id' and password = '$password'";
    $result=mysqli_query($mysqli,$query);
    $row=mysqli_fetch_array($result);
    if(!empty($row['user_id'])){
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['grade'] = $row['grade'];
        $_SESSION['semester'] = $row['semester'];
        $_SESSION['major'] = $row['major'];
        echo("<script>location.href='./Input.php';</script>");
    }else{
        echo"<script>alert('Please check your id and password.');history.back();</script>";
    }
?>