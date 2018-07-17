<?php
$text = "There is no installation needed to use these functions; they are part of the PHP core";

if (stripos($text, "PHP")!==false) {
    echo "PHP : true";
}
if (stripos($text, "JAVA")!==false) {
    echo "JAVA : true";
}
if (stripos($text, "php")!==false) {
    echo "php : true";
}
/*$text = "There is no installation needed to use these functions; they are part of the PHP core";
Script to find out whether the following words exists in the above text and print true or false for
the following.
- PHP
- JAVA
- php
Note: Search should be case-insensitive also*/
