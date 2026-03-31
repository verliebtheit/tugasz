<?php 
// Hasil pengerjaan kelompok 7 mengerjakan milik kelompok 3
// Aurora Zifara Wulandari & Raihan Yusuf Habibi (dikerjakan oleh aqila dalilatisya & naila aprinza)
// Hanya satu kondisi positif
echo "Hanya satu kondisi positif: ";
$perhatian_belajar = "memperhatikan guru";
if ($perhatian_belajar == "memperhatikan guru") {
    echo "Aku akan lebih mudah memahami materi.<br>";
}
// Hanya satu kondisi negatif 
echo "Hanya satu kondisi negatif: ";
$bawa_buku = "tidak membawa buku catatan";
if ($bawa_buku == "tidak membawa buku catatan") {
    echo "Aku akan kesulitan untuk belajar di rumah.<br>";
}
// Dua kondisi
echo "Dua kondisi: ";
$status_catatan = "lengkap";
if ($status_catatan == "lengkap") {
    echo "Aku akan lebih mudah saat belajar untuk ulangan.<br>";
} else {
    echo "Aku harus meminjam catatan punya teman.<br>";
} 
// Lebih dari dua kondisi (5-7 kondisi)
echo "Lebih dari dua kondisi: ";
$kondisi_saat_belajar = "di tempat yang tenang";
if ($kondisi_saat_belajar == "di tempat yang tenang") {
    echo "Aku akan lebih bisa fokus.<br>";
} elseif ($kondisi_saat_belajar == "sambil bermain hp") {
    echo "Konsentrasiku akan sangat terganggu.<br>";
} elseif ($kondisi_saat_belajar == "sambil mendengarkan musik") {
    echo "Aku akan merasa lebih santai.<br>";
} elseif ($kondisi_saat_belajar == "sambil melamun") {
    echo "Aku akan tertidur.<br>";
} elseif ($kondisi_saat_belajar == "tidak pernah belajar sama sekali") {
    echo "Aku tidak akan bisa mengerjakan soal-soal.<br>";
} else {
    echo "Kondisi belajar tidak menentu.<br>";
} 
// 5. Di dalam pengkondisian, ada kondisi lainnya (bersarang)
echo "Bersarang: ";
$status_tugas = "dikerjakan terlebih dahulu";
$tingkat_fokus = "tinggi";
if ($status_tugas == "dikerjakan terlebih dahulu") {
    if ($tingkat_fokus == "tinggi") {
        echo "Tugasku akan selesai lebih cepat.<br>";
    } elseif ($tingkat_fokus == "rendah") {
        echo "Tugas selesai, namun memakan waktu lebih lama.<br>";
    } else {
        echo "Status pengerjaan tugas tidak valid.<br>";
    }
} elseif ($status_tugas == "menunda tugas") {
    if ($tingkat_fokus == "rendah") {
        echo "Tugasku akan menumpuk setinggi gunung.<br>";
    } else {
        echo "Walau ditunda, akhirnya tugas dikerjakan juga.<br>";
    }
} else {
    echo "Sikap terhadap tugas tidak dikenali.<br>";
}
// Di dalam pengkondisian menggunakan syarat DAN 
echo "Syarat DAN: ";
$sikap_belajar = "dengan serius";
$latihan_soal = "sering";
if ($sikap_belajar == "dengan serius" && $latihan_soal == "sering") {
    echo "Aku akan lebih memahami pelajaran tersebut.<br>";
} else {
    echo "Aku harus mengubah cara belajarku agar lebih paham.<br>";
} 
// Di dalam pengkondisian menggunakaan syarat ATAU
echo "Syarat ATAU: ";
$lokasi_belajar = "di perpustakaan";
if ($lokasi_belajar == "di perpustakaan" || $lokasi_belajar == "di ruang yang tenang") {
    echo "Aku lebih bisa untuk berkonsentrasi.<br>";
} else {
    echo "Aku mungkin akan sedikit terganggu dengan suara di sekitar.<br>";
} 
?>