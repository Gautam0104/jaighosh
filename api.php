<?php 
include "helper/database.php";
include "helper/news_dao.php";
if(isset($_POST["submit"])){
    $username = $_POST["name"];
    $testing_dao = new NewsDao($dbconn);
    $testing = $testing_dao->insert_test($username);
}


?>