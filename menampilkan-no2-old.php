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
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>Jumlah Stock Barang</th>
                <th>Jumlah Order</th>
            </tr>
            <?php
                $data1=mysqli_query($dbconnect, "SELECT SUM(`jumlah_stok`) AS total_stok_barang FROM barang");
                $row1=mysqli_fetch_array($data1);
                $data2=mysqli_query($dbconnect, "SELECT SUM(`jumlah_order`) AS total_penjualan FROM baris_order");
                $row2=mysqli_fetch_array($data2);
            ?>
            <tr>
                <td><?= $row1['total_stok_barang']?></td>
                <td><?= $row2['total_penjualan']?></td>
            </tr>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>