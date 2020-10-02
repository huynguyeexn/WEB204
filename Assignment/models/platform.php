<?php
include_once("database.php");

function getAllPlatforms(){
    $sql = "select * from platforms order by name";
    return query($sql);
}
function getPlatformById($id){
    $sql = "select * from platforms where id=$id";
    return queryOne($sql);
}
function addNewPlatform($name){
    $sql = "insert into platforms(name) values('$name')";
    return execute($sql);
}
function updatePlatform($id, $name){
    $sql = "update platforms set name = '$name' where id = '$id'";
    return execute($sql);
}
function deletePlatform($id){
    $sql = "delete from platforms where id='$id'";
    return execute($sql);
}
?>