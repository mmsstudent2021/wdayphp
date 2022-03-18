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




            <?php

                $batteries = [0.42,0.13,0.57,0.21,0.79];

                function getBatteryLevelColor($x){

                    $r = "";

                    if($x > 0.4){
                        $r = "bg-primary";
                    }elseif ($x > 0.2){
                        $r = "bg-warning";
                    }else{
                        $r = "bg-danger";
                    }

                    return $r;

                }

                foreach ($batteries as $battery){

            ?>

                <div class="mb-3">
                    <div class="progress">
                        <div class="progress-bar <?= getBatteryLevelColor($battery); ?>" role="progressbar" style="width: <?= $battery * 100 . "%" ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            <?php

                }

            ?>

        </div>
    </div>
</div>

</body>
</html>