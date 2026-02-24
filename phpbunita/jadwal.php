<?php
$nama_saya = "Qila," ;
$piket = [
    "Senin" => ["Cindy,", "Shesanata,", "Tsabita,", "Naila,", "Kartika,","Rasya,", "Yusuf,","Habibi."],
    "Selasa" => ["Keisha","Shafanira,", "Aurora", "Sila", "Syauqi," , "Nail,", "Wahyu."],
    "Rabu" => ["Anin,", "Shifa,", "Tania," , "Fasya,","Eka,","Dzaky,","Vino."],
    "Kamis" => ["Aida,", "Maharani,","Alyaa,","Denia,","Ravid,","Ibnu,","Tegar."],
    "Jumat" => ["$nama_saya", "Alais,", "Gendhis,","Cloudya,","Aziz,","Raka,","Rayhan."]
];

$jadwal = [
    1 => ["MTK","IPAS","PGD","POR","INF"],
    2 => ["MTK","IPAS","PGD","POR","INF"],
    3 => ["SJR","IPAS","PGD","POR","KKA"],
    4 => ["PABP","IPAS","PGD","SJR","KKA"],
    5 => ["PABP","PPS","PGD","BNG","IPAS"],
    6 => ["PABP","PPS","PGD","BNG","IPAS"],
    7 => ["BNG","BJW","GIM","MTK","PGD"],
    8 => ["BNG","BJW","GIM","MTK","PGD"],
    9 => ["BIN","SNM","GIM","BIN"],
    10 => ["BIN","SNM","GIM","BIN"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Mata Pelajaran X PPLG 2</title>
<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e0f2ff, #f8fbff);
    margin:0;
    padding:30px;
}

.container{
    max-width:1100px;
    margin:auto;
}

h2{
    text-align:center;
    margin-bottom:20px;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    margin-bottom:40px;
}

table{
    border-collapse:collapse;
    width:100%;
}

th{
    background:#816b97;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    border-bottom:1px solid #eee;
}

tr:hover{
    background:#f3f9ff;
}

.highlight{
    background:#ffeb3b;
    padding:4px 8px;
    border-radius:6px;
    font-weight:bold;
}

a{
    text-decoration:none;
    background:#b36aa6;
    color:white;
    padding:10px 15px;
    border-radius:8px;
}

a:hover{
    background:#816b97;
}
</style>
</head>

<body>

<div class="container">

<div class="card">
<h2>Jadwal Pelajaran X PPLG 2</h2>
<table>
<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>

<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    echo "<td>$i</td>";

    foreach($jadwal[$i] as $mapel){
        echo "<td>$mapel</td>";
    }

    echo "</tr>";
}
?>
</table>

<br><br>

<h2>Jadwal Piket</h2>
<table>
<tr>
<th>Hari</th>
<th>Nama</th>
</tr>

<?php
foreach($piket as $hari => $nama){
    echo "<tr>";
    echo "<td>$hari</td>";
    echo "<td>";

    foreach($nama as $orang){
        if($orang == $nama_saya){
            echo "<span class='highlight'>$orang</span> ";
        } else {
            echo "$orang ";
        }
    }

    echo "</td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="biodata.php">⬅ Kembali ke Biodata</a>

</body>
</html>