<?php
$target = 'File_seven.php';
$link = 'File_seven1.php';
symlink($target, $link);

echo readlink($link);
/*Create a symlink in Home folder which points to project repo (/var/www/html/php-lab)*/
