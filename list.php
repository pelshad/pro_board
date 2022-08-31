<?php
    include_once "db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }

    $list = sel_board_list();
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
            
        </div>
    </div>
</body>
</html>