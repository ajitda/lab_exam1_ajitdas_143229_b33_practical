<?php

$arr = array ("hello", "world", "how", "are", "you");
$str = implode(' ', $arr);
$strrev = strrev($str);
$ucwords = ucwords($strrev);
    echo $ucwords;

