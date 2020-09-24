<?php

session_start();
include_once "models/user.php";
include_once "models/order_items.php";
include_once "models/games.php";
include_once "models/order.php";
$act = "index";
$message = "";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch($act){
    case "index":
        $orders = getAllOrders();
        include_once "views/admin/admin-header.php";
        include_once "views/admin/order/order.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "add":
            $users = getAllUsers();
            $items = getAllOrderItems();
            $games = getAllGames();
            
            include_once "views/admin/admin-header.php";
            include_once "views/admin/order/add-order.php";
            include_once "views/admin/admin-footer.php";
    break;

    case "insert":
        $user_id = $_POST["user_id"];
        $status = $_POST["status"];
        $created = str_replace('T', ' ', $_POST["created"]);
        $game_id =  explode(',',str_replace(']','',str_replace('[','',$_POST["game_id"])));
        $game_quantity = explode(',',str_replace(']','',str_replace('[','',$_POST["game_quantity"])));
        try{
            $lastID = addNewOrder($user_id, $status, $created);
            
            for($i = 0; $i < count($game_id); $i++){
                addNewOrderItem( $lastID, $game_id[$i], $game_quantity[$i]);
            }
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        header("location: admin.php?ctrl=order&act=add");
        exit();
    break;

    case "edit":
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $order = getOrderById($id);
            $users = getAllUsers();
            $items = getOrderItemById($order['id']);
            $games = getAllGames();
            
            include_once "views/admin/admin-header.php";
            include_once "views/admin/order/edit-order.php";
            include_once "views/admin/admin-footer.php";
        }
    break;

    case "update":
        if(isset($_GET['id']))
        {
            $order_id = $_GET["id"];
            $user_id = $_POST["user_id"];
            $status = $_POST["status"];
            $created = str_replace('T', ' ', $_POST["created"]);
            $game_id =  explode(',',str_replace(']','',str_replace('[','',$_POST["game_id"])));
            $game_quantity = explode(',',str_replace(']','',str_replace('[','',$_POST["game_quantity"])));
            try{
                deleteAllOrderItem($order_id);
                updateOrder($order_id, $user_id, $status, $created);
                for($i = 0; $i < count($game_id); $i++){
                    addNewOrderItem($order_id, $game_id[$i], $game_quantity[$i]);
                }
            }
            catch(PDOException $Exception) {
                echo 'Failed: ' . $Exception->getMessage();
                exit;
            }
        }  
    $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
    header("location: admin.php?ctrl=order&act=edit&id=$order_id");
    exit();
    break;

    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            try{
                deleteOrder($id);
            }
            catch(PDOException $Exception) {
                echo 'Failed: ' . $Exception->getMessage();
                exit;
            }
            $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
            header("location: admin.php?ctrl=order");
            exit();
        }
        header("location: admin.php?ctrl=order");
        exit();
    break;
}
?>