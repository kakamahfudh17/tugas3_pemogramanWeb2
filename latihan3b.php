<?php
function soal($style){
    $jawabanTsset = "isset adalah fungsi untuk memeriksa apakah sebuah variabel telah di atur atau belum";
    $jawabanEmpty = "Empty adalah fungsi untuk memeriksa apakah sebuah variabel kosong atau tidak";

    echo"<p style = '$style'><strong>$jawabanTsset</strong></p>";
    echo"<p style = '$style'><strong>$jawabanEmpty</strong></p>";
}

soal("font-size:16px; font-family:Arial; color:blue;");
?>