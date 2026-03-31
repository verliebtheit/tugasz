<?php
// INPUT VARIABEL
$menang_lawan_karasuno = true; 
$umpan_kenma_akurat    = true;
$kondisi_permainan = "strategi_kenma";
$masuk_semifinal  = true;
$hasil_semifinal  = "menang";
$kalah_eliminasi  = false;
$skor_nekoma = 25;
$skor_lawan = 20;
$kuroo_blok_tepat      = true;
$yaku_receive_baik     = true;
$kenma_stamina_cukup   = true;
$strategi_lawan_terbaca = true;
$situasi_saat_ini   = "pertandingan"; 
$nekoma_unggul_dulu = true;
$lawan_hilang_fokus = false;
$pemain_cedera      = false;
$kelelahan_ekstrem  = false;

//LOGIKA
echo "===ANALISIS PERTANDINGAN NEKOMA=== <br><br>";

// 1. HANYA 1 KONDISI POSITIF
if ($menang_lawan_karasuno)
    {
        echo "1. Nekoma akan melaju ke babak berikutnya. <br>";
        }

// 2. HANYA 1 KONDISI NEGATIF 
if (!$menang_lawan_karasuno) {
    echo "Nekoma tersingkir dari turnamen.";
    } 
    else 
        {
    echo "2. Nekoma masih bertahan di turnamen.<br>";
    }

// 3. 2 KONDISI
if ($umpan_kenma_akurat)
    {
        echo "3. Nekoma akan melakukan serangan bali yang mematikan.<br>";
        } 
        else
             {
            echo "3. Tim akan fokus pada pertahanan (defense).<br>";
            }

// 4. LEBIH DARI 2 KONDISI (5-7 KONDISI)
echo "4. Status Tim:";
if ($kondisi_permainan == "strategi_kenma")
    {
        echo "Strategi Kenma berjalan sempurna.<br>";
        }
        elseif ($kondisi_permainan == "kuroo_defense")
            {
                echo "Lawan kesulitan mencetak poin melalui spike.<br>";
                } 
               elseif ($kondisi_permainan == "yaku_receive")
                 { 
                    echo "Alur serangan tim sangat stabil.<br>";
                    }
                    elseif ($kondisi_permainan == "komunikasi") 
                        {
                            echo "Tidak ada kesalahan koordinasi di lapangan.<br>";
                            }
                        elseif ($kondisi_permainan == "konsisten")
                             {
                                echo "Kemenangan berada di tangan Nekoma.<br>";
                                }
                                else 
                                    {
                                        echo "Kondisi tidak stabil, perlu time-out segera.<br>";
                                        }

// 5. BERSARANG
echo "5. Jalur Turnamen: ";
if ($masuk_semifinal) 
    {
        if ($hasil_semifinal == "menang")
        {
            echo "Lolos ke Final (Perebutan Juara 1).<br>";
            }
             elseif ($hasil_semifinal == "kalah") 
                {
                    echo "Bertanding memperebutkan peringkat ketiga.<br>";
                    } 
                    else 
                        {
                            echo "Hasil pertandingan semifinal tidak valid.<br>";
                            } 
    }
    else
         {
            if ($kalah_eliminasi)
                {
                    echo "Kalah di eliminasi, harus pulang lebih awal.<br>";
                    } 
                    else
                         {
                            echo "Tetap berada di tribun sebagai penonton.<br>";
                            }
         }


// 6. MENGGUNAKAN SYARAT DAN (AND)
echo "6. Taktik Lapangan: ";
if ($kuroo_blok_tepat && $yaku_receive_baik)
     {
        echo "Poin dari serangan balik cepat didapatkan!<br>";
        } 
        elseif ($kenma_stamina_cukup && $strategi_lawan_terbaca) 
            {
                echo "Ritme permainan sepenuhnya dikendalikan.<br>";
                }
                 else
                     {
                        echo "Tim harus segera menyesuaikan taktik.<br>";
                        }

// 7. MENGGUNAKAN SYARAT ATAU (or)
echo "7. Status Pemain: ";
if ($situasi_saat_ini == "pertandingan") 
    {
        if ($nekoma_unggul_dulu || $lawan_hilang_fokus)
            {
                echo "Memenangkan set dengan mudah.<br>";
                } 
                else 
                    {
                        echo "Pemain siaga di bangku cadangan.<br>";
                        } 
                        
    }
    elseif ($situasi_saat_ini == "luar_lapangan") 
        {
             if ($pemain_cedera || $kelelahan_ekstrem)
                 {
                     echo "Wajib beristirahat dan pemulihan.<br>";
                     } 
                     else 
                        {
                             echo "Pemain siaga di bangku cadangan.<br>";
                              }
         }
?>



