<?php
___;
include "common.php";
$no = $_GET['no'];

if(isset($_SESSION['login_id'])) $login_id = $_SESSION['login_id'];
else $login_id = "";

$sql = "___";
$row = dbqueryfetch($sql);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>microBlog</title>
 </head>
 <body>

  <h2>microBlog</h2>
  
  <ul>
  <?php
  if(___ != "") {?>    
    <li><a href="modify_form.php?no=<?=$no?>">글수정</a></li>
    <?php }?>    
    <li><a href="list.php">글목록</a></li>
  </ul>
  

  <p>제목: <?=$row['subject']?></p>
  <p>내용: <?=nl2br($row['content'])?></p>

 </body>
</html>