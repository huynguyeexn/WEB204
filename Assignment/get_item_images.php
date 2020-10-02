<?php
    $id = $_GET['id'];
    $act = $_GET['act'];
    $storeFolder = '';
    switch($act){
        case "inGameImages":
            $storeFolder = 'assets/images/game/'.$id;
        break;
        case "coverGameImages":
            $storeFolder = 'assets/images/thumb/'.$id;
        break;
    }
    $ds = DIRECTORY_SEPARATOR; 
    $result  = array();
    $files = scandir($storeFolder);                 //1
    if ( false!==$files ) {
        foreach ( $files as $file ) {
            if ( '.'!=$file && '..'!=$file) {       //2
                $obj['name'] = $file;
                $obj['size'] = filesize($storeFolder.$ds.$file);
                $result[] = $obj;
            }
        }
    }
    header('Content-type: text/json');              //3
    header('Content-type: application/json');
    echo json_encode($result);
?>