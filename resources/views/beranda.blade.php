<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | Blog Edukasi RPL</title>

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
            color: #ffffff;
        }

        .btn-back {
            padding: 10px 20px;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(0,0,0,0.35);
        }

        .btn-back:hover {
            transform: translateY(-3px) scale(1.05);
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
            color: #ffffff;
        }

        header p {
            opacity: 0.9;
            font-size: 16px;
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

        .highlight h2 {
            color: #ffffff;
        }

        .highlight p {
            color: #f1f1f1;
            line-height: 1.7;
        }

        .card {
            background: rgba(255,255,255,0.95);
            color: #333;
            padding: 30px;
            margin-bottom: 25px;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.35);
        }

        .card h2 {
            color: #0d6efd;
            margin-top: 0;
        }

        .visi {
            font-size: 18px;
            font-weight: 600;
            color: #198754;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 25px;
            opacity: 0.85;
            margin-top: 40px;
            font-size: 14px;
            color: #ffffff;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="nav-wrapper">
        <div class="nav-title">
            Blog Edukasi RPL
        </div>
        <a href="javascript:history.back()" class="btn-back">← Kembali</a>
    </div>
</nav>

<!-- HEADER -->
<header>
    <h1>Blog Rekayasa Perangkat Lunak</h1>
    <p>SMK Muhammadiyah Tasikmalaya</p>
</header>

<!-- ISI -->
<div class="container">

    <div class="highlight">
        <h2>Selamat Datang</h2>
        <p>
            Selamat datang di <b>Blog RPL SMK Muhammadiyah Tasikmalaya</b>.
            Website ini menjadi media pembelajaran digital untuk mendukung proses
            belajar mengajar siswa dalam bidang Rekayasa Perangkat Lunak.
        </p>
    </div>

    <div class="card">
        <h2>Visi</h2>
        <p class="visi">
            Terwujudnya lulusan Rekayasa Perangkat Lunak yang beriman, berakhlak mulia,
            kompeten di bidang teknologi, dan siap menghadapi dunia kerja.
        </p>
    </div>

    <div class="card">
        <h2>Misi</h2>
        <ul>
            <li>Menyelenggarakan pembelajaran RPL berbasis teknologi dan industri.</li>
            <li>Membekali siswa dengan keterampilan pemrograman modern.</li>
            <li>Mengembangkan kreativitas, logika, dan problem solving.</li>
            <li>Mempersiapkan siswa menghadapi dunia kerja dan PKL.</li>
        </ul>
    </div>

    <div class="card">
        <h2>Materi yang Dipelajari</h2>
        <ul>
            <li>Algoritma & Logika Pemrograman</li>
            <li>HTML, CSS, Bootstrap</li>
            <li>PHP & MySQL</li>
            <li>Framework Laravel</li>
            <li>Pembuatan Aplikasi Web</li>
        </ul>
    </div>

</div>

<!-- FOOTER -->
<footer>
    © {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

</body>
</html>
