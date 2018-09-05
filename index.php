<?php
    $linecount = 1;
    $fh = fopen("sports.txt", "r");
    while (!feof($fh) && $linecount <= 5) {
        $line = fgets($fh, 4094);
        echo $line. "<br>";
        $linecount++;
    }
?>