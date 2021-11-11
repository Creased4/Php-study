<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'ekdmsehdrms1',
  'sakila');
  

  $filtered = array(
    'title'=>mysqli_real_escape_string($conn, $_POST['title']),
    'text'=>mysqli_real_escape_string($conn, $_POST['text']),
  );

$sql = "
  INSERT INTO i_users
    (title, text)
    VALUES(
      '{$filtered['title']}',
      '{$filtered['text']}'
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  echo ((mysqli_error($conn)));
} else {
  echo '성공했습니다. <a href="list.php">리스트로가기</a>';
}
?>