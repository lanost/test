<?php
$handle = fopen("php.txt", "r");
$handle1 = fopen("tmp/php.txt", "w");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if (strpos($line, 'php') !== false) {
            echo $line;
            fwrite($handle1, $line);
            fwrite($handle1, "\n");
        }
        // process the line read.
    }
    fclose($handle);
} else {
    // error opening the file.
}
/*Read php.txt line by line
If the line has word PHP or php write that line to a new file in 'tmp' folder with the same name*/
