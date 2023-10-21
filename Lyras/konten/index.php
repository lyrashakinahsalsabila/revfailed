<?php
mysqli_connect("localhost","","root","projek_lyra");
  $database       = "jk"; 
  $username       = "merek";
  

  // membuat koneksi
  $conn = mysqli_connect($jk, $merek);

?>
<form action="index.php" method="get">
	<label>Cari :</label>
    <select name="cari_jenis_barang">
        <option value="">--Semua Kendaraan--</option>
        <option value="makanan">makanan</opton>
        <option value="minuman">minuman</option>
    
    </select>
	<input type="submit" value="Cari">
</form>

<hr>
 
<table border="1">
	<tr>
	<th>No</th>
	<th>Nama Barang</th>
        <th>Deskripsi Barang</th>
        <th>Jenis Barang</th>
        <th>Harga Barang</th>
	</tr>
	<?php 
  <?php 
  //jika cari_jenis_barang sudah diset maka masukkan datanya ke dalam variabel $cari
  if(isset($_GET['cari_jenis_barang'])){
      $cari = $_GET['cari_jenis_barang'];

      //ambil data dari database, dimana pencarian sesuai dengan variabel cari
      $data = mysqli_query($conn, "select * from kendaraan where jenis_kendaraan like '%".$cari."%'");				
  }else{

      //tapi jika cari_jenis_barang belum diset, maka tampilkan semua isi tabel data barang
      $data = mysqli_query($conn, "select * from kendaraan");		
  }
  //set nomor tabel
  $no = 1;

  //melooping data menggunakan while
  while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['jenis_kendaraan']; ?></td>
  <td><?php echo $d['merek']; ?></td>
  
</tr>
<?php } ?>
</table>