<?php
___;
include "common.php";
$no = $_GET['no'];

if(isset($_SESSION['login_id'])) $login_id = $_SESSION['login_id'];
else $login_id = "";

if(___ == "") {
    alert_redir("로그인 정보가 없습니다.", "");
    exit;
}

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
  <form name="modify-form" method="post" action="modify.php">
  <input type="hidden" name="mode" value="modify">
  <input type="hidden" name="no" value="<?=$no?>">
  <p>제목: <input type="text" name="subject" value="<?=$row['subject']?>" required></p>
  <p>내용: <textarea name="content" rows="10" cols="50" required><?=stripslashes($row['content'])?></textarea> </p>
  <input type="submit" value="저장하기">
  </form>

 </body>
</html>