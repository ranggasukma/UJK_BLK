<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php if (isset($_SESSION['username'])) : ?>
            <div class="alert alert-success mt-5" role="alert">
                <?php echo $_SESSION['username'];  ?>
            </div>
        <?php endif; ?>

        <a href="halamanLogin.php" class="btn btn-primary mt-4 mb-3">Back To Login</a>
        <table class="table">
            <thead class="">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>adam</td>
                    <td>adam@gmail.com</td>
                    <td>12345</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>User</td>
                    <td>user@gmail.com</td>
                    <td>abcde</td>
                </tr>
            </tbody>
        </table>
    </div>


    <?php unset($_SESSION['gagalLogin']); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>