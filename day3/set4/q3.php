<?php
$data = file_get_contents('https://en.wikipedia.org/wiki/PHP');
$myfile = fopen("temp/Wiki-PHP.html", "w") or die("Unable to open file!");
fwrite($myfile, $data);
/*Get the contents from the page - "https://en.wikipedia.org/wiki/PHP"
Write all the contents as such to a file in '/tmp/Wiki-PHP.html'*/
