<?php include "../Partials/head.php" ?>
<?php include "../Partials/navbar.php" ?>

    <?php
        if(isset($_POST['submit'])){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $photo = "img.jpg";
        
            $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim,nama,prodi,photo) VALUES ('$nim','$nama','$prodi','$photo')");

            header('location:mahasiswa.php');
        }
    ?>

    
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <select class="form-control" name="prodi" id="input" required="required">
                        <option value="">Pilih Program Studi</option>
                        <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM tbl_prodi");
                        while ($data = mysqli_fetch_array($query)){
                        ?>
                        <option value="<?= $data['id_prodi']?>"><?= $data['nm_prodi']?></option>
                        <?php }?>
                        <!-- <option selected>Pilih Program Studi</option>
                        <option value="1">S1 - Teknik Informatika</option>
                        <option value="2">S1 - Sistem Informasi</option>
                        <option value="3">S1 - Network Engginer</option> -->
                </select>
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <p><input type='file' name='foto' accept='image/*'  /></p>
            </div>
            <div class="form-group">
                <button type="submit" name= "submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
    </div>

<?php include "../Partials/foot.php" ?>