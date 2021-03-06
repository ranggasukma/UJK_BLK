<?php
require_once "MySQL_connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                <h3 align="center">Form Input Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="Proses_insert_buku_tamu.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required />
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukkan Pesan dan Kesan Anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-block" type="submit" value="Kirim" />
                    </div>
                </form>
                <hr />
                <?php
                if (isset($_SESSION['update_status'])) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil !!</strong> Data berhasil di Update
                    </div>

                    <!-- Close -->
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->

                <?php }
                if (isset($_SESSION['delete_status'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['delete_message']; ?>
                    </div>

                <?php }
                if (isset($_SESSION['insert_status'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['insert_message']; ?>
                    </div>

                    <!-- Session Untuk Tampilan Insert,Delete dan Update -->
                <?php }
                unset($_SESSION['update_status']);
                unset($_SESSION['delete_status']);
                unset($_SESSION['insert_status']);
                ?>
                <h3 class="text-primary">Data Buku</h3>
                <hr />
                <table class="table table-bordered" id='myTable'>
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan/Komentar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <thbody>
                        <?php
                        $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['id_tamu']; ?></td>
                                    <td><?= $row['nama_tamu']; ?></td>
                                    <td><?= $row['email_tamu']; ?></td>
                                    <td><?= $row['pesan_tamu']; ?></td>
                                    <!-- button edit dan delete -->
                                    <td align="center">
                                        <!-- <div class="btn-group"> -->
                                        <a href="Halaman_Edit_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-secondary btn-sm disabled">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id_tamu']; ?>" data-nama="<?= $row['nama_tamu']; ?>" data-email="<?= $row['email_tamu']; ?>" data-pesan="<?= $row['pesan_tamu']; ?>"><i class="fas fa-edit"></i></button>
                                        <a href="Proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda akan menghapus record ini?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <!-- </div> -->
                                    </td>
                                </tr>
                        <?php
                                $no++;
                            }
                        }
                        ?>

                    </thbody>
                </table>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="Proses_update_buku_tamu.php" method="POST">
                            <div class="form-group"> <b>Id</b>
                                <input type="text" name="id" class="form-control edit-id" readonly required />
                            </div>
                            <div class="form-group"> <b>Nama</b>
                                <input type="text" name="nama" class="form-control edit-nama" placeholder="Masukkan nama Anda" required />
                            </div>
                            <div class="form-group"> <b>Email</b>
                                <input type="email" name="email" class="form-control edit-email" placeholder="Masukkan Email Anda" required />
                            </div>
                            <div class="form-group"> <b>Pesan</b>
                                <textarea name="pesan" class="form-control edit-pesan" placeholder="Masukkan Pesan dan Kesan Anda" required></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" value="Update" />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                pageLength: 5,
            });
            $('#exampleModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                var nama = button.data('nama')
                var email = button.data('email')
                var pesan = button.data('pesan')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                // modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body .edit-id').val(id)
                modal.find('.modal-body .edit-nama').val(nama)
                modal.find('.modal-body .edit-email').val(email)
                modal.find('.modal-body .edit-pesan').html(pesan)
            })
            $('.alert').delay(500).fadeOut(2000);
        });
    </script>
</body>

</html>