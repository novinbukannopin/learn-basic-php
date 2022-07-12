<?php

$nilai = 70;
$absen = 90;

// IF STANDARD
if ($nilai >= 80 && $absen >= 80) {
    echo "Selamat nilai anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Selamat nilai anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Selamat nilai anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Selamat nilai anda D" . PHP_EOL;
} else {
    echo "Selamat nilai anda E" . PHP_EOL;
}

// WITH END-IF
if ($nilai >= 80 && $absen >= 80) :
    echo "Selamat nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Selamat nilai anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Selamat nilai anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Selamat nilai anda D" . PHP_EOL;
else:
    echo "Selamat nilai anda E" . PHP_EOL;
endif;
