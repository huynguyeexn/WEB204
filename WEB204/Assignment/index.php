<?php
include_once "controllers/index.php";
$ctrl = "index";
if(isset($_GET["ctrl"])){
    $ctrl = $_GET["ctrl"];
}

include_once "controllers/$ctrl.php";
