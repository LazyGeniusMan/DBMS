<?php 
    include 'connect.php';
    $title="Nomor 4";
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
            Berdasarkan tabel barang, buatlah halaman yang menampilkan tabel barang secara keseluruhan kecuali barang yang jenis nya meja! Gunakan perintah NOT!
        </div>
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Jumlah Stok</th>
            </tr>
            <?php
                $barangData=mysqli_query($dbconnect, "SELECT * FROM barang WHERE `nama_barang` NOT LIKE 'Meja%'");
                while($row=mysqli_fetch_array($barangData)){
            ?>
            <tr>
                <td><?= $row['kode_barang']?></td>
                <td><?= $row['nama_barang']?></td>
                <td><?= $row['harga_barang']?></td>
                <td><?= $row['jumlah_stok']?></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>