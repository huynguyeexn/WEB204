<?php
include_once("database.php");
function getAllPublishers(){
    $sql = "select * from publisher";
    query($sql);
}
function getPublisherById($id){
    $sql = "select * from publisher where id=$id";
    queryOne($sql);
}
function addNewPublisher($name){
    $sql = "insert into publisher(name) values('$name')";
    execute($sql);
}
function updatePublisher($id, $name){
    $sql = "update publisher set name = '$name' where id = '$id'";
    execute($sql);
}
function deletePublisher($id){
    $sql = "delete from publisher where id='$id'";
    execute($sql);
}
?>