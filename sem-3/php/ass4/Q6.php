<?php
$str = "================";
$vowels = "";

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), ['a','e','i','o','u'])) {
        $vowels .= $str[$i];
    }
}

echo "String: $str<br>";
echo "Vowels: $vowels";
?>
