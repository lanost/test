<?php
$input = array('PHP', 'is', 'a', 'widely-used', 'open', 'source', 'general-purpose', 'scripting', 'language');
foreach ($input as $value) {
    $string=$string.$value." ";
}
echo $string;
echo "<br>";

echo str_replace(" ", "-", $string);
echo "<br>";
echo str_replace("-", " ", $string);
/*$input = array('PHP', 'is', 'a', 'widely-used', 'open', 'source', 'general-purpose', 'scripting', 'language');

From the above input generate the below outputs,
1. PHP is a widely-used open source general-purpose scripting language 2.
PHP-is-a-widely-used-open-source-general-purpose-scripting-language 3. PHP is a widely-used open
source general-purpose scripting language*/
