<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'ekdmsehdrms1',
    'sakila'); 
  ?>
 <!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </head>
  <body class="m-2">
<?php
 $sql = "SELECT * FROM i_users";
 $result = mysqli_query($conn, $sql);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">제목</th>
      <th scope="col">내용</th>
    </tr>
  </thead>
  <tbody>
<?php
 while ($data=mysqli_fetch_array($result)){
?>
    <tr>
      <th scope="row"><?php echo($data['id'])?></th>
      <td><?php echo($data['title'])?></td>
      <td><?php echo($data['text'])?></td>
    </tr>
<?php

 }
?>
  </tbody>
</table>

<a href="make.php" class="btn btn-primary">글쓰기</a> 

</body>
</html>