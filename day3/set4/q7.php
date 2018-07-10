<?php
$target = 'File_seven.php';
$link = 'File_seven1.php';
symlink($target, $link);

echo readlink($link);
?>

