<?php
    include_once "db/db_user.php";
    session_start();

    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
        $uid = $login_user["uid"];
        $upw = $login_user["upw"];
    }

    $param=[
        "uid" => $uid,
        "upw" => $upw
    ];    

    $list = sel_user($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" A href="list.css">
</head>
<body>
    <div id="container">
        <div class="header">
        header

        </div>
        <div class="id_box">
            <?php if(isset($_SESSION["login_user"])){ ?>
            <div><?=$nm?>님 환영합니다.</div>
            <a href="list_info.php">내 정보</a>
            <a href="logout.php">로그아웃</a>
            <?php } else { ?>
            <div class="unlogin">"site명"에 오신것을 환영합니다.</div>
            <a href="login.php">로그인</a>
            <a href="join.php">회원가입</a>
            <?php } ?>

        </div>
        <div class="menu">
        <ul>
            <a href="#" class="menu"><li>공지사항</li></a>
            <a href="list_frboard.php" class="menu"><li>자유 게시판</li></a>
            <a href="#" class="menu"><li>사진 게시판</li></a>
            <a href="#" class="menu"><li>한줄 게시판</li></a>
            
        </ul>
        </div>

        <div class="main">
        <link rel="stylesheet" href="join.css"> 
        <div class="form2">
        <form action>
        <h2 class="info">회원정보</h2>
        <br>   
        <fieldset>
            <div><input type="text" placeholder="아이디" name="uid" value="<?=$list["uid"]?>" readonly></div>
            <div><input type="PASSWORD" placeholder="비밀번호" name="upw"></div>
            <div><input type="PASSWORD" placeholder="비밀번호 확인" name="upw_c"></div>
        </fieldset>
        <br>
        <fieldset>
            <div><input type="text" name="nm" placeholder="이름" value="<?=$list["nm"]?>" readonly></div>
            <div><input type="text" placeholder="휴대전화" value="null" readonly></div>
            <div><input type="text" placeholder="이메일" value="null" readonly></div>
            <div><input type="text" placeholder="주소" value="null" readonly></div>
            <div>
            <label>남<input class="radio" type="radio" name="gender" value="0"></label>
            <label>여<input class="radio" type="radio" name="gender" value="1"></label>
            </div>         
        </fieldset>
            <div>
                <input class="sub" type="submit" value="계정수정">
                <input class="sub" type="submit" value="계정삭제">
            </div>
        </form>
        </div>
            
        </div>
    </div>
</body>
</html>