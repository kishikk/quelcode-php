<?php
$array = explode(',', $_GET['array']);

// 修正はここから
    $size = count($array);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 1; $j < ($size -$i); $j++) {
            if ($array[$j] < $array[$j - 1]) {
                $num1 = $array[$j];
                $array[$j] = $array[$j - 1];
                $array[$j - 1] = $num1;
            }
        }
    }
// 修正はここまで
echo "<pre>";
print_r ($array);
echo "</pre>";
?>