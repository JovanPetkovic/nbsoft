<?php

    folderNavigation();

    function folderNavigation()
    {
        $fs = fopen('/mnt/data/webdev/nbsoft/index.php', 'r') or die("NE radi");
        if(isset($_POST['nextFolder']))
        {
            scanFolder($_POST['nextFolder']);
        }
        else
        {
            scanFolder($_SERVER['DOCUMENT_ROOT']);
        }
    }

    function scanFolder($path)
    {
        if(is_dir($path)) {
            $folderContent = scandir($path);
            echo "<form id='folderScreen' class='list-group' method='POST' action=''>";
            echo "<button type='submit' name='nextFolder' value='". dirname($path) ."' class='btn btn-secondary'>Back</button>";
            echo "<input style='display : none' type='text' name='task' value='folder'/>";
            foreach ($folderContent as $key => $value) {
                if ($key < 3) {
                    continue;
                }


                echo "<button type='submit' name='nextFolder' class='list-group-item' value='" . $path . '/' . $value . "'>"
                . $value . "</button>";
            }
            echo "</form>";
        }
        else
        {   
            clearstatcache();
            scanFolder(dirname($path));
            $fo = fopen($path, 'r') or die("Nece da radi");
            $fr = fread($fo, filesize($path));
            echo "<div id='file'>" . "<p>" . $fr . "</p></div>";
        }
    }
?>