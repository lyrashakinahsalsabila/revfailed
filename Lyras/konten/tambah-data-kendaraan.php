<h2>Tambah Data kendaraan</h2>
<?php

if (isset($_POST["simpan"])) {

    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $merek = $_POST['merek'];
    $no_polisi = $_POST['no_polisi'];
    $tanggal_pajak = $_POST['tanggal_pajak'];
    $kondisi = $_POST['kondisi'];
    $keterangan = $_POST['keterangan'];

    $target_dir = 'foto/';
    $target_file = $target_dir . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        $query = "insert into kendaraan values (
              NULL,
              '$jenis_kendaraan',
              '$merek',
              '$no_polisi',
              '$tanggal_pajak',
              '$kondisi'
              '$target_file'
              '$keterangan'
              NOW(),
              )";
        $q = mysqli_query($konek, $query);
        if ($q) {
            $pesan = "<div class='alert alert-success'>Photo berhasil dikirim.</div>";
        } else {
            $pesan = "<div class='alert alert-danger'>Terjadi kesalahan.</div>";
        }
    }





    $simpan = "INSERT INTO kendaraan VALUES(NULL,'$jenis_kendaraan','$merek','$no_polisi','$tanggal_pajak','$kondisi','$target_file','$keterangan')";

    mysqli_query($con, $simpan);

    if (mysqli_affected_rows($con)) {
        header("location: ?menu=data-kendaraan");
    } else {
        mysqli_error($con);
    }
}
?>


<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="form-control">
                            <label for="">Jenis Kendaraan</label>
                            <select name="jenis_kendaraan" id="" required>
                                <option value="Roda Dua">Roda Dua</option>
                                <option value="Roda Empat">Roda Empat</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Merek</label>
                            <input type="text" name="merek" placeholder="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No Polisi</label>
                            <textarea class="form-control" name="no_polisi" placeholder="" 4"></textarea>
                        </div>

                        <div class="form-control">
                            <label for="nm">Tanggal Pajak</label>
                            <input type="date" name="tanggal_pajak" id="nm">
                        </div>

                        <div class="form-control">
                            <label for="">Kondisi</label>
                            <select name="kondisi" id="" required>
                                <option value="Rusak Ringan">Rusak Ringan</option>
                                <option value="Rusak Parah">Rusak Parah</option>
                                <option value="Tidak Ada Kerusakan">Tidak Ada Kerusakan</option>
                            </select>
                        </div>
                        <div class="form-control">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" id="nm">
                        </div>

                        <div class="form-control">
                            <label for="">Keterangan</label>
                            <select name="keterangan" id="" required>
                                <option value="ada">ada</option>
                                <option value="bengkel">bengkel</option>
                            </select>
                        </div>



                        <button type="submit" name="simpan" class="btn btn-success">SIMPAN</button>
                        <a href="?menu=data-kendaraan" class="btn btn-warning">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
