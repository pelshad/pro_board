<?php
    include_once "db/db_user.php";
    session_start();
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $param = [
        "uid" => $uid,
        "upw" => $upw,
    ];

    $result = sel_user($param);

    if(empty($result)){
        echo '<script>alert("존재하지 않는 ID입니다.");</script>';
        die;        
    }
    if($upw === $result["upw"]){
        $_SESSION["login_user"] = $result;
        header("location:list.php");
    }