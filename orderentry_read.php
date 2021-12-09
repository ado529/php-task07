<?php

$str="";

$file=fopen("data2/earnings.csv","r");

flock($file,LOCK_EX);

if($file){
  while($line=fgets($file)){
    $str .="<tr><td>{$line}</td></tr>";
  }
}


flock($file,LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>売上一覧（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>売上一覧（一覧画面）</legend>
    <a href="orderentry_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>Dec</th>
        </tr>
      </thead>
      <tbody>
        <?=$str?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>