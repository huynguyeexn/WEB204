<?php
include_once("database.php");
function getAllOrders(){
    $sql = "select * from orders";
    return query($sql);
}
function getOrderById($id){
    $sql = "select * from orders where id=$id";
    return queryOne($sql);
}
function addNewOrder($user_id, $status, $created){
    $sql = "insert into orders(user_id, status, created) values($user_id, $status, '$created')";
    return execute($sql);
}
function updateOrder($id, $user_id, $status, $created){
    $sql = "update orders set user_id = '$user_id', status = $status, created = '$created' where id = '$id'";
    return execute($sql);
}
function deleteOrder($id){
    $sql = "delete from orders where id='$id'";
    deleteAllOrderItem($id);
    return execute($sql);
}
function orderAmount($id){
    $sql = "select sum(quantity*price) from order_items where order_id = ".$id.";";
    return query($sql);
}
?>