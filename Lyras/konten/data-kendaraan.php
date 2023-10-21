<h1>Data kendaraan</h1>
<div class="row">
    <div class="col-md-12">

        <a href="?menu=tambah-data-kendaraan" class="btn btn-light">Tambah Data Kendaraan</a>
        <br>
        </br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Merek</th>
                    <th scope="col">No Polisi</th>
                    <th scope="col">Tanggal Pajak</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>

              
            <?php



            $q = mysqli_query($con, "select * from kendaraan");
            $nomor = 1;
            while ($row = mysqli_fetch_assoc($q)) {
            ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?= $row['jenis_kendaraan']; ?></td>
                    <td><?= $row['merek']; ?></td>
                    <td><?= $row['no_polisi']; ?></td>
                    <td><?= $row['tanggal_pajak']; ?></td>
                    <td><?= $row['kondisi']; ?></td>
                    <td><?= $row['photo']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                    <td><img src=“<?$row['photo']; ?>” width=“100” alt=“foto”></td>


                </tr>

            <?php } ?>

            </tbody>
        </table>
    </div>
</div>