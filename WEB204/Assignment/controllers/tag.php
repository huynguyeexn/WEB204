<?php
include_once "models/tag.php";
$act = "index";
$message = "";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch($act){
    case "index":
        $tags = getAllTags();
        include_once "views/admin/admin-header.php";
        include_once "views/admin/tag/tag.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "add":
        include_once "views/admin/admin-header.php";
        include_once "views/admin/tag/add-tag.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "insert":
        $name = $_POST["tagName"];
        addNewTag($name);
        $message = "Success";
        include_once "views/admin/admin-header.php";
        include_once "views/admin/tag/tag.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "edit":
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $tag = getTagById($id);
            include_once "views/admin/admin-header.php";
            include_once "views/admin/tag/edit-tag.php";
            include_once "views/admin/admin-footer.php";
        }
    break;

    case "update":
        $name = $_POST["tagName"];
        $id = $_POST["tagID"];
        updateTag($id, $name);
        $message = "Success";
        include_once "views/admin/admin-header.php";
        include_once "views/admin/tag/tag.php";
        include_once "views/admin/admin-footer.php";
    break;
}