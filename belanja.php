<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>
    <form method="post">
        <h1>Program Belanja</h1>
        <label for="nomor">No Transaksi : </label>
        <input type="number" name="nomor"><br><br>

        <label for="nama">Nama Pembeli : </label>
        <input type="text" name="nama"><br><br>

        <label for="buku">Nama Buku : </label>
        <input type="text" name="buku"><br><br>

        <label for="jumlah_buku">Jumlah Buku : </label>
        <input type="number" name="jumlah_buku"><br><br>

        <label for="harga">Harga Buku : </label>
        <input type="number" name="harga"><br><br>

        <input type="submit" value="submit">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomor = $_POST["nomor"];
        $nama = $_POST["nama"];
        $buku = $_POST["buku"];
        $jumlah_buku = $_POST["jumlah_buku"];
        $harga = $_POST["harga"];

        $total_belanja = $harga*$jumlah_buku;
        $diskon_belanja = 0;
        $diskon_transaksi = 0;
        $total_bayar = 0;

        echo "No. Transaksi : $nomor <br>";
        echo "Nama Pembeli : $nama <br>";
        echo "Nama Buku : $buku <br>";
        echo "Harga Buku : $harga <br>";
        echo "Jumlah Buku : $jumlah_buku <br>";
        echo "Harga Total : $total_belanja <br>";
       
        if ($total_belanja   > 150000 ) { 
            $diskon_belanja = 0.1 * $total_belanja;
            echo "Diskon Belanja (10%) : Rp. $diskon_belanja <br>";
        }

        if ($nomor <= 50) {
            $diskon_transaksi = 0.05 * $total_belanja;
            echo "Diskon Transaksi (5%) : Rp. $diskon_transaksi <br>";
        }
        
        $total_bayar = $total_belanja - $diskon_belanja - $diskon_transaksi;
        echo "Total Bayar : $total_bayar <br>";
    }
    ?>
</body>
</html>
