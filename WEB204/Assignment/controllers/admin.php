<?php
//include_once "../models/index.php";
$act = "index";
$message = "";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch($act){
    case "index":
        include_once "views/admin/admin-header.php";
        include_once "views/admin/index.php";
        include_once "views/admin/admin-footer.php";
    break;
}