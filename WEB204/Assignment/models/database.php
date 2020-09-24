<?php
function getConnection(){
    //Khai báo thông tin server
    $host= 'localhost';
    $dbname = 'web204_gamestore';
    $username = 'root';
    $password = '';
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    // TẠO ĐỐI TƯỢNG THUỘC KỚ PDO
    $DBH = new PDO('mysql:host='.$host.';dbname='.$dbname,$username,$password,$options);
    return $DBH;
}

//Gửi câu truy vấn SELECT
function query($sql){
    $connect = getConnection();
    $result = $connect->query($sql)->fetchAll();
    return $result;
}
function queryOne($sql){
    $connect = getConnection();
    $result = $connect->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//Gửi câu truy vấn thêm xoá sửa.
function execute($sql){
    $connect = getConnection();
    $result = $connect->exec($sql);
    $id = $connect->lastInsertId();
    return $id;
}

// function getLastInsertId(){
//     $connect = getConnection();
//     return $result;
// }
?>