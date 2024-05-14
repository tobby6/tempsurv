<?
$user_answer=array();

function dbconn(){
  global $user_answer;
$host = "localhost";
$user = "root";
$pw = "";
$db = "survey";

$connect=@mysqli_connect($host, $user,$pw,$db);
mysqli_query($connect, "set names utf8");
mysqli_select_db($connect, $db);
if(!$connect)die("연결에 실패".mysql_error());
return $connect;
}

?>
