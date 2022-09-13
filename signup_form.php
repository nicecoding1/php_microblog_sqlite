<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>microBlog</title>
 </head>
 <body>

  <h2>microBlog 회원가입</h2>
  <form name="signup-form" method="post" action="signup.php">
  <input type="hidden" name="mode" value="signup">
  아이디 <input type="text" name="id" size="10" required><br>
  비밀번호 <input type="password" name="pw" size="10" required><br>
  성명 <input type="text" name="name" size="10" required><br><br>
  <input type="submit" value="가입하기">
  </form>

 </body>
</html>