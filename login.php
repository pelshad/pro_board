<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="join.css">
</head>
<body>
<div class="main">
        <div class="form">
        <form action="login_proc.php" method="post">
        <h2>로그인</h2>     
        <br>   
        <fieldset>
            <div><input type="text" placeholder="아이디" name="uid"></div>
            <div><input type="PASSWORD" placeholder="비밀번호" name="upw"></div>
            <input class="sub" type="submit" value="로그인">
        </fieldset>
        <div class="join">아직 회원가입을 하지 않으셨다면<a href="join.php">회원가입</a></div>
</body>
</html>