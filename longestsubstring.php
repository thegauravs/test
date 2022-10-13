<?php
$string = "abcabcbb";
$len = strlen($string);
$sub = "";
for($i = 0; $i < $len; $i++) {
    var_dump($string[$i]);
}

//echo "<pre>";var_dump($string);