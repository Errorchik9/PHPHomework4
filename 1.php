<?php
function alphabeticalorder(string $str): string
{
    $char = str_split($str);
    sort($char);
    return implode('', $char);
}
$input = 'alphabetical';
$result = alphabeticalorder($input);
echo $result;