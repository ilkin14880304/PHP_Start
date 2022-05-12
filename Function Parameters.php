<?php


namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN (write your solution here)
function truncate($text, $len)
{
    $result = substr($text, 0, $len);
    return "{$result}...";
}
// END