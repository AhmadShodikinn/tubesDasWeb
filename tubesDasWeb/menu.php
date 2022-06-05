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
                        <a href="#">List Menu</a>
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
    <h3 class="namatable">LIST MENU</h3><br>
    
    <?php
        include 'koneksi.php';

        $action = isset($_GET['action']) ? $_GET["action"] : "";

        $query = "SELECT * FROM menu";
        $result = $mysqli -> query($query);
        $num_results = $result->num_rows;

        // echo"<div><a href='tambah.php'>Tambah Data Baru</a></div>";

        if($num_results>0){
            echo"<table>";
            echo"<tr>";
                echo"<th>ID Menu</th>";
                echo"<th>Nama Menu</th>";
                echo"<th>Jenis Menu</th>";
                echo"<th>Harga Porsi</th>";
                echo"<th>Aksi</th>";
            echo"</tr>";

            while ($row = $result -> fetch_assoc()) {
                extract($row);
                echo "<tr>";
                    echo "<td>".$id_menu."</td>\n";
                    echo "<td>".$nama_menu."</td>\n";
                    echo "<td>".$jenis."</td>\n";
                    echo "<td>".$harga."</td>\n";
                    echo "<td>";
                        echo("<a href='edit.php?id={$id_menu}'>Edit</a>");
                        echo("/");

                        echo("<a href='#' onclick='delete_data({$id_menu});'>Hapus</a>");

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