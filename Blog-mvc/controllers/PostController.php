<?php
    class PostController{
        public function getPost(){
            require_once('models/PostModel.php');
            $postModel = new PostModel();
            $postModel->getPost();
        }
    }

?>