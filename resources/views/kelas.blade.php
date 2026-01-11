<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelas | Blog Edukasi RPL</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(
                120deg,
                #0f2027,
                #203a43,
                #2c5364,
                #5f2c82,
                #49a09d
            );
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
            min-height: 100vh;
            color: white;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* NAVBAR */
        nav {
            background: rgba(0,0,0,0.35);
            padding: 15px 30px;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-title {
            font-size: 18px;
            font-weight: 600;
        }

        .btn-back {
            padding: 10px 20px;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 6px 15px rgba(0,0,0,0.35);
        }

        .btn-back:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        }

        /* HEADER */
        header {
            text-align: center;
            padding: 50px 20px 30px;
        }

        header h1 {
            margin-bottom: 10px;
            font-size: 32px;
        }

        header p {
            opacity: 0.9;
        }

        /* CONTENT */
        .container {
            width: 85%;
            margin: auto;
        }

        .highlight {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(8px);
            padding: 30px;
            border-radius: 18px;
            margin-bottom: 30px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.35);
        }

        .kelas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .card {
            background: rgba(255,255,255,0.95);
            color: #333;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.35);
        }

        .card h2 {
            color: #0d6efd;
            margin-top: 0;
        }

        .badge {
            display: inline-block;
            padding: 6px 14px;
            background: linear-gradient(135deg, #36d1dc, #5b86e5);
            color: white;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 10px;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 25px;
            opacity: 0.85;
            margin-top: 40px;
            font-size: 14px;
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
    <h1>Kelas Rekayasa Perangkat Lunak</h1>
    <p>SMK Muhammadiyah Tasikmalaya</p>
</header>

<!-- ISI -->
<div class="container">

    <div class="highlight">
        <h2>Pembagian Materi Berdasarkan Kelas</h2>
        <p>
            Materi pembelajaran Rekayasa Perangkat Lunak disusun secara bertahap
            sesuai jenjang kelas X, XI, dan XII agar siswa memahami konsep dari
            dasar hingga siap menghadapi dunia industri.
        </p>
    </div>

    <div class="kelas-grid">

        <!-- KELAS X -->
        <div class="card">
            <span class="badge">Kelas X</span>
            <h2>Dasar RPL</h2>
            <ul>
                <li>Pengenalan Rekayasa Perangkat Lunak</li>
                <li>Algoritma & Flowchart</li>
                <li>Logika Pemrograman</li>
                <li>HTML Dasar</li>
                <li>CSS Dasar</li>
                <li>Penggunaan Editor Kode</li>
            </ul>
        </div>

        <!-- KELAS XI -->
        <div class="card">
            <span class="badge">Kelas XI</span>
            <h2>Pemrograman Lanjutan</h2>
            <ul>
                <li>PHP Dasar & Lanjutan</li>
                <li>MySQL & Relasi Database</li>
                <li>CRUD PHP & MySQL</li>
                <li>Bootstrap</li>
                <li>Pemrograman Web Dinamis</li>
                <li>Proyek Aplikasi Web</li>
            </ul>
        </div>

        <!-- KELAS XII -->
        <div class="card">
            <span class="badge">Kelas XII</span>
            <h2>Framework & Industri</h2>
            <ul>
                <li>Framework Laravel</li>
                <li>MVC (Model View Controller)</li>
                <li>Authentication & Login</li>
                <li>Deployment Aplikasi</li>
                <li>Persiapan PKL</li>
                <li>Proyek Akhir RPL</li>
            </ul>
        </div>

    </div>

</div>

<!-- FOOTER -->
<footer>
    © {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

</body>
</html>
