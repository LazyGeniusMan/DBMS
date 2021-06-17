<?php 
    include 'connect.php';
    $title="Tabel Pelanggan";
    include 'head.php';
?>
<div class="columns is-centered is-fullheight">
    <div class="column is-8 box">
        <div class="has-background-primary has-text-centered">
            <br>
            <h1 class="title has-text-white"><?=$title?></h2>
            <hr>
        </div>
        <table class="table is-striped is-fullwidth">
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>No HP</th>
                <th>Status</th>
                <th colspan="2"><center>Perintah</center></th>
            </tr>
            <?php
                $barangData=mysqli_query($dbconnect, "SELECT * from pelanggan");
                while($row=mysqli_fetch_array($barangData)){
            ?>
            <tr>
                <td><?= $row['ID_pelanggan']?></td>
                <td><?= $row['nama_pelanggan']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['kota']?></td>
                <td><?= $row['no_hp']?></td>
                <td><?= $row['status']?></td>
                <td>
                    <p class="control">
                        <a class="button is-success" href="update.php?ID_pelanggan=<?= $row['ID_pelanggan']?>">
                        <span class="icon">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span>Update</span>
                        </a>
                    </p>
                </td>
                <td>
                    <p class="control">
                        <a class="button is-danger" href="delete.php?ID_pelanggan=<?= $row['ID_pelanggan']?>">
                        <span class="icon">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span>Delete</span>
                        </a>
                    </p>
                </td>
            </tr>
            <?php }?>
        </table>
        <p class="control">
            <a class="button is-success is-fullwidth" href="input.php">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span>Tambahkan Data Baru</span>
            </a>
        </p>
    </div>
</div>
<?php include 'footer.php'; ?>