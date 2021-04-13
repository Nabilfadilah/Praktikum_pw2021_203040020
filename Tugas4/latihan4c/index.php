<?php 
// menghubungkan dengan file lainya
require 'functions.php';

// melakukan query
$tabel_product = query("SELECT * FROM tabel_product")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>
</head>
<body>

<div class="container">   
        <?php foreach ($tabel_product as $tp) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $tp['id'] ?>">
                    <?= $tp["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </class=>
</div>
    
</body>
</html>