<?php
    $realPath = $_SERVER['DOCUMENT_ROOT'];

    if(isset($_POST['back'])){
        $realPath = dirname($realPath);
        scanFolder($realPath);
    }
    else {
        if (!isset($_POST['nextFolder'])) {
            scanFolder($realPath);
        } else {
            $realPath = $_POST['nextFolder'];
            scanFolder($_POST['nextFolder']);
        }
    }
    function scanFolder($path)
    {
        $folderContent = scandir($path);
        echo "<form id='folderScreen' class='list-group' method='POST' action='/index.php'>";
        echo "<input type='submit' name='back' value='Back' class='btn btn-secondary' />";
        foreach ($folderContent as $key => $value){
            if($key<3){
                continue;
            }


            echo "<input type='submit' name='nextFolder' class='list-group-item' value='". $path . '/' . $value ."'/>";
        }
        echo "</form>";
    }
?>