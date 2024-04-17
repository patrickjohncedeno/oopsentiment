<?php
include 'dbConnection.php';

$db = new Database("localhost", "root", "", "db_sentimentreview");

        if(isset($_POST["submit"])){
            $adik = $_POST["adik"];

            echo $adik;
        }
    ?>