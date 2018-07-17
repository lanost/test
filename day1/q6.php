<?php
$a="PHP is a widely-used open source general-purpose scripting language.";
$array = explode(" ", $a);

foreach ($array as $value) {
    echo $value."<br>";
}
/*Script to break the entire string mentioned above into array. Separate it with ' ' (empty space)*/
