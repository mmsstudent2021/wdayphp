<?php

session_start();

?>
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

            <?php if(isset($_SESSION['message'])): ?>

                <div class="alert alert-success">
                    <?= $_SESSION['message'] ?>
                </div>

            <?php endif; ?>

            <form action="note-save.php" method="post">
                <div class="mb-3">
                    <label class="form-label">File Name</label>
                    <input required type="text" name="fileName" class="form-control form-control-lg">
                </div>
                <div class="mb-3">
                    <label class="form-label">Text Note</label>
                    <textarea required name="note" class="form-control form-control-lg" rows="7"></textarea>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-save"></i>
                        Save File
                    </button>
                </div>
            </form>


            <h4>Note Lists</h4>
            <div class="list-group">
                <?php

                    $files = scandir("notes");
                    foreach ($files as $file){
                        if($file === "." || $file === ".."){
                            continue;
                        }

                    $link = "notes/".$file;

                ?>

                <a href="note-open.php?file=<?= $link; ?>" target="_blank" class="list-group-item">
                    <?= str_replace(".json","",$file); ?>
                </a>

                <?php } ?>
            </div>

        </div>
    </div>
</div>

</body>
</html>

<?php

session_unset();

?>