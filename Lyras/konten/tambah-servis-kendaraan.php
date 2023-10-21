<h2> Tambah Data Servis</h2>

<?php

if (isset($_POST["simpan"])) {

    $tanggal_servis = $_POST['tanggal_servis'];
    $merek = $_POST['merek'];
    $servis = $_POST['servis'];
    $total = $_POST['total'];
    $photo = $_POST['photo'];

    $simpan = "INSERT INTO servis VALUES(NULL,'$tanggal_servis','$merek','$servis','$total','$photo')";

    mysqli_query($con, $simpan);

    if (mysqli_affected_rows($con)) {
        header("location: ?menu=servis-kendaraan");
    } else {
        mysqli_error($con);
    }
}
?>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                TAMBAH DATA SERVIS
            </div>
            <div class="card-body">
                <form action="" method="POST">

                    <div class="form-control">
                        <label for="nm">Tanggal Servis</label>
                        <input type="date" name="tanggal_servis" id="nm">
                    </div>

                    <div class="form-control">
                        <label for="">Merek/Tipe</label>
                        <select name="merek" id="" required>
                            <option value="kawasaki">Kawasaki</option>
                            <option value="honda">Honda</option>
                            <option value="yamaha">Yamaha</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Servis</label>
                        <textarea class="form-control" name="servis" placeholder="Masukkan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <textarea class="form-control" name="total" placeholder="Masukkan "></textarea>
                    </div>

                    <div class="form-control">
                        <label for="nm">Photo</label>
                        <input type="file" name="photo" id="nm">
                    </div>
                    <button type="submit" name="simpan" class="btn btn-success">SIMPAN</button>
                    <a href="?menu=servis-kendaraan" class="btn btn-warning">Kembali</a>


            </div>



            </form>

        </div>

    </div>
</div>
</div>