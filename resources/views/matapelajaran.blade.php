<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Mata Pelajaran | Blog RPL</title>

<style>
*{
    box-sizing:border-box;
    font-family:'Segoe UI',Tahoma,sans-serif;
}

body{
    margin:0;
    background:linear-gradient(
        120deg,
        #0f2027,#203a43,#2c5364,#5f2c82,#49a09d
    );
    background-size:400% 400%;
    animation:gradientMove 12s ease infinite;
    min-height:100vh;
    color:white;
}

@keyframes gradientMove{
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

/* NAVBAR */
nav{
    background:rgba(0,0,0,0.35);
    padding:15px 30px;
}
.nav-wrapper{
    display:flex;
    justify-content:space-between;
    align-items:center;
}
.nav-title{
    font-weight:600;
}
.btn-back{
    padding:10px 22px;
    background:linear-gradient(135deg,#00c6ff,#0072ff);
    color:white;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
}

/* HEADER */
header{
    text-align:center;
    padding:50px 20px 30px;
}

/* CONTENT */
.container{
    width:85%;
    margin:auto;
}

.intro{
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(8px);
    padding:30px;
    border-radius:18px;
    margin-bottom:30px;
}

/* MAPEL */
details{
    background:rgba(255,255,255,0.95);
    color:#333;
    border-radius:18px;
    padding:25px;
    margin-bottom:20px;
    box-shadow:0 12px 30px rgba(0,0,0,0.35);
}

summary{
    font-size:22px;
    font-weight:700;
    cursor:pointer;
    color:#0d6efd;
}

.mapel-content{
    margin-top:15px;
    line-height:1.8;
}

h3{
    color:#198754;
    margin-bottom:8px;
}

ul{
    padding-left:20px;
}

.code{
    background:#111;
    color:#0f0;
    padding:15px;
    border-radius:10px;
    font-family:monospace;
    font-size:14px;
    overflow-x:auto;
}

/* FOOTER */
footer{
    text-align:center;
    padding:25px;
    opacity:0.85;
    margin-top:40px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="nav-wrapper">
        <div class="nav-title">
            Blog RPL
        </div>
        <a href="javascript:history.back()" class="btn-back">← Kembali</a>
    </div>
</nav>

<!-- HEADER -->
<header>
    <h1>Mata Pelajaran Rekayasa Perangkat Lunak</h1>
    <p>Materi Lengkap Teori & Praktik</p>
</header>

<div class="container">

<div class="intro">
    <h2>Tentang Mata Pelajaran RPL</h2>
    <p>
        Mata pelajaran Rekayasa Perangkat Lunak membekali siswa dengan
        kemampuan analisis, pemrograman, pembuatan aplikasi, dan
        kesiapan kerja di bidang teknologi informasi.
    </p>
</div>

<!-- DASAR PEMROGRAMAN -->
<details>
<summary>Dasar Pemrograman</summary>
<div class="mapel-content">
<h3>Materi:</h3>
<ul>
<li>Pengertian algoritma</li>
<li>Flowchart</li>
<li>Pseudocode</li>
<li>Struktur logika (IF, LOOP)</li>
</ul>

<h3>Praktik:</h3>
<ul>
<li>Membuat flowchart program sederhana</li>
<li>Menyusun pseudocode program</li>
</ul>

<h3>Contoh Pseudocode:</h3>
<div class="code">
START  
INPUT nilai  
IF nilai >= 75  
OUTPUT "LULUS"  
ELSE  
OUTPUT "TIDAK LULUS"  
END
</div>
</div>
</details>

<!-- PEMROGRAMAN WEB -->
<details>
<summary>Pemrograman Web</summary>
<div class="mapel-content">
<h3>Materi:</h3>
<ul>
<li>HTML (struktur halaman)</li>
<li>CSS (desain & layout)</li>
<li>Responsive Design</li>
</ul>

<h3>Praktik:</h3>
<ul>
<li>Membuat halaman web sederhana</li>
<li>Mengatur warna dan layout</li>
</ul>

<h3>Contoh HTML:</h3>
<div class="code">
&lt;h1&gt;Hello World&lt;/h1&gt;
&lt;p&gt;Belajar Web RPL&lt;/p&gt;
</div>
</div>
</details>

<!-- BASIS DATA -->
<details>
<summary>Basis Data</summary>
<div class="mapel-content">
<h3>Materi:</h3>
<ul>
<li>Pengertian database</li>
<li>ERD</li>
<li>Tabel & Relasi</li>
<li>Primary & Foreign Key</li>
</ul>

<h3>Praktik:</h3>
<ul>
<li>Membuat database MySQL</li>
<li>Membuat tabel siswa</li>
</ul>

<h3>SQL:</h3>
<div class="code">
CREATE TABLE siswa (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
kelas VARCHAR(10)
);
</div>
</div>
</details>

<!-- PHP -->
<details>
<summary>Pemrograman PHP</summary>
<div class="mapel-content">
<h3>Materi:</h3>
<ul>
<li>Variabel & Tipe Data</li>
<li>Form Handling</li>
<li>CRUD</li>
</ul>

<h3>Praktik:</h3>
<ul>
<li>Form input data</li>
<li>Simpan data ke database</li>
</ul>

<h3>Contoh PHP:</h3>
<div class="code">
&lt;?php
$nama = $_POST['nama'];
echo "Halo $nama";
?&gt;
</div>
</div>
</details>

<!-- LARAVEL -->
<details>
<summary>Framework Laravel</summary>
<div class="mapel-content">
<h3>Materi:</h3>
<ul>
<li>Routing</li>
<li>Controller</li>
<li>Blade Template</li>
<li>MVC</li>
</ul>

<h3>Praktik:</h3>
<ul>
<li>Membuat halaman Blade</li>
<li>Routing ke view</li>
</ul>

<h3>Route:</h3>
<div class="code">
Route::get('/home', function () {
    return view('home');
});
</div>
</div>
</details>

<!-- PKL -->
<details>
<summary>PKL & Dunia Industri</summary>
<div class="mapel-content">
<h3>Materi:</h3>
<ul>
<li>Etika kerja</li>
<li>Kerja tim</li>
<li>Laporan PKL</li>
<li>Presentasi proyek</li>
</ul>

<h3>Praktik:</h3>
<ul>
<li>Membuat laporan PKL</li>
<li>Mempresentasikan hasil kerja</li>
</ul>
</div>
</details>

</div>

<footer>
© {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

</body>
</html>
