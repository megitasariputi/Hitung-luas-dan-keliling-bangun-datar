<?php require_once 'lat_fungsi.php' ?>
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'beranda.php';
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="form_latihan7a.css">

    <style>
        .navigationbar {
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #40a8c4;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #07689f;
            color: black;
        }
    </style>

    <title>Form Perhitungan Luas dan Keliling</title>
</head>

<body>
    <div class="tengah" align="center">
        <div class="header" align="center">
            <h3>Form Perhitungan Luas dan Keliling Bangun Datar<h3>
        </div>

        <div class="navigationbar">
            <ul>
                <li><a class="active" href="?page=beranda.php">Home</a></li>
                <li><a href="?page=lingkaran.php">Lingkaran</a></li>
                <li><a href="?page=segitiga.php">Segitiga</a></li>
                <li><a href="?page=jajargenjang.php">Jajar Genjang</a></li>
            </ul>
        </div>

        <div class="konten" align="center">
        </div>

        <div class="konten" align="center">
            <div class="content"></div>
            <div class="maincontent">
                <?php
                include $page;
                ?>
            </div>
            <div class="content2"></div>
        </div>
        <div class="footer">BLK Bekasi</div>
    </div>
</body>

</html>