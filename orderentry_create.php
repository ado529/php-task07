<?php

//var_dump($_POST);
//exit();

$now=$_POST["now"];
$cofee=$_POST["cofee"];
$cofeevolume=$_POST["cofeevolume"];
$tea=$_POST["tea"];
$teavolume=$_POST["teavolume"];
$apple=$_POST["apple"];
$applevolume=$_POST["applevolume"];
$orange=$_POST["orange"];
$orangevolume=$_POST["orangevolume"];

$write_data="{$now}{$cofee}{$cofeevolume}{$tea}{$teavolume}{$apple}{$applevolume}{$orange}{$orangevolume}\n";

$file=fopen("data2/earnings.csv","a");
flock($file,LOCK_EX);

fwrite($file,$write_data);

flock($file,LOCK_UN);
fclose($file);

header("location:orderentry_input.php");

