<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    $mysqli = new mysqli('localhost', 'root', '1234', 'graduate');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    $id = $_POST['id'];
    $password = $_POST['password'];
    $major = $_POST['major'];

    if (isset($id) && isset($password) && isset($major)){
        $query="INSERT into user (user_id, user_pw, user_major) values ('$id','$password','$major');";
        $result=mysqli_query($mysqli, $query);

        // if(!empty($re)){
	    //     echo ("<script>alert(\"이미 가입된 회원입니다\");history.back()</script>");
        // }else{
        //     $query="INSERT into user (user_id, user_pw, user_major) values ('$id','$password','$major');";
	    //     $result=mysqli_query($mysqli, $query);
	    //     if($result){
		//         echo("<script>location.href='Login.php'; </script>");
    	//     }else{
		//         echo"<script>alert('오류가 발생했습니다');history.back();</script>";
	    //     }
        // }
        echo("<script>location.href='Login.php'; </script>");
}
    else{
        echo"<script>alert('필수 항목이 입력되지 않았습니다');history.back();</script>";
    }
?>