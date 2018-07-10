<?php
$text = "There is no installation needed to use these functions; they are part of the PHP core";

if(stripos($text,"PHP")!==false)
{
echo "PHP : true";
}
if(stripos($text,"JAVA")!==false)
{
echo "JAVA : true";
}
if(stripos($text,"php")!==false)
{
echo "php : true";
}
?>



