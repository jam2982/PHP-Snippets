<?php

//Place this code in functions.php

add_filter('all_plugins', 'hide_plugins');

function hide_plugins($plugins) {
    unset($plugins['worker/init.php']); 
    //unset($plugins['plugin-folder-name/plugin-file.php']);
    return $plugins;
}
