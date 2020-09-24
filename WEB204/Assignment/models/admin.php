<?php
include_once("database.php");
function getAllAdmin(){
    $sql = "select * from admin";
    query($sql);
}
function getAdminById($id){
    $sql = "select * from admin where id=$id";
    queryOne($sql);
}
function addNewAdmin($username, $password, $created, $level){
    $sql = "insert into admin(username, password, created, level) values('$username', '$password', '$created', $level)";
    execute($sql);
}
function updateAdmin($id, $username, $password, $created, $level){
    $sql = "update admin set username = '$username', password = '$password', created = '$created', level = $level where id = '$id'";
    execute($sql);
}
function deleteAdmin($id){
    $sql = "delete from admin where id='$id'";
    execute($sql);
}
?>