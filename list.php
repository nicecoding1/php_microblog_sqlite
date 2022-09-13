<?php
session_start();
include "common.php";

if(isset($_SESSION['login_id'])) $login_id = $_SESSION['login_id'];
else $login_id = "";

?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>microBlog</title>
  <style>
    th, td {border: 1px gray solid;}
  </style>
 </head>
 <body>

  <h2>microBlog</h2>
  <ul>
  <?php
  if(___ != "") {?>
  
    <li><a href="write_form.php">글쓰기</a></li>
    <li><a href="signin.php?mode=signout">로그아웃</a></li>
  <?php } else {?>
    <li><a href="signin_form.php">로그인</a></li>
    <li><a href="signup_form.php">회원가입</a></li>
  <?php }?>    
  </ul>

  <table>
    <tr>
        <th>연번</th>
        <th>제목</th>
        <th>날짜</th>
    </tr>
<?php
$sql = "___";
$res = dbquery($sql);
while($row = dbfetch($res)) {
?>
    <tr>
        <td style="text-align:center"><?=$row['no']?></td>
        <td onclick="location.href='view.php?no=<?=$row['no']?>'" style="cursor:pointer;"><?=$row['subject']?></td>
        <td style="text-align:center"><?=$row['insdt']?></td>
    </tr>
<?php
}
?>
  </table>

 </body>
</html>