<?php
//sql 로그인
$conn = mysqli_connect(
  'localhost',
  'root',
  'ekdmsehdrms1',
  'sakila');
  

  $filtered = array(
    'title'=>mysqli_real_escape_string($conn, $_POST['title']),
    'text'=>mysqli_real_escape_string($conn, $_POST['text']),
  );
//sql에 입력된 값 널기
$sql = "
  INSERT INTO i_users
    (title, text)
    VALUES(
      '{$filtered['title']}',
      '{$filtered['text']}'
    )
";
//커넥트 성공과실패 밑 리스트 페이지 이동
$result = mysqli_query($conn, $sql);
if($result === false){
  echo 'ERROR!';
  echo ((mysqli_error($conn)));
} else {
  echo '성공했습니다. <a href="list.php">리스트로가기</a>';
}
?>