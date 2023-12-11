<?php

    $dbhost = "localhost";
    $dbname = "labexam";
    $dbuser = "root";
    $dbpass = "";

    function connect(){
        global $dbhost;
        global $dbname;
        global $dbpass;
        global $dbuser;

        return  $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }
?>