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
        <form action="join_proc.php" method="post">
        <h2>회원가입</h2>     
        <br>   
        <fieldset>
            <div><input type="text" placeholder="아이디" name="uid"></div>
            <div><input type="PASSWORD" placeholder="비밀번호" name="upw"></div>
            <div><input type="PASSWORD" placeholder="비밀번호 확인" name="upw_c"></div>
        </fieldset>
        <br>
        <fieldset>
            <div><input type="text" name="nm" placeholder="이름"></div>
            <div><input type="text" placeholder="휴대전화"></div>
            <div><input type="text" placeholder="이메일"></div>
            <div><input type="text" placeholder="주소"></div>
            <div>
            <label>남<input class="radio" type="radio" name="gender" value="0"></label>
            <label>여<input class="radio" type="radio" name="gender" value="1"></label>
            </div>         
        </fieldset>
            <div>
                <input class="sub" type="submit" value="가입하기">
            </div>
        </form>
        </div>
    </div>
</body>
</html>