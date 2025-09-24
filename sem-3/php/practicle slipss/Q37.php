<!-- Write a PHP script to accept string from the user and display all vowels from the string. -->

<?php
$str = "Hello World";
$vowels = "aeiouAEIOU";
echo "Vowels in '$str': ";
for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($vowels, $str[$i]) !== false) {
        echo $str[$i] . " ";
    }
}
?>
