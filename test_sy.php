<!DOCTYPE html>
<head>
<style>
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
<!-- <form method="POST" action="test_sy.php"> -->
    <button id="myBtn">Open Modal</button>
 <!-- </form> -->

 <!-- The Modal -->
 <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>                                                               
        <p>Some text in the Modal..</p>
        <input type="text" name="test"/>
        <input type="submit" value="제출"/>
      </div>
    </div>
    <script>
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
</script>



<!-- 
<body>
  <div class="default_box">
        <form method="POST" action="Join_back.php">
          <input type="text" class="txt_box" id="ex4-id-input" name="id" placeholder="학번 7자리"/>
          <br>
          <input type="password" class="txt_box" id="ex4-pw-input" name="password" placeholder="비밀번호"/>
          <br>
          <button type="button" id="myBtn" class="txt_box">전공 선택</button>
          <br>
          <input type="submit" value="회원가입" class="default_btn">      
          <br><br>
          <a href = "Login.php" style = "font-size: 18px; color: #777777; 
          text-decoration: none;">이미 계정이 있으신가요? 지금 <p style="display:inline; color:#99aa8c; font-weight:bold;">로그인</p>하세요!</a>  
          </form>
    </div>

          <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>                                                               
              <p>전공을 검색하세요</p>
              <input id="majors" name="major" placeholder="ex) 컴퓨터공학">
              <button>선택</button>
            </div>
          </div>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

$(function() {
  var allMajors = [];
  <?php 
    $major_ = "SELECT major_name FROM department;";
    $major = mysqli_query($conn, $major_);
    while($result = mysqli_fetch_assoc($major)){?>
      allMajors.push('<?php echo $result['major_name'] ?>');
  <?php }  ?>

// 자동검색
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

(function cleanText($) {
  var $pw = $('#ex4-id-input, #ex4-pw-input')
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
</script>
</body>
</html>  -->