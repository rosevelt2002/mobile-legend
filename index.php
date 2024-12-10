<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function tampilkanTanggal() {
            const hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat","Sabtu"];
            const bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "OKtober", "November", "Desember"];

            const sekarang = new Date();
            const namaHari = hari [sekarang.getDay()];
            const tanggal = sekarang.getDay();
            const namaBulan = bulan[sekarang.getMonth()];
            const tahun = sekarang.getFullYear();

            const tanggallengkap = namaHari + ", " + tanggal + " " + namaBulan + " " + tahun;
            document.getElemenById("tanggal-hari-ini").innerHTML = tanggalLengkap; 
        }
        
        window.onload = function() {
            tampilkantanggal();
        } 
        </script>
</head>
<body>
    <?php include "layout/header.html" ?>

    <main>
        <p> Halo Selamat Datang di Website Kami</p>
    </main>
    
    <?php include "layout/footer.html" ?>
</body>
</html>