<?php require_once 'lat_fungsi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h6>Lingkaran</h6>
    <form name="form_lingkaran" action="" method="POST">
        <input type="number" name="r" required min=0 placeholder="Masukan r" />
        <br><br>
        <button type="submit" class="btn btn-outline-dark" name="luasjg">hitung luas</button>
        <button type="submit" class="btn btn-outline-dark" name="kelilingjg">hitung Keliling</button>
        <!-- <input type="submit" name="luaslingkaran" value="hitung luas" />
        <input type="submit" name="kelilinglingkaran" value="hitung keliling" /> -->
    </form>
    <?php
    if (isset($_POST['luaslingkaran'])) {
        echo "Luas lingkarang dengan jari-jari" . $_POST['r'] . "adalah : " . lingkaran_luas($_POST['r']);
    }
    if (isset($_POST['kelilinglingkaran'])) {
        echo "Keliling lingkarang dengan jari-jari" . $_POST['r'] . "adalah : " . lingkaran_keliling($_POST['r']);
    }
    ?>
</body>

</html>