<?php
session_start();

if (isset($_POST['daftar'])) {
    if ($_POST['nama'] != '' and $_POST['telp'] != '' and $_POST['jenis_kelamin'] != '' and $_POST['alamat'] != '') {
        $_SESSION['pesan'] = 'Buku Tamu Berhasil Terdaftar';
        $_SESSION['status'] = 1;
    } else {
        $_SESSION['pesan'] = 'Gagal Mendaftar Buku Tamu';
        $_SESSION['status'] = 0;
    }
}

?>

<div class="container">

    <!-- alert -->
    <?php if (isset($_SESSION['status'])) : ?>

        <?php if ($_SESSION['status'] == 1) : ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['pesan'] ?>
            </div>

        <?php else : ?>
            <div class="alert alert-warning">
                <?php echo $_SESSION['pesan'] ?>
            </div>

        <?php endif; ?>
    <?php endif; ?>

    <!-- Form -->
    <div class="form-inputans">
        <h3>Daftar Buku Tamu</h3>
        <form action="" method="post">
            <label for="nm">Nama</label>
            <input type="text" class="form-control" name="nama">

            <label for="tlp">No Telp</label>
            <input type="text" class="form-control" name="telp">

            <label for="kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="kelamin" class="form-control">
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            <label for="al">Alamat</label>
            <textarea name="alamat" id="al" cols="3" rows="3" class="form-control"></textarea>
            <div class="btn-groups">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>
</div>