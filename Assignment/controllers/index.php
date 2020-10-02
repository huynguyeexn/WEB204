<?php
//include_once "../models/index.php";
$act = "index";
$message = "";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch($act){
    case "index":
        include "views/index.php";
    break;
    
}