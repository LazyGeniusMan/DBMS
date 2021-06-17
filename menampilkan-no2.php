<?php 
    include 'connect.php';
    $title="Nomor 2";
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
            Buatlah tabel yang menampilkan jumlah keseluruhan dari stok barang dan total penjualan! Gunakan perintah SUM!
        </div>
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>Jumlah Stock Barang</th>
                <th>Total Penjualan</th>
            </tr>
            <?php
                $data=mysqli_query($dbconnect, "SELECT SUM(`jumlah_stok`) AS total_stok_barang, SUM(`harga_barang`*`jumlah_stok`) AS total_penjualan FROM barang");
                $row=mysqli_fetch_array($data);
            ?>
            <tr>
                <td><?= $row['total_stok_barang']?></td>
                <td><?= $row['total_penjualan']?></td>
            </tr>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>