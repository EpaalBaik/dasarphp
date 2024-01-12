<?php
//pengulangan php
//for /foreach
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan pengulangan doreach</title>
    <style>
        div{
            width=: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        </style>
</head>
<body>
    <?php foreach ( $angka as $key) { ?>
    <div><?php echo $key; ?></div>
<?php }
    ?>
</body>
</html>