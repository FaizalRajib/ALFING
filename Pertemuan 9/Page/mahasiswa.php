<?php include "../Partials/head.php" ?>
<?php include "../Partials/navbar.php" ?>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Data Mahasiswa</h1>
    </div>

    <a href= "tambah_mahasiswa.php" class="btn btn-success">Tambah Data</a>
    <table class="mt-4 table table-stripped">
        <thead>
            <tr>
                <th>NO</th>
                <th width ="10%">Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
                while ($data = mysqli_fetch_array($query)){
                
            ?>
            <tr>
                <td><?= $no ?></td>
                <td>
                    <img class="img-fluid" style="width:50px" src="asset/img/<?= $data['photo']?>" alt="">
                </td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['prodi'] ?></td>
                <td>
                    <a href="detail.php?i=d<?= $data['id']?>" class="btn btn-primary">Detail</a>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
                $no++;
                }
            ?>
        </tbody>
    </teble>
</main><!-- /.container -->

<?php include "../Partials/foot.php" ?>