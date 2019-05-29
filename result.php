<?php
    error_reporting(E_ALL);
    $f = fopen('results/'.$_POST['file'].'.txt', 'a');
    fwrite($f, $_POST['img'].' '.$_POST['method'].PHP_EOL);
    fclose($f);
?>