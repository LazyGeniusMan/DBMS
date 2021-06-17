<?php 
    include 'connect.php';
    $title="Nomor 5";
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
            Berdasarkan tabel barang, buatlah halaman yang menampilkan total penjualan dari masing-masing barang apabila seluruh stok barang yang ada terjual dengan jumlah lebih atau sama dengan Rp 2.000.000! Gunakan perintah HAVING!
        </div>
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Jumlah Stok</th>
                <th>Perkiraan Total Penjualan</th>
            </tr>
            <?php
                $barangData=mysqli_query($dbconnect, "SELECT *, (harga_barang*jumlah_stok) AS perkiraan_total_penjualan FROM `barang` GROUP BY kode_barang HAVING perkiraan_total_penjualan>=2000000");
                while($row=mysqli_fetch_array($barangData)){
            ?>
            <tr>
                <td><?= $row['kode_barang']?></td>
                <td><?= $row['nama_barang']?></td>
                <td><?= $row['harga_barang']?></td>
                <td><?= $row['jumlah_stok']?></td>
                <td><?= $row['perkiraan_total_penjualan']?></td>
           </tr>
           <?php }?>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>