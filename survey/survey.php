<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>설문조사</title>
</head>

<body>
    <?php
    include("./dbconn.php");
    $connect=dbconn();

    // 설문조사 질문 배열
    $questions = array(
        "Question1",
        "Question2",
        "Question3",
        "Question4",
        "Question5"
    );

    $answers= array(
      array("Q1-A1","Q1-A2","Q1-A3","Q1-A4","Q1-A5"),
      array("Q2-A1","Q2-A2","Q2-A3"),
      array(""),
      array("Q4-A1","Q4-A2","Q4-A3","Q4-A4","Q4-A5"),
      array("Q5-A1","Q5-A2","Q5-A3","Q5-A4","Q5-A5")
    );

    // 현재 질문 인덱스 설정
    $current_question = isset($_POST['question']) ? $_POST['question'] : 0;

    // 현재 질문 출력
    echo "<h2>{$questions[$current_question]}</h2>";

    // 다음 페이지로 이동하는 폼 생성
    echo "<form action='survey.php' method='post'>";
    echo "<input type='hidden' name='question' value='".($current_question + 1)."'>";
    echo "<input type='hidden' name='survey_id' value='".($_POST['survey_id'])."'>";
    $current_surv=$_POST['survey_id'];


    //답변 선택
    if(!array_filter($answers[$current_question])){  //주관식
        echo "<textarea name='answer' rows='3' cols='50'></textarea><br>";
    }
    else{     //객관식
      foreach ($answers[$current_question] as $index => $answer) {
        echo "<input type='radio' id='{$index}' name='answer' value='{$answer}'>";
        echo "<label for='{$index}'>{$answer}</label><br>";
      }
    }

    //사용자 응답 저장
    if(isset($_POST['answer'])) {
      $user_answer = $_POST['answer'];
      $query = "INSERT INTO response (survnum, qnum, answer) VALUES ('$current_surv','$current_question', '$user_answer')";

      // 쿼리 실행
      mysqli_query($connect, $query);
    }

    if($current_question < count($questions) - 1) {
        echo "<button type='submit'>다음 질문</button>";
    }
    else {
        echo "<button formaction='finish.php' type='submit'>설문조사 완료</button>";
    }
        echo "</form>";
    ?>

</body>
</html>
