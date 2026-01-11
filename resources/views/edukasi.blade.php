<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edukasi | Blog Edukasi RPL</title>

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

        .card p {
            line-height: 1.7;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
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
    <h1>Materi Edukasi Teknologi</h1>
    <p>Rekayasa Perangkat Lunak – SMK Muhammadiyah Tasikmalaya</p>
</header>

<!-- ISI -->
<div class="container">

    <div class="highlight">
        <h2>📚 Edukasi RPL</h2>
        <p>
            Halaman ini berisi materi edukasi teknologi dan pengembangan software
            untuk siswa SMK jurusan Rekayasa Perangkat Lunak, mulai dari dasar
            hingga pengenalan dunia industri.
        </p>
    </div>

    <div class="card">
        <span class="badge">Dasar</span>
        <h2>Pengenalan Teknologi Informasi</h2>
        <p>
            Teknologi Informasi (TI) adalah bidang yang mempelajari penggunaan komputer
            untuk menyimpan, mengolah, dan menyebarkan informasi.
        </p>
        <ul>
            <li>Pengertian Hardware & Software</li>
            <li>Sistem Operasi</li>
            <li>Aplikasi Perkantoran</li>
        </ul>
    </div>

    <div class="card">
        <span class="badge">Pemrograman</span>
        <h2>Logika & Algoritma</h2>
        <p>
            Logika dan algoritma merupakan dasar dalam pemrograman.
            Siswa dilatih berpikir sistematis sebelum menulis kode.
        </p>
        <ul>
            <li>Algoritma sekuensial</li>
            <li>Algoritma percabangan</li>
            <li>Algoritma perulangan</li>
        </ul>
    </div>

    <div class="card">
        <span class="badge">Web</span>
        <h2>Pengembangan Website</h2>
        <p>
            Website merupakan media utama dalam penyampaian informasi digital.
            Siswa mempelajari pembuatan website statis dan dinamis.
        </p>
        <ul>
            <li>HTML & CSS</li>
            <li>Bootstrap</li>
            <li>PHP & MySQL</li>
        </ul>
    </div>

    <div class="card">
        <span class="badge">Framework</span>
        <h2>Framework Laravel</h2>
        <p>
            Laravel adalah framework PHP modern yang menggunakan konsep MVC
            untuk mempermudah pengembangan aplikasi web.
        </p>
        <ul>
            <li>Routing</li>
            <li>Controller & View</li>
            <li>Database & Migration</li>
        </ul>
    </div>

    <div class="card">
        <span class="badge">Karier</span>
        <h2>Persiapan Dunia Kerja</h2>
        <p>
            Edukasi RPL tidak hanya fokus pada coding,
            tetapi juga pembentukan karakter dan kesiapan industri.
        </p>
        <ul>
            <li>Etika profesi IT</li>
            <li>Kerja tim</li>
            <li>Persiapan PKL</li>
        </ul>
    </div>

</div>

<!-- FOOTER -->
<footer>
    © {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

</body>
</html>
