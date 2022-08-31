<?php
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "0614");
        define("DB_NAME", "pro_board");
    function get_conn(){
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }