<?php
include_once("database.php");

function getAllUsers(){
    $sql = "select * from users";
    return query($sql);
}
function getUserById($id){
    $sql = "select * from users where id=$id";
    return queryOne($sql);
}
function addNewUser($username, $password,$fullname, $email, $phone, $created, $birthday){
    $sql = "insert into users(username, password,fullname, email, phone, created, birthday) values('$username', '$password', '$fullname', '$email', '$phone', '$created', '$birthday')";
    return execute($sql);
}
function updateUser($id, $username, $password,$fullname, $email, $phone, $birthday){
    $sql = "update users set username = '$username', password = '$password',fullname = '$fullname', email = '$email', phone = '$phone', birthday = '$birthday' where id = $id";
    return execute($sql);
}
function deleteUser($id){
    $sql = "delete from users where id='$id'";
    return execute($sql);
}
?>