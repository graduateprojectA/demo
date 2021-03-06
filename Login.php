<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');
.default_box{
  text-align:center;
  width:30%;
  height:100%;
  margin-top:13%;
  margin-left:35%;
  font-family: 'Do Hyeon', sans-serif;
  background-color: #FFFFFF;
  border: solid 3px;
  border-color: #99aa8c;
  border-radius: 5px;
}
.default_btn{
  background:#99aa8c; 
  color:white;
  width:20vw;
  height:6vh;
  border:0;
  font-size: 15px;
  border: solid 1px;
  border-color: #99aa8c;
}
 .txt_box{             /* input : id,pw 입력자리 */
  color:#99aa8c;
  width:20vw;
  height:6vh;
  margin: 0.5%;
  border-top: 0px;
  border-left: 0px;
  border-right: 0px;
  border-bottom: solid 1px;
  border-color: #99aa8c;
}
input::placeholder {
  color: #99aa8c;
}
body{
    background-color: #faefe8;
}
</style>
</head>

<body>
  <img src="images/curvelio.png" height="100px" style = "position:absolute; top:3%;left:14%;">
  <div class="default_box">
    <form method="POST" action="Login_back.php">
        <br/><br/>
        <input type="text" id="ex4-id-input" class="txt_box" name="user_id" placeholder="학번 7자리"/>
        <br/>
        <input type="password" id="ex4-pw-input" class="txt_box" name="user_pw" placeholder="비밀번호"/>
        <br/><br/><br/>
        <input type="submit" class="default_btn" value="로그인">
        <br><br><br/>
        <a href = "Join.php" style = "font-size: 18px; color: #777777; 
        text-decoration: none;">아직 커벨리오의 회원이 아니신가요? <br/>
        <p style="display:inline; color:#99aa8c; font-weight:bold;">회원가입</p>하시고, 시간표를 생성해보세요!</a>
        <br/><br/>
    </form>
  </div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
(function cleanText($) {
  var $pw = $('#ex4-id-input, #ex4-pw-input')
  $pw.on('click focus', function(){
    $(this).siblings('label').hide()
  });
  $pw.on('blur', function() {
    $this = $(this)
    if ($.trim($this.val()).length === 0) {
      $this.siblings('label').show()
    }
  });
})(jQuery);
</script>
</body>
</html> 