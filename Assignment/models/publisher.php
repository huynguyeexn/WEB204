<?php
include_once("database.php");
function getAllPublishers(){
    $sql = "select * from publisher";
    return query($sql);
}
function getPublisherById($id){
    $sql = "select * from publisher where id=$id";
    return queryOne($sql);
}
function addNewPublisher($name){
    $sql = "insert into publisher(name) values('$name')";
    return execute($sql);
}
function updatePublisher($id, $name){
    $sql = "update publisher set name = '$name' where id = '$id'";
    return execute($sql);
}
function deletePublisher($id){
    $sql = "delete from publisher where id='$id'";
    return execute($sql);
}
?>