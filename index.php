
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head><title></title></head>

<body>
    <div>
        <div>
            <h1> Menampilkan data Mysql </h1>
            <h1> iyeu naon </h1>
            <p>Halaman menampilkan data MY Sql</p>
        </div>

        <ul>
            <li><a href="index.php"> Tampil data </a></li>
            <br>
            <li><a href="tambah_data.php"> Tambah data </a></li>
            <br>
            <li><a href="logout.php"> Logout? </a></li>

        </ul>
        </div>
<div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $no = 1;
                $data = mysqli_query($link,"select * from tbanggota");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['idanggota']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['jeniskelamin']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['status']; ?></td>
                        <td>
                            <a href="edit.php?idanggota=<?php echo $d['idanggota']; ?>"> EDIT</a>
                            <a href="hapus.php?idanggota=<?php echo $d['idanggota']; ?>"> HAPUS</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

</div>
<div></div>

</div>
</body>

    
</html>
