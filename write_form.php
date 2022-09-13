<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>microBlog</title>
 </head>
 <body>

  <h2>microBlog</h2>
  <form name="write-form" method="post" action="write.php">
  <input type="hidden" name="mode" value="write">
  <p>제목: <input type="text" name="subject" value="" required></p>
  <p>내용: <textarea name="content" rows="10" cols="50" required></textarea> </p>
  <input type="submit" value="저장하기">
  </form>

 </body>
</html>