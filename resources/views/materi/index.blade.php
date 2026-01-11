<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog RPL | SMK Muhammadiyah Tasikmalaya</title>

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            opacity: 0.9;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .search-box input {
            padding: 8px 12px;
            border-radius: 20px;
            border: none;
            outline: none;
        }

        header {
            text-align: center;
            color: white;
            padding: 40px 20px 20px;
        }

        .container {
            width: 85%;
            margin: auto;
        }

        .card {
            background: rgba(255,255,255,0.95);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            font-size: 12px;
            border-radius: 20px;
            background: #0d6efd;
            color: white;
            margin-bottom: 10px;
        }

        .card h3 {
            margin: 10px 0;
            color: #0d6efd;
        }

        .meta {
            font-size: 13px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: white;
            font-size: 13px;
            opacity: 0.85;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>
        <strong>Blog RPL</strong>
        <ul>
            <li><a href="/beranda">Beranda</a></li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/matapelajaran">Mata Pelajaran</a></li>
            <li><a href="/edukasi">Edukasi</a></li>
            <li><a href="/kelas">Kelas</a></li>
            <li><a href="/quiz">Quiz</a></li>
            <li><a href="/logout" style="color: #ff6666;">Logout</a></li>
        </ul>
    

        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari materi..." onkeyup="cariMateri()">
        </div>
        
        <script>
        function cariMateri() {
            let keyword = document.getElementById('searchInput').value.toLowerCase();
            let cards = document.querySelectorAll('.card');
        
            cards.forEach(card => {
                let text = card.textContent.toLowerCase();
                card.style.display = text.includes(keyword) ? 'block' : 'none';
            });
        }
        </script>
        

    
</nav>

<header>
    <h1>Blog Pembelajaran Rekayasa Perangkat Lunak</h1>
    <p>Media Pembelajaran Siswa RPL – SMK Muhammadiyah Tasikmalaya</p>
</header>

<div class="container">

    <!-- KELAS X -->
    <div class="card">
        <span class="badge">Kelas X RPL</span>
        <h3>Pengenalan Rekayasa Perangkat Lunak</h3>
        <div class="meta">Materi Dasar</div>
        <p>
            Rekayasa Perangkat Lunak (RPL) adalah bidang yang mempelajari cara
            merancang, membuat, dan memelihara perangkat lunak secara sistematis.
            Siswa akan dikenalkan dengan konsep algoritma, flowchart, dan dasar pemrograman.
        </p>
    </div>

    <!-- KELAS XI -->
    <div class="card">
        <span class="badge">Kelas XI RPL</span>
        <h3>Dasar Pemrograman PHP</h3>
        <div class="meta">Backend Web</div>
        <p>
            PHP adalah bahasa pemrograman server-side yang digunakan untuk membuat
            website dinamis. Materi ini membahas variabel, percabangan, perulangan,
            dan koneksi database MySQL.
        </p>
    </div>

    <!-- KELAS XII -->
    <div class="card">
        <span class="badge">Kelas XII RPL</span>
        <h3>Framework Laravel untuk Aplikasi Web</h3>
        <div class="meta">Framework Modern</div>
        <p>
            Laravel merupakan framework PHP berbasis MVC yang memudahkan pengembangan
            aplikasi web. Materi meliputi routing, controller, model, blade, dan CRUD.
        </p>
    </div>

    <!-- BOOTSTRAP -->
    <div class="card">
        <span class="badge">Desain Web</span>
        <h3>Bootstrap 5 untuk Tampilan Responsif</h3>
        <div class="meta">Frontend</div>
        <p>
            Bootstrap adalah framework CSS yang membantu membuat tampilan website
            menjadi responsif dan menarik. Materi ini membahas grid system,
            navbar, card, dan form.
        </p>
    </div>

</div>

<footer>
    © {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

</body>
</html>
