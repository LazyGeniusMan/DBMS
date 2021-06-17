<?php 
    include 'connect.php';
    $title="Nomor 3";
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
            Berdasarkan tabel barang, buatlah halaman yang menampilkan kode barang dan jumlah stok barang yang dikelompokkan berdasarkan kode barang! Gunakan perintah GROUP BY!
        </div>
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>Kode Barang</th>
                <th>Jumlah Stok</th>
            </tr>
            <?php
                $barangData=mysqli_query($dbconnect, " SELECT `jumlah_stok`, `kode_barang` FROM `barang` GROUP BY `kode_barang`");
                while($row=mysqli_fetch_array($barangData)){
            ?>
            <tr>
                <td><?= $row['kode_barang']?></td>
                <td><?= $row['jumlah_stok']?></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>