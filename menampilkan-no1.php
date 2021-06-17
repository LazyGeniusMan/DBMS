<?php 
    include 'connect.php';
    $title="Nomor 1";
    include 'head.php';
?>
<div class="columns is-centered is-fullheight">
    <div class="column is-8 box">
        <div class="has-background-primary has-text-centered">
            <br>
            <h1 class="title has-text-white"><?=$title?></h1>
            <hr>
        </div>
        <div class="notification">
            Berdasarkan tabel pesanan penjualan, tabel pelanggan, dan tabel baris order, buatlah halaman yang menampilkan tabel yang berisi no faktur, nama pelanggan, jumlah order, dan status! Gunakan perintah JOIN!
        </div>
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>No Faktur</th>
                <th>Nama Pelanggan</th>
                <th>Jumlah Order</th>
                <th>Status</th>
            </tr>
            <?php
                $data=mysqli_query($dbconnect, "SELECT `pesanan_penjualan`.`no_faktur`, `pelanggan`.`nama_pelanggan`, `baris_order`.`jumlah_order`, `pelanggan`.`status` FROM `pesanan_penjualan` INNER JOIN `baris_order` ON `pesanan_penjualan`.`no_faktur` = `baris_order`.`no_faktur` INNER JOIN `pelanggan` ON `pesanan_penjualan`.`ID_pelanggan` = `pelanggan`.`ID_pelanggan` ");
                while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?= $row['no_faktur']?></td>
                <td><?= $row['nama_pelanggan']?></td>
                <td><?= $row['jumlah_order']?></td>
                <td><?= $row['status']?></td>
            </tr><?php }?>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>