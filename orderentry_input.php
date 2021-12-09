<?php
//タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

//タイムゾーン取得
//echo date_default_timezone_get();

//今の日時取得
$now = new DateTime();
$nowok="{$now->format("Y/m/d(D) H:i")}";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>オーダーエントリーシステム（受注画面）</title>
</head>

<body>
  <form action="orderentry_create.php" method="POST">
    <fieldset>
      <legend>オーダーエントリーシステム（受注画面）</legend>
      <div><input type="hidden" name="now" value="<?= $nowok ?>"><?= $nowok ?></div>
      <div>
        <table>
          <tr>
            <th>メニュー名</th>
            <th>数量</th>
          </tr>
          <tr>
            <td><input type="hidden" name="cofee" value="cofee"><span>cofee</span></td>
            <td><input type="number" value="0" min="0" name="cofeevolume"></td>
          </tr>
          <tr>
            <td><input type="hidden" name="tea" value="tea"><span>tea</span></td>
            <td><input type="number" value="0" min="0" name="teavolume"></td>
          </tr>
          <tr>
            <td><input type="hidden" name="apple" value="apple"><span>apple</span></td>
            <td><input type="number" value="0" min="0" name="applevolume"></td>
          </tr>
          <tr>
            <td><input type="hidden" name="orange" value="orange"><span>orange</span></td>
            <td><input type="number" value="0" min="0" name="orangevolume"></td>
          </tr>
        </table>
      </div>
      <div>
        <button>submit</button>
      </div>
      <a href="orderentry_read.php">注文一覧</a>
    </fieldset>
  </form>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>

   //日時情報取得
   //function getToday(){
   //  const now=new Date();//日付の組み込み関数
   //  const year = now.getFullYear();//年
   //  const month = ("0"+(now.getMonth()+1)).slice(-2);//月 頭に0を追加して下２桁を取得
   //  const day = ("0"+now.getDate()).slice(-2);//日
   //  const week = now.getDay();//曜日(日曜～)
   //  const week_ja=[ '日','月', '火', '水', '木', '金', '土'];//曜日日本語表記
   //  const hour = now.getHours();//時間
   //  const minute = ("0"+now.getMinutes()).slice(-2);//分

   //  const s=year+"/"+month+"/"+day+"("+ week_ja[week] + ")"+hour+":"+minute;
   //  return s;
   //}

   //日時画面表示
   //$("#now").html(getToday);

  </script>

</body>

</html>