<?php
    include_once "db/db_board.php";

    session_start();

    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
        $i_user = $login_user["i_user"];
    }
    $i_board = $_GET["i_board"];
    $param=[
        "i_board" => $i_board
    ];

    $item = sel_board($param);

    if($_GET["i_board"]){
        view_plus($param);
    }
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
            <div><span><?=$nm?></span>님 환영합니다.</div>
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
            <link rel="stylesheet" href="write.css">
            <div class="container">    
                <form>
                <fieldset class="detail">
                <div><input type="hidden" name="i_board" value="<?=$item["i_board"]?>"></div>
                <div class="title"><?=$item["title"]?></div>
                    <div class="user">
                    <div class="nm"><span>작성자</span><?=$item["nm"]?></div>
                    <div class="created"><span></span><?=$item["created_at"]?></div>
                    </div>
                <div><textarea name="ctnt" readonly><?=$item["ctnt"]?></textarea></div>
                <?php if($i_user === $item["i_user"] || $i_user === '2' ){?>
                <div>
                    <a href="mod.php?i_board=<?=$i_board?>">글 수정</a>
                    <a href="del.php?i_board=<?=$i_board?>">글 삭제</a>
                    <button onclick="isDel();">글 삭제 안됨</button>
                <?php } ?>
                <script>
                function isDel() {            
                    console.log('isDel 실행 됨!!');            
                    if(confirm('삭제하시겠습니까?')) {
                    location.href = "del.php?i_board=<?=$i_board?>";
                    } 
                }
                </script>
                    <a href="list_frboard.php">게시판으로</a>
                </div>
                </fieldset>
                </form>
            
        </div>
    </div>
    </div>
</body>
</html>