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
    <h6>Segitiga</h6>
    <form name="form_segitiga" action="" method="POST">
        <input type="number" name="alas" required min=0 placeholder="Masukan Alas" />
        <input type="number" name="tinggi" required min=0 placeholder="Masukan Tinggi" />
        <input type="number" name="sisi_a" required min=0 placeholder="Masukan Sisi A" />
        <input type="number" name="sisi_b" required min=0 placeholder="Masukan Sisi B" />
        <input type="number" name="sisi_c" required min=0 placeholder="Masukan Sisi C" />
        <br><br>
        <button type="submit" class="btn btn-outline-dark" name="luasjg">hitung luas</button>
        <button type="submit" class="btn btn-outline-dark" name="kelilingjg">hitung Keliling</button>
        <!-- <input type="submit" name="luassegitiga" value="hitung luas" />
        <input type="submit" name="kelilingsegitiga" value="hitung keliling" /> -->
    </form>
    <?php
    if (isset($_POST['luassegitiga'])) {
        echo "Luas segitiga dengan alas " . $_POST['alas'] . " dan tinggi " . $_POST['tinggi'] . " adalah : "
            . segitiga_luas($_POST['alas'], $_POST['tinggi']);
    }
    if (isset($_POST['kelilingsegitiga'])) {
        echo "Keliling segitiga dengan sisi A " . $_POST['sisi_a'] . ", sisi b " . $_POST['sisi_b'] . " dan sisi c " . $_POST['sisi_c'] . " adalah : "
            . segitiga_keliling($_POST['sisi_a'], $_POST['sisi_b'], $_POST['sisi_c']);
    }
    ?>
</body>

</html>