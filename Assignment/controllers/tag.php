<?php

session_start();
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
        try{
            $name = $_POST["name"];
            addNewTag($name);
            $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        header("location: admin.php?ctrl=".$ctrl."&act=add");
        exit();
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
        try{
            $name = $_POST["name"];
            $id = $_POST["id"];
            updateTag($id, $name);
            $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        header("location: admin.php?ctrl=".$ctrl);
        exit();
    break;

    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            try{
                deleteTag($id);
            }
            catch(PDOException $Exception) {
                echo 'Failed: ' . $Exception->getMessage();
                exit;
            }
            $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
            header("location: admin.php?ctrl=".$ctrl);
            exit();
        }
        header("location: admin.php?ctrl=".$ctrl);
        exit();
    break;
}