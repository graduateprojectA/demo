<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<div id="menu1" style=" position:absolute; left:10; top:30px; visibility : hidden">
<div onmouseout="javascript:hideLayer('menu1');" onmouseover="javascript:showLayer('menu1');">
aaa
</div>
</div>


<a href onmouseout="javascript:hideLayer('menu1');" onmouseover="javascript:showLayer('menu1');">메뉴1</a>



<script type="text/javascript">
function showLayer(layerID) {
document.all[layerID].style.visibility = "visible";
}
function hideLayer(layerID) {
document.all[layerID].style.visibility = "hidden";
}
</script>

</body>
</html> 




<!-- session변수로 버튼 제어 -->
<!-- 
<?php
        session_start();
        if(isset($_SESSION['user_id'])){
            $link = 'Input.php';
        }else{
            $link = 'Login.php';
        }
        ?>
        <button type = "button" onclick="location.href='<?php echo $link ?>'">
        <?php
        if(isset($_SESSION['user_id'])){
            $next = '시간표만들기';
        }else{
            $next = '로그인하기';
        }?>
        <p><?php echo $next; ?></p> -->


