<?php
    include 'connect.php';
    $ID_pelanggan=$_GET['ID_pelanggan'];
    $queryData="SELECT * FROM pelanggan WHERE ID_pelanggan='$ID_pelanggan'";
    $data=mysqli_query($dbconnect, $queryData);
    $row=mysqli_fetch_array($data);
    $_SESSION['ID_pelanggan']=$row['ID_pelanggan'];
    $title="Perbarui Data";
    include 'head.php';
?>
<div class="columns is-centered is-fullheight">
    <div class="column is-8">
        <form method="post" action="prosesupdate.php" class="box">
            <div class="has-background-primary has-text-centered">
                <br>
                <h1 class="title has-text-white"><?=$title?></h1>
                <hr>
            </div>
            <div class="field">
                <label class="label">ID Pelanggan</label>
                <div class="control">
                    <input class="input" type="text" placeholder="ID Pelanggan" name="ID_pelanggan" value="<?=$row['ID_pelanggan']; ?>" required readonly>
                </div>
            </div>
            <div class="field">
                <label class="label">Nama Pelanggan</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nama Pelanggan" name="nama_pelanggan" value="<?=$row['nama_pelanggan']; ?>" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Alamat</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Alamat" name="alamat" value="<?=$row['alamat']; ?>" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Kota</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Kota" name="kota" value="<?=$row['kota']; ?>" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Nomor HP</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Nomor HP" name="no_hp" value="<?=$row['no_hp']; ?>" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Status</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Status" name="status" value="<?=$row['status']; ?>" required>
                </div>
            </div>
            <div class="control">
                <button class="button is-success is-fullwidth">
                    <span class="icon">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>