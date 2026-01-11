<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Quiz RPL | Blog Edukasi RPL</title>

<style>
*{
    box-sizing:border-box;
    font-family:'Segoe UI',Tahoma,sans-serif;
}

body{
    margin:0;
    background:linear-gradient(120deg,#0f2027,#203a43,#2c5364,#5f2c82,#49a09d);
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
    font-size:18px;
    font-weight:600;
}

.btn-back{
    padding:10px 20px;
    background:linear-gradient(135deg,#00c6ff,#0072ff);
    color:white;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
    box-shadow:0 6px 15px rgba(0,0,0,0.35);
}

.btn-back:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(0,0,0,0.5);
}

header{
    text-align:center;
    padding:50px 20px 30px;
}

header h1{
    margin-bottom:10px;
    font-size:32px;
}

header p{
    opacity:0.9;
}

.container{
    width:85%;
    margin:auto;
}

.card{
    background:rgba(255,255,255,0.95);
    color:#333;
    padding:25px;
    border-radius:18px;
    box-shadow:0 12px 30px rgba(0,0,0,0.35);
    margin-bottom:25px;
}

.card h2{
    color:#0d6efd;
}

.badge{
    display:inline-block;
    padding:6px 14px;
    background:linear-gradient(135deg,#36d1dc,#5b86e5);
    color:white;
    border-radius:20px;
    font-size:13px;
    margin-bottom:10px;
}

ul{
    padding-left:20px;
}

li{
    margin-bottom:10px;
}

.quiz-question{
    margin:15px 0;
}

.quiz-options label{
    display:block;
    margin:5px 0;
}

.btn-submit{
    margin-top:10px;
    padding:10px 20px;
    background:linear-gradient(135deg,#36d1dc,#5b86e5);
    color:white;
    border:none;
    border-radius:30px;
    cursor:pointer;
    font-weight:600;
}

#quiz-result{
    margin-top:15px;
    font-weight:bold;
}

footer{
    text-align:center;
    padding:20px;
    opacity:0.85;
    margin-top:30px;
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
    <div class="nav-wrapper">
        <div class="nav-title">Blog RPL</div>
        <a href="javascript:history.back()" class="btn-back">← Kembali</a>
    </div>
</nav>

<header>
    <h1>Quiz & Video Tutorial RPL</h1>
    <p>Uji pengetahuanmu dan pelajari materi dengan video</p>
</header>

<div class="container">

<!-- KELAS X -->
<div class="card">
    <span class="badge">Kelas X</span>
    <h2>Materi Dasar & Quiz</h2>
    <ul>
        <li>Pengenalan Rekayasa Perangkat Lunak - <a href="https://www.youtube.com/watch?v=7Q_JLyUJulI&list=PLkdbZ8FxO6CDMXFIhU1eYv6Mw8V6GWPq6" target="_blank">🎥 Video Tutorial</a></li>
        <li>Algoritma & Flowchart - <a href="https://www.youtube.com/watch?v=U3iAQvfRw4g&pp=ygUVQWxnb3JpdG1hICYgRmxvd2NoYXJ0" target="_blank">🎥 Video Tutorial</a></li>
        <li>HTML & CSS Dasar - <a href="https://www.youtube.com/watch?v=wriGST3vp5M&list=PLZS-MHyEIRo5c56EM3NBWpCnb4naBZvXh" target="_blank">🎥 Video Tutorial</a></li>
    </ul>

    <h3>Quiz Kelas X</h3>
    <div class="quiz-question">
        <p>1. Algoritma adalah …</p>
        <div class="quiz-options">
            <label><input type="radio" name="qX1" value="0"> Hanya kode program</label>
            <label><input type="radio" name="qX1" value="1"> Langkah-langkah logis menyelesaikan masalah</label>
            <label><input type="radio" name="qX1" value="0"> Hanya diagram</label>
        </div>
    </div>

    <div class="quiz-question">
        <p>2. Flowchart digunakan untuk …</p>
        <div class="quiz-options">
            <label><input type="radio" name="qX2" value="1"> Memvisualisasikan algoritma</label>
            <label><input type="radio" name="qX2" value="0"> Menulis kode PHP</label>
            <label><input type="radio" name="qX2" value="0"> Membuat database</label>
        </div>
    </div>

    <button class="btn-submit" onclick="cekQuiz('X')">Submit Kelas X</button>
    <div id="quiz-result-X"></div>
</div>

<!-- KELAS XI -->
<div class="card">
    <span class="badge">Kelas XI</span>
    <h2>Pemrograman Lanjutan & Quiz</h2>
    <ul>
        <li>PHP & MySQL - <a href="https://www.youtube.com/watch?v=ck0gV507ZSk&list=PLzt0WdHR1Z3mIO8sTcb_obvC5JmL_b-Fg" target="_blank">🎥 Video Tutorial</a></li>
        <li>CRUD PHP & Database - <a href="https://www.youtube.com/watch?v=ZgNH0UfakeM&pp=ygUTQ1JVRCBQSFAgJiBEYXRhYmFzZQ%3D%3D" target="_blank">🎥 Video Tutorial</a></li>
        <li>Bootstrap & Frontend Dinamis - <a href="https://www.youtube.com/watch?v=MCVkMmYL-aY&pp=ygUcQm9vdHN0cmFwICYgRnJvbnRlbmQgRGluYW1pcw%3D%3D" target="_blank">🎥 Video Tutorial</a></li>
    </ul>

    <h3>Quiz Kelas XI</h3>
    <div class="quiz-question">
        <p>1. Fungsi PHP untuk mencetak teks adalah …</p>
        <div class="quiz-options">
            <label><input type="radio" name="qXI1" value="1"> echo()</label>
            <label><input type="radio" name="qXI1" value="0"> printScreen()</label>
            <label><input type="radio" name="qXI1" value="0"> write()</label>
        </div>
    </div>

    <div class="quiz-question">
        <p>2. Perintah CRUD digunakan untuk …</p>
        <div class="quiz-options">
            <label><input type="radio" name="qXI2" value="1"> Mengelola data di database</label>
            <label><input type="radio" name="qXI2" value="0"> Membuat flowchart</label>
            <label><input type="radio" name="qXI2" value="0"> Menulis HTML</label>
        </div>
    </div>

    <button class="btn-submit" onclick="cekQuiz('XI')">Submit Kelas XI</button>
    <div id="quiz-result-XI"></div>
</div>

<!-- KELAS XII -->
<div class="card">
    <span class="badge">Kelas XII</span>
    <h2>Framework & Industri & Quiz</h2>
    <ul>
        <li>Laravel MVC - <a href="https://www.youtube.com/watch?v=0YVezcIXCHY&list=PLjRBWix725xrlCyUYupRtOFJSLfrPh3Os" target="_blank">🎥 Video Tutorial</a></li>
        <li>Authentication & Login - <a href="https://www.youtube.com/watch?v=TFsU94JMS_Y&list=PLBs-bxLCgCx-emg0XfU2AXDCsjyppJmFY" target="_blank">🎥 Video Tutorial</a></li>
        <li>Deployment & PKL - <a href="https://youtu.be/vA0C0k72-b4?si=8qSKge_vogG9f0St" target="_blank">🎥 Video Tutorial</a></li>
    </ul>

    <h3>Quiz Kelas XII</h3>
    <div class="quiz-question">
        <p>1. MVC pada Laravel berarti …</p>
        <div class="quiz-options">
            <label><input type="radio" name="qXII1" value="1"> Model, View, Controller</label>
            <label><input type="radio" name="qXII1" value="0"> Main, View, Code</label>
            <label><input type="radio" name="qXII1" value="0"> Module, Variable, Class</label>
        </div>
    </div>

    <div class="quiz-question">
        <p>2. Authentication digunakan untuk …</p>
        <div class="quiz-options">
            <label><input type="radio" name="qXII2" value="1"> Mengatur login pengguna</label>
            <label><input type="radio" name="qXII2" value="0"> Membuat diagram alur</label>
            <label><input type="radio" name="qXII2" value="0"> Menampilkan video tutorial</label>
        </div>
    </div>

    <button class="btn-submit" onclick="cekQuiz('XII')">Submit Kelas XII</button>
    <div id="quiz-result-XII"></div>
</div>

</div>

<footer>
    © {{ date('Y') }} Blog RPL – SMK Muhammadiyah Tasikmalaya
</footer>

<script>
function cekQuiz(kelas){
    let score = 0;
    let questions;

    if(kelas==='X'){
        questions = ['qX1','qX2'];
    } else if(kelas==='XI'){
        questions = ['qXI1','qXI2'];
    } else if(kelas==='XII'){
        questions = ['qXII1','qXII2'];
    }

    questions.forEach(q=>{
        const answer = document.querySelector(`input[name="${q}"]:checked`);
        if(answer) score += parseInt(answer.value);
    });

    document.getElementById(`quiz-result-${kelas}`).innerText = `Skor kamu: ${score}/${questions.length}`;
}
</script>

</body>
</html>
