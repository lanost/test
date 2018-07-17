<?php
$myfile=file_get_contents("4-Lab- File.pdf");
file_put_contents("test.pdf", $myfile);
/*Copy the entire contents from Lab5-File.pdf and write it to a file in '/tmp/Lab.pdf'*/
