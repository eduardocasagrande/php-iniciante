<?php
$input = [22, 33, 35, 65, 21, 12, 23, 10, 9, 7, 5, 8, 11, 14, 17, 19, 21, 24, 27, 30];

$output = array_filter($input, function ($idade) {
    return $idade >= 18;
});

print_r($output);
exit;
