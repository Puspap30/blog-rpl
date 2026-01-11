<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Materi</title>
</head>
<body>

<h2>Tambah Materi RPL</h2>

<form method="POST" action="/materi/simpan">
    @csrf
    <input type="text" name="judul" placeholder="Judul" required><br><br>
    <input type="text" name="kelas" placeholder="Kelas" required><br><br>
    <textarea name="isi" placeholder="Isi Materi" required></textarea><br><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
