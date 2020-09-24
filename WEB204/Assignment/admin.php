<?php
$ctrl = "admin";
if(isset($_GET["ctrl"])){
    $ctrl = $_GET["ctrl"];
}

include_once "controllers/$ctrl.php";
