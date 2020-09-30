<?php
    class PostModel{
        public function getPost(){
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $charset = "utf-8";
            $dbname = "blog_mvc";

            try{
                $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=$charset", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT * FROM POST");
                $stmt->execute();

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach()
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

?>