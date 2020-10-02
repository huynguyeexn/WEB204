<?php
include_once("database.php");
function getAllGamePlatforms(){
    $sql = "select * from game_platforms";
    return query($sql);
}
function getPlatformsByGameId($id){
    $sql = "select * from game_platforms where game_id=$id  ORDER BY platform_id";
    return query($sql);
}
function getgame_platformsByTagId($id){
    $sql = "select * from game_platforms where platform_id=$id";
    return queryOne($sql);
}
function addNewGamePlatforms($game_id, $platform_id){
    $sql = "insert into game_platforms(game_id, platform_id) values($game_id, $platform_id)";
    execute($sql);
}
function deleteGamePlatforms($game_id, $platform_id){
    $sql = "delete from game_platforms where game_id=$game_id and platform_id='$platform_id'";
    execute($sql);
}
function deleteAllGamePlatforms($game_id){
    $sql = "delete from game_platforms where game_id='$game_id'";
    execute($sql);
}
?>