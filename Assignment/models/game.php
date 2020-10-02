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
function addNewGame($name,$price,$destination, $releaseDate, $images, $coverImages, $publisher_id){
    echo $sql = "insert into Games(name,price,destination, releaseDate, images, coverImages, publisher_id)
    values('$name','$price','$destination', '$releaseDate', '$images','$coverImages', $publisher_id)";
    return execute($sql);
}
function updateGame($id, $name,$price,$destination, $releaseDate, $images,$coverImages , $publisher_id){
    $sql = "update Games set name = '$name',price = '$price',destination = '$destination', releaseDate = '$releaseDate', images = '$images',coverImages = '$coverImages', publisher_id = '$publisher_id' where id = '$id'";
    return execute($sql);
}
function deleteGame($id){
    $sql = "delete from Games where id='$id'";
    return execute($sql);
}
?>