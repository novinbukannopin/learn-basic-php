<?php

$nilai = "C";

switch ($nilai) {
    case "A":
        echo "Selamat anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}
