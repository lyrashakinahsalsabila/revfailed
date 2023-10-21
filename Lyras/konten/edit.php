<?php
//tampung id dari hal.adminlist.php
$tangkap = $_GET['id'];

$con = mysqli_connect("192.168.137.204:3306", "root", "root", "Iqlima_pkk");

//query tabel
$query =mysqli_query($con, "SELECT * FROM servis WHERE id_servis = $tangkap ");

$ambil = mysqli_fetch_assoc($query);

//update data
if(isset($_POST["submit"])){
    
    //menampung
$tanggal_servis =htmlspecialchars($_POST['tanggal_servis']);
$merek =htmlspecialchars('merek');
$servis =htmlspecialchars($_POST['servis']);
$total=htmlspecialchars($_POST['total']);
 $photo =htmlspecialchars($_POST['photo']);
   
//SQL
$sql = "UPDATE servis SET
tanggal_servis = '$tanggal_servis',
merek = '$merek',
servis = '$servis',
total = '$total',
photo = '$photo'
WHERE id_servis = $tangkap
";

   mysqli_query($con,$sql);
   
if(mysqli_affected_rows($con)){
    header("location:servis-kendaraan.php");
   }
   else{
       mysqli_error($con);
   }
}
?>


<div class="box">
<h1 style="text-align : center; margin :20px">Edit Data Servis</h1>
<form action="" method="POST">
                
<div class="form-control">
<label for="nm">Tanggal Servis</label>
<input type="text" name="Nama" id ="nm" value="<?=$ambil['tanggal_servis'] ?>"></div>

<div class="form-control">
<label for="jk">Merek/Tipe </label>
<select name="merek" id="" required>
<option selected="<?=$ambil['jenis_kelamin']?>"><?=$ambil['merek']?> </option>
<option value="kawasaki">Kawasaki</option>
<option value="honda">Honda</option>
<option value="yamaha">Yamaha</option>
</select>
</div>

<div class="form-control">
<label for="al">Servis</label>
<textarea name="alamat" id="" cols="30" rows="5"required><?=$ambil['alamat']?></textarea>
</div>
                
<div class="form-control">
<label for="nm">No HP</label>
<input type="text" name="no_hp" id="nh" value="<?=$ambil['no_hp']?>"required>
</div>
               
<div class="form-control">
<label for="nm">Email</label>
<input type="email" name="email" value="<?=$ambil['email']?>"required>
                </div>
              
<div class="form-control">
<label for="pt">photo</label>
<input type="text" name="foto" id="pt" value="<?=$ambil['foto']?>"required>
                </div>

<div class="form-button">
<a href="adminlist.php"> <button style="background-color : #4890A0;" name="submit">Simpan</button></a>
    <a href ="admin.php"></a><button style="background-color : #4890A0;">Batal</button>
            </div>
            </form>
        </div>
<?php include_once('footer.php'); ?>