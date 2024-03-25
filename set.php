<?php
$uuid = isset($_GET['uuid']) ? $_GET['uuid'] : null;
$variable = isset($_GET['variable']) ? $_GET['variable'] : null;
$value = isset($_GET['value']) ? $_GET['value'] : null;
if ($uuid !== null && $variable !== null && $value !== null) {
    $filePath = "data/{$uuid}/{$variable}/variable.txt";
    if (!file_exists(dirname($filePath))) {
        mkdir(dirname($filePath), 0777, true);
    }
    file_put_contents($filePath, $value);
    echo "set";
} else {
    echo "ERROR";
}
?>
