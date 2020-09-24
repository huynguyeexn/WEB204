<?php
include_once("database.php");
function getAllOrderItems(){
    $sql = "select * from order_items";
    return query($sql);
}
function getOrderItemById($order_id){
    $sql = "select * from order_items where order_id=$order_id";
    return query($sql);
}
function addNewOrderItem($order_id, $game_id, $quantity){
    $sql = "insert into order_items(order_id, game_id, quantity, price) SELECT $order_id, $game_id, $quantity, price FROM games WHERE games.id = $game_id;";
    return execute($sql);
}
function updateOrderItem($id, $order_id, $game_id, $quantity){
    $sql = "update order_items set order_id =  $order_id, game_id = $game_id, quantity = $quantity where order_id = '$id'";
    return execute($sql);
}
function deleteOrderItem($order_id, $game_id){
    $sql = "delete from order_items where id=$order_id and game_id = $game_id";
    return execute($sql);
}
function deleteAllOrderItem($order_id){
    $sql = "delete from order_items where order_id='$order_id'";
    return execute($sql);
}
?>