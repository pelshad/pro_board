<?php
    include_once "db/db_board.php";
    session_start();
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];
    $param = [
        "title" => $title,
        "ctnt" => $ctnt,
        "i_user" => $i_user
    ];

    ins_board($param);
    header("location:list_frboard.php");