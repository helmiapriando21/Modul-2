<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konser Musik</title>
    <link rel="stylesheet" href="css/tubes.css">
</head>

<body>
    <nav>
        <h1 class="Brand">HA Harmony</h1>
        <span class="menu">
            <a href="">Contact</a>
            <a href="">Login</a>
        </span>
   
    </nav>
    <div class="header">
        <p>Lokasi Konser: Nama Kota, Negara Konser</p>
        <p>Tahun: Tahun Konser</p>

        <div class="desc">
            <h2>Deskripsi Event Konser</h2>
            <p>Deskripsi tentang jadwal konser dan artis mendatang.</p>
        </div>
    </div>
    <div class="content">

        <h2>Informasi Harga Tiket</h2>
        <p id="hargaDisplay">Tiket tersedia mulai dari harga Rp.xxx.xxx.xx.</p>
        <input type="range" id="hargaSlider" min="0" max="100.000.000" value="50">
        <a href="#" class="ticket-button">Beli Tiket</a>
        <button id="tombolDarkMode">Dark Mode</button>
    </div>
    <script src="js/tubes.js"></script>
</body>

</html>
