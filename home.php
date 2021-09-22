<?php require_once('vendor/autoload.php');

    $myVar="aze";
    echo $myVar;
    echo "\n";
    $$myVar="rty";
    echo "$$myVar\t";
    echo $$myVar;
?>
