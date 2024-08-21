<?php
for ($tahun = 1600; $tahun < 2025; $tahun += 4) {
    if ($tahun % 400 == 0) {
        echo $tahun . " Adalah Tahun Kabisat\n". "<br>";
    } elseif ($tahun % 100 == 0) {
        echo $tahun . " Bukan Tahun Kabisat\n". "<br>";
    } elseif ($tahun % 4 == 0) {
        echo $tahun . " Adalah Tahun Kabisat\n". "<br>";
    } else {
        echo $tahun . " Bukan Tahun Kabisat\n". "<br>";
    }
}

