<?php

$file = file_get_contents($_GET['file']);
$file = json_decode($file);
//print_r($file);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $file->fileName ?></title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row my-5">
        <div class="col-12">


            <?= $file->note ?>

            <br>
            <a href="note-pad.php" class="btn btn-primary">Home</a>

        </div>
    </div>
</div>

</body>
</html>
