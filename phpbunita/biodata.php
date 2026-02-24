<?php
// ================== VARIABEL BIODATA ==================
$nama_lengkap = "Aqila Dalilatisya";
$nama_panggilan = "Qila";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 27;
$bulan_lahir = "Januari";
$tahun_lahir = 2010;
$alamat = "Jl. Kintelan Baru No.48 RT 04/RW 02, Gajahmungkur, Semarang";
$keinginan = "Programmer Game";
$hobi = ["Menonton film atau series", "Mendengarkan musik & bernyanyi", "Bermain game"];
$skills = 67; // range 0 - 100
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$no_wa = "+62 895-3758-47171";
$email = "adalilatisya@gmail.com";
$makanan_favorit = ["Mochi bomboloni", "Kol kukus", "Terong raos"];
$minuman_favorit = ["butterscotch sea salt latte", "jus lemon buah naga", "Matcha"];
$motto = "“You don’t know your limits until you’ve reached them.” — Vi";
$instagram = "https://www.instagram.com/lasseraphic/";

// ================== PERHITUNGAN UMUR ==================
$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata <?php echo $nama_panggilan; ?></title>
    <style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #bfb7c9, #847a9a);
    margin: 0;
    padding: 20px;
    color: #2f2a3a;
}

.card {
    background: #d9d9d9;
    padding: 30px;
    width: 900px;
    margin: auto;
    border-radius: 25px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

h2 {
    text-align: center;
    color: #816b97;
    letter-spacing: 1px;
}

h3 {
    color: #b36aa6;
    margin-top: 30px;
}

img {
    width: 160px;
    border-radius: 50%;
    display: block;
    margin: 0 auto 20px;
    border: 4px solid #847a9a;
}

.skills {
    background: #bfb7c9;
    border-radius: 20px;
    overflow: hidden;
}

.skills-bar {
    background: linear-gradient(90deg, #816b97, #b36aa6);
    height: 25px;
    transition: width 1s ease;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th {
    background: #816b97;
    color: white;
}

td {
    background: #bfb7c9;
}

tr:hover td {
    background: #847a9a;
    color: white;
}

a {
    display: inline-block;
    padding: 10px 20px;
    background: #b36aa6;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    transition: 0.3s ease;
}

a:hover {
    background: #816b97;
}

.motto span {
    color: #b36aa6;
    font-weight: 600;
}
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    display: none;
    justify-content: center;
    align-items: center;
}

.popup-content {
    background: #2a2e4f;
    padding: 30px;
    border-radius: 20px;
    width: 400px;
    text-align: center;
    color: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.popup-content button {
    margin-top: 20px;
    padding: 10px 25px;
    border: none;
    border-radius: 20px;
    background: #b36aa6;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.popup-content button:hover {
    background: #816b97;
}
    </style>
</head>
<body>
<div id="popup" class="popup">
    <div class="popup-content">
        <p>Dikulum dikunyah, assalamualaikum semuanyah</p>
        <button onclick="closePopup()">OK</button>
    </div>
</div>

<script>
window.onload = function() {
    document.getElementById("popup").style.display = "flex";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}
</script>


<div class="card">

<h2>BIODATAKU :P</h2>

<img src="WhatsApp Image 2026-02-23 at 1.57.37 PM.jpeg" alt="Foto">

<p><b>Nama Lengkap:</b> <?php echo $nama_lengkap; ?></p>
<p><b>Nama Panggilan:</b> <?php echo $nama_panggilan; ?></p>
<p><b>Agama:</b> <?php echo $agama; ?></p>
<p><b>Tempat, Tanggal Lahir:</b> <?php echo $tempat_lahir.", ".$tanggal_lahir." - ".$bulan_lahir." - ".$tahun_lahir; ?></p>
<p><b>Umur:</b> <?php echo $umur; ?> tahun</p>
<p><b>Alamat:</b> <?php echo $alamat; ?></p>
<p><b>Gender:</b> <?php echo $gender; ?></p>
<p><b>Kewarganegaraan:</b> <?php echo $kewarganegaraan; ?></p>
<p><b>No WA:</b> <?php echo $no_wa; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>
<p><b>Instagram:</b> <a href="<?php echo $instagram; ?>" target="_blank"><?php echo $instagram; ?></a></p>

<h3>Hobi</h3>
<ol>
<?php
foreach($hobi as $h){
    echo "<li>$h</li>";
}
?>
</ol>

<h3>Skills</h3>
<h4>Pro player ml dan roblox</h4>
<div class="skills">
    <div class="skills-bar" style="width: <?php echo $skills; ?>%;"></div>
</div>
<p><?php echo $skills; ?>%</p>

<h3>Makanan Favorit</h3>
<ul type="square">
<?php
foreach($makanan_favorit as $m){
    echo "<li>$m</li>";
}
?>
</ul>

<h3>Minuman Favorit</h3>
<ol type="A">
<?php
foreach($minuman_favorit as $d){
    echo "<li>$d</li>";
}
?>
</ol>

<h3>Riwayat Pendidikan</h3>
<table>
<tr>
    <th>Tingkat</th>
    <th>Nama Sekolah</th>
    <th>Tahun Mulai</th>
    <th>Tahun Lulus</th>
</tr>
<tr>
    <td>SD</td>
    <td>SD Negeri Pendrikan Lor 02 Semarang</td>
    <td>2016</td>
    <td>2022</td>
</tr>
<tr>
    <td>SMP</td>
    <td>SMP Negeri 05 Semarang</td>
    <td>2022</td>
    <td>2025</td>
</tr>
<tr>
    <td>SMK</td>
    <td>SMK Negeri 08 Semarang</td>
    <td>2025</td>
    <td>2028</td>
</tr>
</table>

<h3>Keinginan 10 Tahun Lagi</h3>
<p>
Hai namaku <?php echo $nama_panggilan; ?>, saat ini tahun <?php echo $tahun_sekarang; ?>,
aku adalah seorang pelajar yang berumur <?php echo $umur; ?> tahun.
10 tahun lagi di tahun <?php echo $tahun_10_lagi; ?>,
di umur <?php echo $umur_10_lagi; ?> aku adalah <?php echo $keinginan; ?>.
Aku ingin sukses agar orangtuaku bangga dan rencana yang akan aku tempuh adalah terus belajar dan konsisten.
</p>

<marquee><?php echo $motto; ?></marquee>

<br><br>
<a href="jadwal.php">Lihat Jadwal</a>

</div>
</body>
</html>