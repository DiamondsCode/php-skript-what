<?php
$uuid = isset($_GET['uuid']) ? $_GET['uuid'] : null;
$variable = isset($_GET['variable']) ? $_GET['variable'] : null;
if ($uuid !== null && $variable !== null) {
    $filePath = "data/{$uuid}/{$variable}/variable.txt";
    if (file_exists($filePath)) {
        echo file_get_contents($filePath);
    } else {
        echo "NULL";
    }
} else {
    echo "ERROR";
}
?>
