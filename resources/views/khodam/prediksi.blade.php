<!DOCTYPE html>
<html>
<head>
    <title>Prediksi Khodam</title>
</head>
<body>
    <h1>Prediksi Khodam</h1>
    <form action="/prediksi" method="post">
        @csrf
        <label for="nama">Masukkan Nama Untuk Cek Khodam</label>
        <input type="text" id="nama" name="nama" required>
        <button type="submit">Submit</button>
    </form>

    @if (isset($khodam))
        <h2>Hai, {{ $nama }}! Khodam kamu adalah {{ $khodam }}.</h2>
    @endif
</body>
</html>
