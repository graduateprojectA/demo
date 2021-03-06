<!DOCTYPE html>
<html lang="ko">
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<meta charset="UTF-8" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');
body{
    background-image: url("images/background_image_main.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
</head>

<body>
    <img src="images/curvelio.png" height="100px" style = "position:absolute; top:3%;left:14%;">
    <div style = "width: 500px; height:300px; position: absolute; left:53%; top: 55%; margin-top:-150px;text-align:left">
        <p style = "font-size: 3.3em;font-family: 'Roboto', sans-serif; float:left;">Make your</p>
        <p style = "font-size: 3.3em;font-family: 'Roboto', sans-serif; float:left; padding-left: 15px; color: #777777;">timetable.</p>
        <br/>
        <p style = "float:left; font-size: 1.3em; margin-top:-30px; font-weight: bolder; color: #777777; font-family: 'Jeju Gothic', sans-serif;">커벨리오에서 맞춤형 시간표를 만들어보세요.</p>
        <button style = "position:absolute; bottom:0%;left:0%;height:70px;width:50%; background-color: #99aa8c; border:solid 0px; color:#faefe8; font-size: 1.0em; font-weight:bold;  font-family: 'Jeju Gothic', sans-serif;" type = "button" onclick="location.href='Input.php'">
            시간표만들기
        </button>
        <button style = "position:absolute; bottom:0%; right:0%;height:70px;width:50%; background-color: #faefe8; border:solid 1px; border-color: #99aa8c; color:#99aa8c; font-size: 1.0em; font-weight:bold; font-family: 'Jeju Gothic', sans-serif;" type = "button" onclick="location.href='Login.php'">
            로그인
        </button>
    </div>
</body>
</html>