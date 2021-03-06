<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  /* The Modal (background) */
  .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
    
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 50%; /* Could be more or less, depending on screen size */                          
        }
        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

</style>
</head>
<body>

<div class="default_box">

<!-- Trigger/Open The Modal -->
<input type="text" class="txt_box" id="ex4-id-input" name="id" placeholder="학번 7자리"/>
          <br/>
          <input type="password" class="txt_box" id="ex4-pw-input" name="password" placeholder="비밀번호"/>
          <br/>
          <button id="myBtn" class = "txt_box">전공 선택</button>
 
 <!-- The Modal -->
 <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>                                                               
              <p>전공을 검색하세요</p>
              <input id = "majors" placeholder = "컴퓨터공학전공">
              <button>선택</button>
            </div>
          </div>
          <br/>
          <input type="submit" value="회원가입" class="default_btn">
          <br><br>
          <a href = "Login.php" style = "font-size: 18px; color: #777777; 
          text-decoration: none;">이미 계정이 있으신가요? <br>
          지금 <p style="display:inline; color:#99aa8c; font-weight:bold;">로그인</p>하세요!</a>  
          </div>

          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">


// Get the modal
var modal = document.getElementById('myModal');
 
 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];                                          

 // When the user clicks on the button, open the modal 
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }


 $(function() {
  var allMajors = [];
  <?php 
    $major_ = "SELECT major_name FROM majors";
    $major = mysqli_query($conn, $major_);
    while($result = mysqli_fetch_assoc($major)){?>
      allMajors.push('<?php echo $result['major_name'] ?>');
  <?php }  ?>

  $("#majors").autocomplete({
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




</script>

</body>
</html> 










