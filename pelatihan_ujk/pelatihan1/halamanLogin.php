<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan 1</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>


<?php

if (isset($_POST['login'])) {

    $usermail = $_POST['username'];
    $pass = $_POST['pass'];

    if (($usermail == 'adam' OR $usermail == 'adam@gmail.com') AND $pass == 12345) 
    {
        $_SESSION['username'] = $_POST['username'];
        header('location:halamanAdmin.php');
    } 
    
    else if ( ($usermail === 'User' OR  $usermail == 'user@gmail.com') AND $pass == 'abcde') 
    {
        $_SESSION['username'] = $_POST['username'];
        header('location:halamanAdmin.php');
    } 
    else {
        $_SESSION['gagalLogin'] = 'Login Gagal';
    }
}
?>


<body>
    <div class="container">
        <?php if (isset($_SESSION['gagalLogin'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['gagalLogin'];  ?>
            </div>
        <?php endif; ?>


        <form action="" method="post">
            <label for="us">Username/Email</label>
            <input type="text" name="username" id="us" class="form-control">
            <br>
            <label for="pas">Password</label>
            <input type="password" name="pass" id="pas" class="form-control">

            <button type="reset" class="btn btn-danger mt-3">Reset</button>
            <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
        </form>
    </div>
<?php session_unset(); ?>
</body>

</html>