<?php session_start();
$id = $_SESSION['user_id'];
$name = $_SESSION['user_name'];
$email = $_SESSION['user_email']; 
$password = $_SESSION['user_pw'];
$conn = mysqli_connect('localhost', 'root', '1234', 'graduate');
?>
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
  background-color:white;
  text-align:left;
  padding-left:0px;
}
input::placeholder {
  color: #99aa8c;
}
</style>

<body>
  <div class="default_box">
        <form method="POST" action="Join_back.php">
          <input type="text" class="txt_box" id="ex4-id-input" name="user_id" placeholder="학번 7자리"/>
          <br/>
          <input type="password" class="txt_box" id="ex4-pw-input" name="user_pw" placeholder="비밀번호"/>
          <br/>
          <input type="text" class="txt_box" id="mybtn" name="user_major" placeholder="전공"/>
          <br/>
          <input type="submit" value="회원가입" class="default_btn">
          <br><br>
          <a href = "Login.php" style = "font-size: 18px; color: #777777; 
          text-decoration: none;">이미 계정이 있으신가요? <br>
          지금 <p style="display:inline; color:#99aa8c; font-weight:bold;">로그인</p>하세요!</a>  
      </form>

</div>
</body>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

<script type="text/javascript">
// 자동검색
$(function() {
  var allMajors = [];
  <?php 
    $major_ = "SELECT major_name FROM department;";
    $major = mysqli_query($conn, $major_);
    while($result = mysqli_fetch_assoc($major)){?>
      allMajors.push('<?php echo $result['major_name'] ?>');
  <?php }  ?>

$("#mybtn").autocomplete({
    source: allMajors,
    select: function(event, ui) {
        console.log(ui.item);
    },
    focus: function(event, ui) {
        return false;
        //event.preventDefault();
    } 
  });
});


(function cleanText($) {
  var $pw = $('#ex4-id-input, #ex4-pw-input,ex4-major-input')
  $pw.on('click focus', function() {
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

</html> 