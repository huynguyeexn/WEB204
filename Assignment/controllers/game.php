<?php
session_start();
include_once "models/publisher.php";
include_once "models/tag.php";
include_once "models/game_tags.php";
include_once "models/game_platforms.php";
include_once "models/platform.php";
include_once "models/game.php";
$act = "index";
$message = "";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch($act){
    case "index":
        $games = getAllGames();
        include_once "views/admin/admin-header.php";
        include_once "views/admin/game/game.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "add":
        $files = glob('uploads/coverGame/*'); // get all file names
        foreach($files as $file){ // iterate files
        if(is_file($file))
            unlink($file); // delete file
        }
        $files = glob('uploads/inGame/*'); // get all file names
        foreach($files as $file){ // iterate files
        if(is_file($file))
            unlink($file); // delete file
        }

        $_SESSION["images-upload"]["images"] = array(); 
        $_SESSION["images-upload"]["inGame"] = array(); 
        $_SESSION["images-upload"]["coverGame"] = array(); 
        $publishers = getAllPublishers();
        $platforms = getAllPlatforms();
        $tags= getAllTags();
        include_once "views/admin/admin-header.php";
        include_once "views/admin/game/add-game.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "insert":
        $name = $_POST['name'];
        $price = $_POST['price'];
        $destination = $_POST['destination'];
        $releaseDate = $_POST['releaseDate'];
        $tag_id =  explode(',',str_replace(']','',str_replace('[','',$_POST["tag_id"])));
        $platforms_id = explode(',',str_replace(']','',str_replace('[','',$_POST["platforms_id"])));
        $publisher_id = $_POST['publisher_id'];
        $inGame = '';
        $coverGame = '';

        if(!empty($_SESSION["images-upload"]['inGame'])) {
            foreach($_SESSION["images-upload"]['inGame'] as $e){
                $inGame =  $inGame . '"'.$e .'",';
            }
            $inGame = "[".rtrim($inGame, ",")."]";
        }
        if(!empty($_SESSION["images-upload"]['coverGame'])) {
            foreach($_SESSION["images-upload"]['coverGame'] as $e){
                $coverGame =  $coverGame . '"'.$e .'",';
            }
            $coverGame = "[".rtrim($coverGame, ",")."]";
        } 
        try{
            $id = addNewGame($name,$price,$destination, $releaseDate, $inGame, $coverGame, $publisher_id);
            //$images = $_SESSION["images-upload"];
            foreach($tag_id as $tag){
                addNewGameTags($id, $tag);
            }
            foreach($platforms_id as $platform){
                addNewGamePlatforms($id, $platform);
            }
            if (!file_exists('assets/images/game/'.$id.'/')) {
                mkdir('assets/images/game/'.$id.'/', 0777, true);
            }
            if (!file_exists('assets/images/thumb/'.$id.'/')) {
                mkdir('assets/images/thumb/'.$id.'/', 0777, true);
            }
            foreach($_SESSION["images-upload"]['inGame'] as $image){
                rename('uploads/inGame/'.$image, 'assets/images/game/'.$id.'/'.$image);
            }
            foreach($_SESSION["images-upload"]['coverGame'] as $image){
                rename('uploads/coverGame/'.$image, 'assets/images/thumb/'.$id.'/'.$image);
            }
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        header("location: admin.php?ctrl=".$ctrl."&act=add");
        exit();
    break;

    case "edit":
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $game = getGameById($id);
            $game_tag = "";
            $publishers = getAllPublishers();
            $platforms = getAllPlatforms();
            $tags= getAllTags();

            foreach(getTagsByGameId($id) as $tag){
                $game_tag = $game_tag . '"' . $tag['tag_id'] . '",';
            }
            $game_tag = "[".rtrim($game_tag, ",")."]";
            include_once "views/admin/admin-header.php";
            include_once "views/admin/game/edit-game.php";
            include_once "views/admin/admin-footer.php";
        }
    break;

    case "update":
        $id = $_GET["id"];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $destination = $_POST['destination'];
        $releaseDate = $_POST['releaseDate'];
        $tag_id =  explode(',',str_replace(']','',str_replace('[','',$_POST["tag_id"])));
        $platforms_id = explode(',',str_replace(']','',str_replace('[','',$_POST["platforms_id"])));
        $publisher_id = $_POST['publisher_id'];
        $inGame = '';
        $coverGame = '';

        $dir    = 'assets/images/thumb/'.$id;
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach($files as $file){
            $coverGame = $coverGame . '"' . $file . '",';
        }
        echo $coverGame = "[".rtrim($coverGame, ",")."]";
        
        
        $dir    = 'assets/images/game/'.$id;
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach($files as $file){
            $inGame = $inGame . '"' . $file . '",';
        }
        echo $inGame = "[".rtrim($inGame, ",")."]";

        try{
            updateGame($id, $name,$price,$destination, $releaseDate, $inGame ,$coverGame , $publisher_id);

            deleteAllGameTags($id);
            foreach($tag_id as $tag){
                addNewGameTags($id, $tag);
            }

            deleteAllGamePlatforms($id);
            foreach($platforms_id as $platform){
                addNewGamePlatforms($id, $platform);
            }
        }
        catch(PDOException $Exception) {
            echo 'Failed: ' . $Exception->getMessage();
            exit;
        }
        $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
        header("location: admin.php?ctrl=".$ctrl."&act=edit&id=".$id);
        exit();
        $message = "Success";
        include_once "views/admin/admin-header.php";
        include_once "views/admin/game/game.php";
        include_once "views/admin/admin-footer.php";
    break;

    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            try{
                deleteAllGameTags($id);
                deleteAllGamePlatforms($id);
                deleteGame($id);
            }
            catch(PDOException $Exception) {
                echo 'Failed: ' . $Exception->getMessage();
                exit;
            }
            $_SESSION['message'] = Array(1,"Success: Your task has successfully been completed.");
            header("location: admin.php?ctrl=".$ctrl);
            exit();
        }
        header("location: admin.php?ctrl=".$ctrl);
        exit();
    break;
}