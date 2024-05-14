<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>설문조사 시작페이지</title>
</head>
<body>
    <h1>설문조사</h1>
    <p>설문조사 번호를 기입 후 시작하세요.</p>
    <form action="survey.php" method="post">
      설문조사 번호 : <input type="text" name="survey_id"><br/>
      <input type="submit" value = "설문조사 시작">
    </form>
</body>
</html>
