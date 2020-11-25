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
    $query="SELECT * FROM user WHERE user_id='$user_id' and user_pw = '$user_pw'";
    $result=mysqli_query($mysqli,$query);
    $row=mysqli_fetch_array($result);
    if(!empty($row['user_id'])){
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_pw'] = $row['user_pw'];
        $_SESSION['user_major'] = $row['user_major'];
        echo("<script>location.href='./Input.php';</script>");
    }else{
        // echo"<script>alert('Please check your id and password.');history.back();</script>";
    }
?>