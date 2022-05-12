<?php


namespace HexletBasics\DefineFunctions\ReturnInstruction;

// BEGIN (write your solution here)
function getCurrentYear()
{
    $year = date('Y-m-d');
    $year = substr($year, 0, 4);
    return ($year);
}
// END