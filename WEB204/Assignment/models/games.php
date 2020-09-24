<?php
include_once("database.php");
function getAllGames(){
    $sql = "select * from Games";
    return query($sql);
}
function getGameById($id){
    $sql = "select * from Games where id=$id";
    return queryOne($sql);
}
function addNewGame($name,$price,$destination, $releaseDate, $images, $tag_id, $platform_id, $publisher_id){
    $sql = "insert into Games(name,price,destination, releaseDate, images, tag_id, platform_id, publisher_id)
    values('$name','$price','$destination', '$releaseDate', '$images', '$tag_id', '$platform_id', '$publisher_id')";
    execute($sql);
}
function updateGame($id, $name,$price,$destination, $releaseDate, $images, $tag_id, $platform_id, $publisher_id){
    $sql = "update Games set name = '$name',price = '$price',destination = '$destination', releaseDate = '$releaseDate', images = '$images', tag_id = '$tag_id', platform_id = '$platform_id', publisher_id = '$publisher_id' where id = '$id'";
    execute($sql);
}
function deleteGame($id){
    $sql = "delete from Games where id='$id'";
    execute($sql);
}
?>