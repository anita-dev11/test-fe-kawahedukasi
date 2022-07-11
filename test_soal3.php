<!-- 
Isilah data pribadi : 

Nama : Anita
Alamat Email: anitatita24@gmail.com 
Waktu Mulai : 21.00
Waktu Selesai : 21:30
-->

<?php
echo "output 1:<br>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo "<br>output 2:<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 4; $j >= $i; $j--) {
        echo '&nbsp;&nbsp;';
    }
    for ($k = 1; $k <= $i; $k++) {
        echo '*';
    }
    echo '<br>';
}
?>