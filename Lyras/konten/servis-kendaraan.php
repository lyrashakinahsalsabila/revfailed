<h1>Servis Kendaraan</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?menu=tambah-servis-kendaraan" class="btn btn-light">Tambah Data Servis</a>
        <br>
        </br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Servis</th>
                    <th scope="col">Tipe/Merek</th>
                    <th scope="col">Servis</th>
                    <th scope="col">Total</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>

            <?php
            $q = mysqli_query($con, "select * from servis");
            $nomor = 1;
            while ($row = mysqli_fetch_assoc($q)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?= $row['tanggal_servis']; ?></td>
                    <td><?= $row['merek']; ?></td>
                    <td><?= $row['servis']; ?></td>
                    <td><?= $row['total']; ?></td>
                    <td><?= $row['photo']; ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                    </td>



                </tr>

            <?php } ?>

        </table>
    </div>
</div>