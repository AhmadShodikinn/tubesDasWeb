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
                        <a href="#">Tambah Menu</a>
                        </div>
                    </div>
                </li>
                <li><a href="./reservasi.php">reservasi</a></li>
            </ul>
        </nav>
        <a href="./tambahReservasi.php" class="btn"><button class="btnPesan">Pesan Sekarang</button></a>
    </header>

    <div class="main">      
    <h3 class="namatable">FORM TAMBAH MENU</h3><br>
    <div class="form">
        <form method="POST">
            <div>
                <label for="name">Nama Menu</label>
                <input id="name" name="nama_menu" type="text" />
            </div>
            <div>
                <label for="comp">Jenis</label>
                <select id="comp" name="jenis">
                    <option value="Makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>
            <div>
                <label for="name">Harga</label>
                <input id="harga" name="harga" type="text"/>
            </div>
            <div class="full-width"><br>
                <button class="ctaMenu" id="btn" type="submit" name="action" value="create">Send Response</button>
                <button class="ctaMenu" id="btn" type="reset">Clear Form</button>
            </div>
        </form>
        </div>

        <?php 
            include 'koneksi.php';

            $action = isset($_POST['action']) ? $_POST['action'] : "";
  
            if($action=='create'){ //cek button create dijalankan atau tidak
            $id_menu = null;
            $nama_menu =  $_POST['nama_menu'];
            $jenis =  $_POST['jenis'];;
            $harga = $_POST['harga'];

            $sql = "INSERT INTO menu(id_menu,nama_menu,jenis,harga) VALUES ('$id_menu','$nama_menu','$jenis', '$harga')";

            if($nama_menu !=''&& $jenis !=''&& $harga !=''){ //cek kolom terisi atau tidak
                if(mysqli_query($mysqli, $sql)){ //cek data diterima oleh sql atau tidak
                    echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Succesfully Updated');
                            window.location.href='menu.php';
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
        <script>
            var dengan_rupiah = document.getElementById('harga');
            harga.addEventListener('keyup', function(e)
            {
                harga.value = formatRupiah(this.value, 'Rp. ');
            });
            
            /* Fungsi */
            function formatRupiah(angka, prefix)
            {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split    = number_string.split(','),
                    sisa     = split[0].length % 3,
                    rupiah     = split[0].substr(0, sisa),
                    ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                    
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
                
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
        </script>

    </div>
</body>
</html>