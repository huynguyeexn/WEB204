<?php
include_once("databse.php");
function getAllPlatforms(){
    $sql = "select * from platforms";
    query($sql);
}
function getPlatformById($id){
    $sql = "select * from platforms where id=$id";
    queryOne($sql);
}
function addNewPlatform($name){
    $sql = "insert into platforms(name) values('$name')";
    execute($sql);
}
function updatePlatform($id, $name){
    $sql = "update platforms set name = '$name' where id = '$id'";
    execute($sql);
}
function deletePlatform($id){
    $sql = "delete from platforms where id='$id'";
    execute($sql);
}
?>