<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');
.default_box{
  text-align:center;
  width:100%;
  height:100%;
  margin-top:18%;
  font-family: 'Do Hyeon', sans-serif;
}
.default_btn{
  background:#99aa8c; 
  color:white;
  width:20vw;
  height:5vh;
  border:0;
  font-size: 15px;
}
 .txt_box{             /* input : id,pw 입력자리 */
  color:#99aa8c;
  width:20vw;
  height:5vh;
  margin: 0.5%;
  border:0;
}
input::placeholder {
  color: #99aa8c;
}
</style>
</head>

<body>
  <div class="default_box">
    <form method="POST" action="Login_back.php">
        <input type="text" id="ex4-id-input" class="txt_box" name="email" placeholder="아이디"/>
        <br/>
        <input type="password" id="ex4-pw-input" class="txt_box" name="password" placeholder="비밀번호"/>
        <br/>
        <input type="submit" class="default_btn" value="로그인">
        <br><br>
        <a href = "Join.php" style = "font-size: 18px; color: #777777; 
        text-decoration: none;">아직 커벨리오의 회원이 아니신가요? <br/>
        <p style="display:inline; color:#99aa8c; font-weight:bold;">회원가입</p>하시고, 시간표를 생성해보세요!</a>
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