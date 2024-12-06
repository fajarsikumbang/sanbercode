<?php

echo "<h3>Soal No 1 Conditional if else</h3>";

function warewolfGame($name, $role) {
    if (empty($name)) {
        return "Nama harus diisi!<br>";
    } elseif (empty($role)) {
        return "Halo $name, Pilih peranmu untuk memulai game!<br>";
    } else {
        $output = "Selamat datang di Dunia Werewolf, $name<br>";
        switch (strtolower($role)) {
            case "penyihir":
                $output .= "Halo Penyihir $name, kamu dapat melihat siapa yang menjadi werewolf!<br>";
                break;
            case "guard":
                $output .= "Halo Guard $name, kamu akan membantu melindungi temanmu dari serangan werewolf.<br>";
                break;
            case "werewolf":
                $output .= "Halo Werewolf $name, Kamu akan memakan mangsa setiap malam!<br>";
                break;
            default:
                $output .= "Peran tidak dikenal. Pilih peran yang sesuai (penyihir, guard, atau werewolf).<br>";
                break;
        }
        return $output;
    }
}

// Hapus komentar untuk menjalankan code!
echo warewolfGame("", ""); // Nama harus diisi!
echo warewolfGame("John", ""); // Halo John, Pilih peranmu untuk memulai game!
echo warewolfGame("Jane", "penyihir"); // Penyihir
echo warewolfGame("Jenita", "guard"); // Guard
echo warewolfGame("junaedi", "werewolf"); // Werewolf

echo "<h3>Soal No 2 Switch Case </h3>";

function tanggal_lahir($hari, $bulan, $tahun) {
    $bulan_nama = "";
    switch ($bulan) {
        case 1: $bulan_nama = "Januari"; break;
        case 2: $bulan_nama = "Februari"; break;
        case 3: $bulan_nama = "Maret"; break;
        case 4: $bulan_nama = "April"; break;
        case 5: $bulan_nama = "Mei"; break;
        case 6: $bulan_nama = "Juni"; break;
        case 7: $bulan_nama = "Juli"; break;
        case 8: $bulan_nama = "Agustus"; break;
        case 9: $bulan_nama = "September"; break;
        case 10: $bulan_nama = "Oktober"; break;
        case 11: $bulan_nama = "November"; break;
        case 12: $bulan_nama = "Desember"; break;
        default: return "Bulan tidak valid!<br>";
    }
    return "$hari $bulan_nama $tahun<br>";
}

// Hapus komentar untuk menjalankan code!
echo tanggal_lahir(25, 1, 1996); // 25 Januari 1996
echo tanggal_lahir(7, 2, 2000); // 7 Februari 2000
echo tanggal_lahir(3, 3, 2003); // 3 Maret 2003
echo tanggal_lahir(8, 4, 1956); // 8 April 1956
echo tanggal_lahir(15, 5, 1978); // 15 Mei 1978
echo tanggal_lahir(22, 6, 2013); // 22 Juni 2013
echo tanggal_lahir(28, 7, 2004); // 28 Juli 2004
echo tanggal_lahir(17, 8, 1945); // 17 Agustus 1945
echo tanggal_lahir(1, 9, 2022); // 1 September 2022
echo tanggal_lahir(12, 10, 2002); // 12 Oktober 2002
echo tanggal_lahir(18, 11, 2018); // 18 November 2018
echo tanggal_lahir(9, 12, 1994); // 9 Desember 1994

?>
