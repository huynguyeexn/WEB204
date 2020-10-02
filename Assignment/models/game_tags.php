<?php
include_once("database.php");
function getAllGameTags(){
    $sql = "select * from game_tags";
    return query($sql);
}
function getTagsByGameId($id){
    $sql = "select * from game_tags where game_id=$id  ORDER BY tag_id";
    return query($sql);
}
function getgame_tagsByTagId($id){
    $sql = "select * from game_tags where tag_id=$id";
    return queryOne($sql);
}
function addNewGameTags($game_id, $tag_id){
    $sql = "insert into game_tags(game_id, tag_id) values($game_id, $tag_id)";
    execute($sql);
}
// function updateGameTags($game_id, $tag_id){
//     $sql = "update game_tags set name = '$name',price = '$price',destination = '$destination', releaseDate = '$releaseDate', images = '$images', tag_id = '$tag_id', platform_id = '$platform_id', publisher_id = '$publisher_id' where id = '$id'";
//     execute($sql);
// }
function deleteGameTags($game_id, $tag_id){
    $sql = "delete from game_tags where game_id=$game_id and tag_id='$tag_id'";
    execute($sql);
}
function deleteAllGameTags($game_id){
    $sql = "delete from game_tags where game_id='$game_id'";
    execute($sql);
}
?>