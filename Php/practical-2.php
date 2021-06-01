<?php
function listFolderFiles($path){
        $dirs = Scandir($path);

        unset($dirs[array_search('.',$dirs,true)]);
        unset($dirs[array_search('..',$dirs,true)]);

        if(count($dirs)<1)
        return;
        echo '<ol>';

        foreach($dirs as $dir){
            echo '<li>'.$dir;
            if(is_dir($path.'/'.$dir))
            listFolderFiles($path.'/'.$dir);
            echo '</li>';
        }
        echo '</ol>';
    }
    listFolderFiles('/path');

?>