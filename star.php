<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>

<div class="container">
    <div class="row my-5">
        <div class="col-lg-4">





            <br>


            <?php

                $rates = [3.5,4.2,1.7,2.3,4,5];

                foreach ($rates as $rate){

                   $rate = round($rate);
            ?>


                    <?php for ($i=1;$i<=5;$i++): ?>
                        <i class="<?= $i <= $rate ? "fa-solid" : "fa-regular" ?> fa-star"></i>
                    <?php endfor; ?>

                    <br>


            <?php } ?>


        </div>
    </div>
</div>

</body>
</html>