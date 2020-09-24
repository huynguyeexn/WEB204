<?php
include_once("database.php");
function getAllCode(){
    $sql = "select * from code";
    query($sql);
}
function getCodeById($id){
    $sql = "select * from code where id=$id";
    queryOne($sql);
}
function addNewCode($game_id, $user_active, $code){
    $sql = "insert into code(game_id, user_active, code) values($game_id, $user_active, '$code')";
    execute($sql);
}
function updateCode($id, $game_id, $user_active, $code){
    $sql = "update code set game_id = $game_id, user_active = $user_active, code = $code where id = '$id'";
    execute($sql);
}
function deleteCode($id){
    $sql = "delete from code where id='$id'";
    execute($sql);
}
?>