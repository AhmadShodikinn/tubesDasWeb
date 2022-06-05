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
                        <a href="#">List Pegawai</a>
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
        <a href="./tambahReservasi.php" class="btn"><button class="btnPesan">Pesan Sekarang</button></a>
    </header>

    <div class="main">      
    <h3 class="namatable">LIST PEGAWAI</h3><br>

    <?php
        include 'koneksi.php';

        $action = isset($_GET['action']) ? $_GET["action"] : "";

        $query = "SELECT * FROM crew";
        $result = $mysqli -> query($query);
        $num_results = $result->num_rows;

        // echo"<div><a href='tambah.php'>Tambah Data Baru</a></div>";

        if($num_results>0){
            echo"<table>";
            echo"<tr>";
                echo"<th>ID pegawai</th>";
                echo"<th>Nama Pegawai</th>";
                echo"<th>Alamat</th>";
                echo"<th>Jenis Kelamin</th>";
                echo"<th>No hp</th>";
                echo"<th>Status</th>";
                echo"<th>Aksi</th>";
            echo"</tr>";

            while ($row = $result -> fetch_assoc()) {
                extract($row);
                echo "<tr>";
                    echo "<td>".$id_pegawai."</td>\n";
                    echo "<td>".$nama_pegawai."</td>\n";
                    echo "<td>".$alamat."</td>\n";
                    echo "<td>".$jenis_kelamin."</td>\n";
                    echo "<td>".$no_hp."</td>\n";
                    echo "<td>".$status."</td>\n";
                    echo "<td>";
                        echo("<a href='edit.php?id={$id_pegawai}'>Edit</a>");
                        echo("/");

                        echo("<a href='#' onclick='delete_data({$id_pegawai});'>Hapus</a>");

                    echo "</td>";
                echo "<tr>\n";
            }
            echo "</table>";
        }else{
        echo"Data tidak ditemukan";
        }

        $result->free();
        $mysqli->close();
	?>
    </div>
</body>
</html>