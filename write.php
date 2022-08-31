<?php
    session_start();
    if(isset($_SESSION["login_user"])){
    } else {
      header("location:list.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="write.css">
</head>
<body>
<h2 class="write">글쓰기</h2>
    <div class="container">    
    <form action="write_proc.php" method="post">
    <fieldset>
        <div><input type="text" placeholder="제목을 입력해주세요" name="title"></div>
        <div><textarea name="ctnt" placeholder="내용을 입력해주세요"></textarea></div>
        <div>
        <input class="sub" type="submit" value="글작성">
        <input class="sub" type="reset" value="리셋">
        </div>
    </fieldset> 
    </form>
    </div>
</body>
</html>