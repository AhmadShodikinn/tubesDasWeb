<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kuy</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h2 class="title">PESEN KUY</h2>
        <nav>
        <ul class="nav_links">
                <li><a href="./index.php">Halaman Depan</a></li>
                <li>
                    <div class="dropdown">
                        <h4 class="dropbtn">Pegawai</h4>
                        <div class="dropdown-content">
                        <a href="./crew.php">List Pegawai</a>
                        <a href="./tambahcrew.php">Tambah Pegawai</a>
                        </div>
                    </div>
                </li>
                <li>
                <div class="dropdown">
                        <h4 class="dropbtn">Menu
                        </h4>
                        <div class="dropdown-content">
                        <a href="./menu.php">List Menu</a>
                        <a href="./tambahmenu.php">Tambah Menu</a>
                        </div>
                    </div>
                </li>
                <li><a href="./reservasi.php">reservasi</a></li>
            </ul>
        </nav>
        <a href="#" class="btn"><button class="btnPesan">Pesan Sekarang</button></a>
    </header>

    <div class="main">      
    <h3 class="namatable">FORM TAMBAH PEMESANAN</h3><br>
    <div class="containerForm">
        <form>
            <div>
            <label for="comp">Nama Pegawai</label>
            <select id="comp">

                <option value="cash">CASH</option>
                <option value="kartukredit">KARTU KREDIT</option>
            </select>
            </div>
            <div>
                <label for="name">Nama Pembeli</label>
                <input id="name" name="nama_pembeli" type="text" />
            </div>
            <div>
                <label for="name">jumlah porsi</label>
                <input id="name" name="jumlah_porsi" type="text" />
            </div>
            <div>
            <label for="comp">Metode Pembayaran</label>
            <select id="comp">
                <option value="cash">CASH</option>
                <option value="kartukredit">KARTU KREDIT</option>
            </select>
            </div>
            <div class="full-width">
                <label for="message">Alamat Pembeli</label>
                <textarea id="message" name="alamat_pembeli"></textarea>
            </div>
            <div class="full-width"><br>
                <button class="cta" id="btn" type="submit">Send Response</button>
                <button class="cta" id="btn" type="reset">Clear Form</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>