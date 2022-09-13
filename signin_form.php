<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>microBlog</title>
 </head>
 <body>

  <h2>microBlog 로그인</h2>
  <form name="signin-form" method="post" action="signin.php">
  <input type="hidden" name="mode" value="signin">
  아이디 <input type="text" name="id" size="10" required><br>
  비밀번호 <input type="password" name="pw" size="10" required><br><br>
  <input type="submit" value="로그인하기">
  </form>

 </body>
</html>