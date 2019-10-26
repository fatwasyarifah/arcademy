<title>Tambah Data</title>
<div>
	<h2 class="h2" align="center"><u>New Data Staff</u></h2>
	<fieldset style="width: 60%; height: auto; margin: auto; background: #ecf0f1;">
	<form action="proses_tambah.php" method="post">
    <?php
    include '../Soal_6-B/koneksi.php';

    // retrieve ID terakhir yg tersimpan
    $sql = mysqli_query($koneksi,"SELECT cashier.name AS cashier, product.name AS product, category.name AS category, product.price AS price
    FROM category, cashier, product
    WHERE category.id=product.id_category AND cashier.id=product.id_cashier
            LIMIT 1");
    $i = mysqli_fetch_array($sql);
    $kodeawal=substr($i[0],1)+1;
    $kodeawal2=substr($i[0],1)+1;
    if($kodeawal<0){
        $kode='00'.$kodeawal;
    }else {
        $kode=''.$kodeawal;
    }
    if($kodeawal2<10){
        $kode='00'.$kodeawal2;
    }else {
        $kode='0'.$kodeawal2;
    }    
    ?>	
    <table width="100%" border="0" cellpadding="3" cellspacing="3">
    <tr>
        <td colspan="3"> 
            <input type="text" style="color='white'" name="id" size="10px" value="<?php echo $kode ;?>"
            placeholder="ID akan dibuat secara otomatis" readonly />
        </td>
    </tr>
    <tr>
        <td>
            Cashier
            <select name="cashier" id="cashier">
                <option>-- Pilih Cashier --</option>
            <?php
            $sql2 = mysqli_query($koneksi,"SELECT * FROM cashier");
            ?>
                <?php if (mysqli_num_rows($sql2) > 0) { ?>
                    <?php while ($row = mysqli_fetch_array($sql2)) { ?>
                        <option><?php echo $row["nama"]?></option>
                    <?php }?>
                <?php } ?>
            </select>
        </td> 
    </tr>
    <tr>
        <td>
            Category
            <select name="category" id="category">
                <option>-- Pilih Product --</option>
            <?php
            $sql2 = mysqli_query($koneksi,"SELECT * FROM category");
            ?>
                <?php if (mysqli_num_rows($sql2) > 0) { ?>
                    <?php while ($row = mysqli_fetch_array($sql2)) { ?>
                        <option><?php echo $row["nama"]?></option>
                    <?php }?>
                <?php } ?>
            </select>
        </td> 
    </tr>
    <tr>
        <td>Product</td>
        <td>:</td>
        <td><input type="text" name="product" size="30px" placeholder="isi product" autofocus /></td>
    </tr>
    <tr>
        <td>Price</td>
        <td>:</td>
        <td><input type="text" name="price" size="30px" placeholder="isi price" autofocus /></td>
    </tr>
    </table>
        <p colspan="5" align="center">
        <br>
            <input type="submit" class="btn btn-submit" value="Save" />
            <input type="button" class="btn btn-kembali" value="Cancel" onclick="history.back(-1)"/>
	</p></form></fieldset>
</div>
<div>
    <?php include "footer.php"; ?>
</div>