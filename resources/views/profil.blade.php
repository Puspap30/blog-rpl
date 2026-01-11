<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil | Blog RPL</title>

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
        }

        header p {
            opacity: 0.9;
        }

        /* CONTENT */
        .container {
            width: 85%;
            margin: auto;
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

        .highlight {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(8px);
            padding: 30px;
            border-radius: 18px;
            margin-bottom: 30px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.35);
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
        <div class="nav-title">Blog Edukasi RPL</div>
        <a href="javascript:history.back()" class="btn-back">← Kembali</a>
    </div>
</nav>

<!-- HEADER -->
<header>
    <h1>Profil Blog Edukasi RPL</h1>
    <p>SMK Muhammadiyah Tasikmalaya</p>
</header>

<!-- CONTENT -->
<div class="container">

    <div class="highlight">
        <h2>Tentang Blog</h2>
        <p>
            <b>Blog Rekayasa Perangkat Lunak</b> merupakan media pembelajaran
            berbasis web yang digunakan untuk mendukung proses belajar mengajar
            pada kompetensi keahlian Rekayasa Perangkat Lunak (RPL)
            di SMK Muhammadiyah Tasikmalaya.
        </p>
    </div>

    <div class="card">
        <h2>Latar Belakang</h2>
        <p>
            Perkembangan teknologi informasi yang sangat pesat menuntut dunia pendidikan
            untuk beradaptasi dengan media pembelajaran digital. Oleh karena itu,
            blog ini dibuat sebagai sarana pembelajaran yang interaktif, fleksibel,
            dan mudah diakses oleh siswa kapan saja dan di mana saja.
        </p>
    </div>

    <div class="card">
        <h2>Tujuan Pembuatan Blog</h2>
        <ul>
            <li>Menyediakan materi pembelajaran RPL secara terstruktur.</li>
            <li>Membantu siswa memahami konsep teori dan praktik pemrograman.</li>
            <li>Menjadi media pendukung pembelajaran di dalam dan luar kelas.</li>
            <li>Meningkatkan literasi digital dan kemandirian belajar siswa.</li>
        </ul>
    </div>

    <div class="card">
        <h2>Sasaran Pengguna</h2>
        <ul>
            <li>Siswa kelas X, XI, dan XII jurusan Rekayasa Perangkat Lunak.</li>
            <li>Guru mata pelajaran RPL.</li>
            <li>Masyarakat umum yang ingin belajar dasar pemrograman.</li>
        </ul>
    </div>

    <div class="card">
        <h2>Harapan</h2>
        <p>
            Dengan adanya Blog RPL ini, diharapkan siswa mampu meningkatkan
            pemahaman terhadap materi pemrograman, mengembangkan keterampilan praktis,
            serta siap menghadapi dunia kerja, PKL, dan perkembangan teknologi di masa depan.
        </p>
    </div>

</div>

<!-- FOOTER -->
<footer>
    © {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

</body>
</html>
