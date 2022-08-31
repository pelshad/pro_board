<?php
    include_once "db.php";
    function ins_user(&$param){
        $conn = get_conn();
        $uid = $param["uid"];
        $upw = $param["upw"];
        $nm = $param["nm"];
        $gender = $param["gender"];
        $sql = "INSERT INTO t_user
                (uid, upw, nm, gender)
                VALUES
                ('$uid', '$upw', '$nm', '$gender')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_user(&$param){
        $conn = get_conn();
        $uid = $param["uid"];
        $upw = $param["upw"];
        $sql = "SELECT i_user, uid, nm, upw
                FROM t_user 
                WHERE uid = '$uid'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }