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
                        <a href="#">Tambah Pegawai</a>
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
    <h3 class="namatable">FORM TAMBAH PEGAWAI</h3><br>
        <div class="containerForm">
        <form action="" method="POST">
            <div>
                <label for="name">Nama Pegawai</label>
                <input id="name" name="nama_pegawai" type="text" />
            </div>
            <div>
                <label for="nomor_hp">Nomor Handphone</label>
                <input id="name" name="nomor_hp" type="text" />
            </div>
            <div>
                <label for="comp">Status Pegawai (AUTO)</label>
                <select id="comp" name="status_pegawai" disabled>
                    <option value="aktif">Aktif</option>
                    <option value="izin">Izin</option>
                    <option value="sakit">Sakit</option>
                    <option value="non-aktif">Non-Aktif</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div>
            <label for="comp">Jenis Kelamin</label>
            <select id="comp" name="jenis_kelamin">
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">perempuan</option>
            </select>
            </div>
            <div class="full-width">
                <label for="message">Alamat</label>
                <textarea id="message" name="alamat_pegawai"></textarea>
            </div>
            <div class="full-width"><br>
                <!-- <input type="hidden" name='action' value='create'> -->
                <button class="cta" id="btn" type="submit" name="action" value="create">Send Response</button>
                <button class="cta" id="btn" type="reset">Clear Form</button>
            </div>
        </form>
        </div>

        <?php 
            include 'koneksi.php';

            $action = isset($_POST['action']) ? $_POST['action'] : "";
  
            if($action=='create'){ //cek button create dijalankan atau tidak
            $id_pegawai = null;
            $nama_pegawai =  $_POST['nama_pegawai'];
            $nomor_hp =  $_POST['nomor_hp'];
            $status_pegawai = 'aktif';
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat_pegawai = $_POST['alamat_pegawai'];

            $sql = "INSERT INTO crew(id_pegawai,nama_pegawai,alamat,jenis_kelamin,no_hp,status) VALUES ('$id_pegawai','$nama_pegawai','$alamat_pegawai', '$jenis_kelamin', '$nomor_hp','$status_pegawai')";

            if($nama_pegawai !=''&& $alamat_pegawai !=''&& $nomor_hp !=''){ //cek kolom terisi atau tidak
                if(mysqli_query($mysqli, $sql)){ //cek data diterima oleh sql atau tidak
                    echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Succesfully Updated');
                            window.location.href='crew.php';
                            </script>");
                            
                } else{ 
                    echo "<h3 style='color : white'>ERROR: Hush! Sorry $sql. "
                        . mysqli_error($mysqli) ."</h3>";
                }
            } else { 
                echo ("<script LANGUAGE='JavaScript'>
                            window.alert('GAGAL!!!! Kolom belum terisi sepenuhnya!');
                            </script>");
            }
        }else{
            // echo"Gagal menambahkan data";
        }
             
        ?>

    </div>
</body>
</html>