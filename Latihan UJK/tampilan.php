<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Hello, world!</title>

    <div class="container">
        <?php if (isset($_SESSION['gagalLogin'])) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['username']; ?>
            </div>
        <?php endif; ?>

        <a href="FormLogin.php" class="btn btn-primary mt-4 mb-3">Back</a>
        <table class="table">
            <thead class="">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
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
                    <td>user</td>
                    <td>user@gmail.com</td>
                    <td>abcde</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php unset($_SESSION['gagalLogin']); ?>
    </body>

</html>