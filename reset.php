<?php
$playerDataDir = "data";
if(isset($_GET['uuid'])) {
    $uuid = basename($_GET['uuid']);
    $playerDir = $playerDataDir . '/' . $uuid;
    if(file_exists($playerDir)) {
        removeDir($playerDir);
    }
    mkdir($playerDir);
    echo "reset";
} else {
    echo "ERROR";
}
function removeDir($dir) {
    $files = array_diff(scandir($dir), array('.','..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? removeDir("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}
?>
