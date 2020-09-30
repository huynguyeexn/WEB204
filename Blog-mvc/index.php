<?php
    require_once('controllers/PostController.php');
    
    $postController = new PostController();

    $postController->getPost();
?>