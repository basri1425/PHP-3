<?php

function cari_mean($arr){
//kode di sini
    $sum = 0;
    foreach ($arr as $value) {
        # code...
        $sum += $value;
    }
    return round($sum/count($arr)) . '<br>';
}

//TEST CASE 
echo "mean dari ([1, 2, 3, 4, 5]) adalah : " .cari_mean([1, 2, 3, 4, 5]); // 3
echo "mean dari ([3, 5, 7, 5, 3]) adalah : ".cari_mean([3, 5, 7, 5, 3]); // 5
echo "mean dari ([6, 5, 4, 7, 3]) adalah : ".cari_mean([6, 5, 4, 7, 3]); // 5
echo "mean dari ([1, 3, 3]) adalah : ".cari_mean([1, 3, 3]); // 2
echo "mean dari ([7, 7, 7, 7, 7]) adalah : ".cari_mean([7, 7, 7, 7, 7]); // 7

?>