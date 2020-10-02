<?php
include_once("database.php");

function getAllTags(){
    $sql = "select * from tags";
    return query($sql);
}
function getTagById($id){
    $sql = "select * from Tags where id=$id";
    return queryOne($sql);
}
function addNewTag($name){
    $sql = "insert into Tags(name) values('$name')";
    return execute($sql);
}
function updateTag($id, $name){
    $sql = "update Tags set name = '$name' where id = '$id'";
    return execute($sql);
}
function deleteTag($id){
    $sql = "delete from Tags where id='$id'";
    return execute($sql);
}
?>