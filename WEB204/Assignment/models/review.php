<?php
include_once("database.php");
function getAllReviews(){
    $sql = "select * from review";
    query($sql);
}
function getReviewByUserId($user_id){
    $sql = "select * from review where user_id=$user_id";
    queryOne($sql);
}
function getReviewByGameId($game_id){
    $sql = "select * from review where game_id=$game_id";
    queryOne($sql);
}
function addNewReview($user_id, $game_id, $content, $rate){
    $sql = "insert into review(user_id, game_id, content, rate) values('$user_id', '$game_id', '$content', '$rate')";
    execute($sql);
}
function updateReview($user_id, $game_id, $content, $rate){
    $sql = "update review set user_id = $user_id, game_id = $game_id, content = $content, rate = $rate where user_id = $user_id and game_id = $game_id";
    execute($sql);
}
function deleteReview($user_id, $game_id){
    $sql = "delete from review where user_id = $user_id and game_id = $game_id";
    execute($sql);
}
function deleteAllReviewOfUser($user_id){
    $sql = "delete from review where user_id = $user_id";
    execute($sql);
}
function deleteAllReviewOfGame($game_id){
    $sql = "delete from review where game_id = $game_id";
    execute($sql);
}
?>