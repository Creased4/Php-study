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

<div class="text-center">
    <h2>이야기를 적어주세요.</h1>
    <h3> 제목,내용, </h3>
</div>

    
    <form action="create.php" method="POST">
      <p><input type="text" name="title" placeholder="제목(ex)제목이다" class="form-control"></p>
      <p><input type="text" name="text" placeholder="내용(ex)이러하다" class="form-control"></p>
      <p><input type="submit" class="btn btn-primary"></p>
    </form>
  </body>
</html>