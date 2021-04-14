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
    <h6>Jajar Genjang</h6>
    <form name="form_jg" action="" method="POST">
        <input type="number" name="a" required min=0 placeholder="Masukan Alas" />
        <input type="number" name="t" required min=0 placeholder="Masukan Tinggi" />
        <input type="number" name="a" required min=0 placeholder="Masukan Sisi A" />
        <input type="number" name="b" required min=0 placeholder="Masukan Sisi B" />
        <br><br>
        <button type="submit" class="btn btn-outline-dark" id="luas" name="luasjg">hitung luas</button>
        <button type="submit" class="btn btn-outline-dark" id="keliling" name="kelilingjg">hitung Keliling</button>
        <!-- <button type="reset" class="btn btn-outline-dark" name="reset" onclick="kosong()">reset</button> -->
        <!-- <input type="submit" name="luasjg" value="hitung luas" /> -->
        <!-- <input type="submit" name="kelilingjg" value="hitung keliling" /> -->
    </form>
    <?php
    if (isset($_POST['luasjg'])) {
        echo "Luas jajar genjang dengan alas " . $_POST['a'] . " dan tinggi " . $_POST['t'] . " adalah : "
            . jg_luas($_POST['a'], $_POST['t']);
    }
    if (isset($_POST['kelilingjg'])) {
        echo "Keliling jajar genjang dengan sisi A " . $_POST['a'] . " dan sisi b " . $_POST['b'] . " adalah : "
            . jg_keliling($_POST['a'], $_POST['b']);
    }
    ?>
</body>

</html>

<!-- <script src="text/javascript">
    function kosong() {
        document.getElementById('luas').innerHTML = " ";
        document.getElementById('keliling').innerHTML = " ";
    }
</script> -->