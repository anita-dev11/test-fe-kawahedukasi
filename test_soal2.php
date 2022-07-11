<!-- 
Isilah data pribadi : 

Nama : Anita
Alamat Email: anitatita24@gmail.com 
Waktu Mulai : 22.27
Waktu Selesai : 23.00
-->

<?php
$input1 = "hallo jesika24 selamat datang!";
$input2 = "hallo anggun selamat datang!";
$input3 = "hallo ** selamat datang!";
$input4 = "hallo Mariage889120! selamat datang!";

function validation($input)
{
    $isThereNumber = false;
    $number = [];
    for ($i = 0; $i < strlen($input); $i++) {
        if (ctype_digit($input[$i])) {
            $isThereNumber = true;
            array_push($number, $input[$i]);
        }
    }
    if ($isThereNumber) {
        echo "input : " . $input . "<br>";
        echo "Sistem kami menolak untuk inputan berisi angka " . implode($number) . "<br><br>";
    } else {
        echo "input : " . $input . "<br>";
        echo "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan " . $input . "<br><br>";
    }
}
validation($input1);
validation($input2);
validation($input3);
validation($input4);

?>