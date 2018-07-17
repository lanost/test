<?php
$string="www.example.com/public_html/index.php";
echo substr($string, strrpos($string, "/")+1);
/*Write a PHP script to extract the file name from the following string. Go to the editor
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php'*/
