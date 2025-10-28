<?php 
include("koneksi.php"); 
 
// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 
 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
     <meta charset="UTF-8"> 
    <link href="style.css" rel="stylesheet" type="text/css" /> 
    <title>Data Barang</title> 
</head> 
<body> 
    <div class="container"> 
        <h1>Data Barang</h1> 
        <div class="main"> 
            <table> 
            <tr> 
                <th>Gambar</th> 
                <th>Nama Barang</th> 
                <th>Katagori</th> 
                <th>Harga Jual</th> 
                <th>Harga Beli</th> 
                <th>Stok</th> 
                <th>Aksi</th> 
            </tr> 
            <?php if($result): ?> 
            <?php while($row = mysqli_fetch_array($result)): ?> 
            <tr> 
                <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= 
$row['nama'];?>"></td> 
                <td><?= $row['nama'];?></td> 
                <td><?= $row['kategori'];?></td> 
                <td><?= $row['harga_beli'];?></td> 
                <td><?= $row['harga_jual'];?></td> 
                <td><?= $row['stok'];?></td> 
                <td><?= $row['id_barang'];?></td> 
            </tr> 
            <?php endwhile; else: ?> 
            <tr> 
                <td colspan="7">Belum ada data</td> 
            </tr> 
            <?php endif; ?> 
            </table> 
        </div> 
    </div> 
</body> 
</html>
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <link href="style.css" rel="stylesheet" type="text/css" /> 
    <title>Tambah Barang</title> 
</head> 
<body> 
<div class="container"> 
    <h1>Tambah Barang</h1> 
    <div class="main"> 
        <form method="post" action="tambah.php" 
enctype="multipart/form-data"> 
            <div class="input"> 
                <label>Nama Barang</label> 
                <input type="text" name="nama" /> 
            </div> 
            <div class="input"> 
                <label>Kategori</label> 
                <select name="kategori"> 
                    <option value="Komputer">Komputer</option> 
                    <option value="Elektronik">Elektronik</option> 
                    <option value="Hand Phone">Hand Phone</option> 
                </select> 
            </div> 
            <div class="input"> 
                <label>Harga Jual</label> 
                <input type="text" name="harga_jual" /> 
            </div> 
            <div class="input"> 
                <label>Harga Beli</label> 
                <input type="text" name="harga_beli" /> 
            </div> 
            <div class="input"> 
                <label>Stok</label> 
                <input type="text" name="stok" /> 
            </div> 
            <div class="input"> 
                <label>File Gambar</label> 
                <input type="file" name="file_gambar" /> 
            </div> 
            <div class="submit"> 
                <input type="submit" name="submit" value="Simpan" /> 
            </div> 
        </form> 
    </div>
</div> 
</body> 
</html> 
