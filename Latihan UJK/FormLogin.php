<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Hello, world!</title>
   
</head>
<?php
if (isset($_POST['login'])) {
    if ($_POST['username'] == 'adam' || $_POST['email'] == 'adam@gmail.com' && $_POST['pass'] == 12345){
        $_SESSION['username'] = $_POST['username'];
        header('location:tampilan.php');
    }
    else if($_POST['username'] =='User' || $_POST['email'] == 'user@gmail.com' && $_POST['pass'] == 'abcde'){
        $_SESSION['username'] = $_POST['username'];
        header('location:tampilan.php');
    }
    else{
        $_SESSION['gagalLogin'] = 'Login Gagal Silahkan Ulangi lagi';
    }
}
?>

<body>
   <div class="container">
    <?php if(isset($_SESSION['gagalLogin'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['gagalLogin']; ?>
        </div>
        <?php endif;?>

        <form action="" method="post">
            <label for="us">Username/Email</label>
            <input type="text" name="username" id="us" class="form control">
            <br>
            <label for="pas">Password</label>
            <input type="password" name="pass" id="pass" class="form control">
            <br>
            <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
            <button type="reset" class="btn btn-primary mt-3">Reset</button>
        </form>
   </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>