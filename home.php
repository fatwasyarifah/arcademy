<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<form class="col-md-12">
<u><h1><center>Data Arcademy</center></h1></u><br>
<div>
    <table width="85%" border="0" align="center">
        <tr align="right">
            <td>
                <a class="btn btn-secondary" href="../Soal_6-C/tambah.php">Tambah</a>
            </td>
        </tr>
    </table>
</div><br>
<table width="85%" border="1" align="center" >
	<tr align="center">
		<th>No</th>
		<th>Cashier</th>
		<th>Product</th>
		<th>Category</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
<?php
//terhubung ke file koneksi
include "koneksi.php";
//perintah paging (tampilan data dibatasi per 5 orang)
$batas   = 10;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
 $posisi  = 0;
 $halaman = 1;
}else{ 
  $posisi  = ($halaman-1) * $batas; 
}
$que = "SELECT cashier.name AS cashier, product.name AS product, category.name AS category, product.price AS price
FROM category, cashier, product
WHERE category.id=product.id_category AND cashier.id=product.id_cashier";
$query = mysqli_query($koneksi,$que);
$sql  = "SELECT cashier.name AS cashier, product.name AS product, category.name AS category, product.price AS price
FROM category, cashier, product
WHERE category.id=product.id_category AND cashier.id=product.id_cashier LIMIT $posisi,$batas";
$tampil = mysqli_query($koneksi, $sql);
$no_urut = 0;
?>		
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            while($data = mysqli_fetch_array($tampil)){
			$no_urut++; ?>
			<tr>
			<td align="center"><?php echo $no_urut ?></td>
			<td>&nbsp;<?php echo $data['cashier'] ?></td>
			<td>&nbsp;<?php echo $data['product'] ?></td>
			<td>&nbsp;<?php echo $data['category'] ?></td>
			<td>&nbsp; Rp. <?php echo $data['price'] ?></td>
        <!-- ?> -->
            <th align="center" width="15%">&nbsp;&nbsp;
				<a class="btn btn-danger" href='proses_edit.php?id="<?php echo $data["id"];?>"' class="btn btn-edit">Edit</a>&nbsp;&nbsp;
                <a class="btn btn-primary" href='../../Proses/CRUD/hapus.php?id="<?php echo $data["id"];?>"' class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
            </th>
        </tr>
            <?php } ?>
        <?php } ?>
	</table>
</table>	
</form>
</body>
</html>