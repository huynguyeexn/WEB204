<?php
session_start();
include_once "models/user.php";
$act = "index";
$message = "";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch($act){
    case "index":
        $users = getAllUsers();
        include_once "views/admin/admin-header.php";
        include_once "views/admin/user/user.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "add":
        include_once "views/admin/admin-header.php";
        include_once "views/admin/user/add-user.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "insert":
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        
        try{
            addNewUser($username, $password,$fullname, $email, $phone, date("Y-m-d H:i:s"), $birthday);
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        header("location: admin.php?ctrl=".$ctrl."&act=add");
        exit();
    break;

    case "edit":
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $user = getUserById($id);
            include_once "views/admin/admin-header.php";
            include_once "views/admin/user/edit-user.php";
            include_once "views/admin/admin-footer.php";
        }
    break;

    case "update":
        $id = $_GET["id"];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        try{
            updateUser($id, $username, $password,$fullname, $email, $phone, $birthday);
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        header("location: admin.php?ctrl=".$ctrl."&act=edit&id=".$id);
        exit();
        // $message = "Success";
        // include_once "views/admin/admin-header.php";
        // include_once "views/admin/user/user.php";
        // include_once "views/admin/admin-footer.php";
    break;

    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            try{
                deleteUser($id);
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