<?php
    include_once "db/db_board.php";

    $i_board = $_GET["i_board"];
    $param=[
        "i_board" => $i_board
    ];

    $item = sel_board($param);
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
<h2></h2>
    <div class="container">    
    <form action="list.php" method="GET">
    <fieldset>
        <div><input type="hidden" name="i_board" value="<?=$item["i_board"]?>"></div>
        <div class="title"><?=$item["title"]?></div>
        <div class="nm"><span>작성자</span><?=$item["nm"]?> </div>
        <div><textarea name="ctnt" readonly><?=$item["ctnt"]?></textarea></div>
        <div><input type="submit" value="게시판 화면으로"></div>
    </fieldset>
    </form>
   
    </div>
</body>
</html>