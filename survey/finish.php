<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>끝</title>

</head>
<body>
  <?php
      include('./dbconn.php');
      $connect=dbconn();
   ?>

    <div class="container">
        <h1>환영합니다! </h1>

        <button class="button" onclick="location.href='./main.php'">돌아가기</button>
    </div>
</body>
</html>
