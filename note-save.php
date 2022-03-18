<?php

session_start();

$storeFolder = "notes/";
$saveFile = $storeFolder.$_POST['fileName'].".json";
touch($saveFile);
$fopen = fopen($saveFile,"w");
fwrite($fopen,json_encode($_POST));
fclose($fopen);


$_SESSION["message"] = $_POST['fileName']." is created.";

header("Location:note-pad.php");