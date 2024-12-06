<?php

echo "<h3>Soal No 1 Data Penduduk</h3>";

$dataPenduduk = [
    ["id" => "001", "nama" => "Budi", "kota" => "Jakarta"],
    ["id" => "002", "nama" => "Ince", "kota" => "NTT"],
    ["id" => "003", "nama" => "Rahman", "kota" => "Solo"],
    ["id" => "004", "nama" => "Asep", "kota" => "Bandung"],
    ["id" => "005", "nama" => "Made", "kota" => "Bali"],
    ["id" => "006", "nama" => "Ari", "kota" => "Surabaya"],
    ["id" => "006", "nama" => "Indra", "kota" => "Medan"]
];

// Menggunakan foreach untuk menampilkan data
foreach ($dataPenduduk as $penduduk) {
    echo "ID: " . $penduduk["id"] . "<br>";
    echo "Nama: " . $penduduk["nama"] . "<br>";
    echo "Kota Kelahiran: " . $penduduk["kota"] . "<br><br>";
}

?>
