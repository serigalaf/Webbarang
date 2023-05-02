<html lang="en">
<head><title></title></head>
<body>
    <div>
        <div>
            <h1> FPEB </h1>
            <p> Halaman menambahkan data Anggota </p>
        </div>

        <div>
            <ul>
                <li><a href="index.php"> Tampil Data </a></li>
                <li><a href="tambah_data.php"> Input Data </a></li>
            </ul>
        </div>

        <div>
            <form method="post" action="aksi_tambah.php">
                <div>
                        <div>
                            <input type="text" id="anggota" name="idanggota" placeholder="ID anggota">
                        </div>  
                        <br>
                        <div class="col-sm-6">
                            <input type="text" id="nama" placeholder="Nama lengkap">
                        </div>
                        <br>

                        <div>
                            <legend> Jenis Kelamin </legend>
                        <div>
                            <div>
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="pria" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    pria
                                </label>
                            </div>

                            <div>
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="wanita">
                                <label class="form-check-label" for="gridRadios2">
                                    wanita
                                </label>
                            </div>
                            <br>
                    </div>
                    <br>
                    <div>
                        <div><input type="text" id="status" placeholder="Status">
                        </div>
                        <br>
                        <div>
                            <input type="submit" id="kirim" name="kirim" value="Kirim">
                        </div>
                        <br>
                            
                </div>

            </form>

        </div>
        </div>
    <div></div>
</div>

    
</body>
</html>
