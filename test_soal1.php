<!-- 
Isilah data pribadi : 

Nama : Anita
Alamat Email: anitatita24@gmail.com 
Waktu Mulai : 21.30
Waktu Selesai : 22.25
-->

<?php
$data1 = [1, 1, 1, 2, 2, 4, 1, 1];
$data2 = [2, 1, 2, 2, 2, 8, 1, 1];
$data3 = [3, 3, 3, 3, 2, 4, 1, 1];

function modus($data)
{
    $countValues = array_count_values($data);
    $maxValues = max($countValues);
    $number = array_search($maxValues, $countValues);
    echo "data : [" . implode(", ", $data) . "]<br>";
    echo "output: total data paling banyak keluar adalah " . $number . " dengan jumlah " . $maxValues . "<br>";
}
modus($data1);
modus($data2);
modus($data3);
?>