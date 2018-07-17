<?php
$files = glob('temp/*'); // get all file names
foreach ($files as $file) { // iterate files
    if (is_file($file)) {
        unlink($file); // delete file
    }
}
/*Script to delete all the example files created in "/tmp" as part of the above questions*/
