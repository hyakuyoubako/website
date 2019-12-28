<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>過去の気象データ</title>
  </head>

<!--月日入力をselectで行うバージョン20191201 おー　-->
<!--20191220修正-->
  <body>
    <h1>過去の気象データ</h1>
　　　　<a href="index.html">トップページへ</a>

<p>
<form action="" name="form1" method="get">
<select name="year" id="id_year">
</select>年　
<select name="month" id="id_month">
</select>月　
<select name="day" id="id_day">
</select>日　
<script>
(function() {
  'use strict';

  /*
    今日の日付データを変数todayに格納
   */
  var optionLoop, this_day, this_month, this_year, today;
  today = new Date();
  this_year = today.getFullYear();
  this_month = today.getMonth() + 1;
  this_day = today.getDate();

  /*
    ループ処理（スタート数字、終了数字、表示id名、デフォルト数字）
   */
  optionLoop = function(start, end, id, this_day) {
    var i, opt;

    opt = null;
    for (i = start; i <= end ; i++) {
      if (i === this_day) {
        opt += "<option value='" + i + "' selected>" + i + "</option>";
      } else {
        opt += "<option value='" + i + "'>" + i + "</option>";
      }
    }
    return document.getElementById(id).innerHTML = opt;
  };


  /*
    関数設定（スタート数字[必須]、終了数字[必須]、表示id名[省略可能]、デフォルト数字[省略可能]）
   */
  optionLoop(2018, this_year, 'id_year', this_year);
  optionLoop(1, 12, 'id_month', this_month);
  optionLoop(1, 31, 'id_day', this_day);
})();

</script>
のデータを表示
<input type="submit" value="送信">
<br></p>

<h2>
 <?php if(isset($_GET["year"],$_GET["month"],$_GET["day"])){
	$year=$_GET["year"];
	$month=$_GET["month"];
	$day=$_GET["day"];
        }else{
	      $year=2020;	$month=01;	$day=01;
	}
  ?>

 <?php echo $year."年　".$month."月　".$day."日　のデータを表示しています。<br>";?>
</h2>
 <?php $mondate = $year*10000 + $month*100 + $day ;?>
</form>
</p>

<p>
<br>
<img src="sensor_data_temp_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気温データ">
<img src="sensor_data_humid_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>湿度データ"><br>
<img src="sensor_data_pressure_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気圧データ">
<img src="sensor_data_temp_humid_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気温と湿度データ"><br>

<!--写真画像表示のためのphpプログラム-->
	<?php
		for ($hour = 00; $hour < 24; $hour++ ){//変数hourを0から24まで1ずつ変化させる。
		echo "<img src=\"date". $mondate."-". sprintf('%02d',$hour). ".jpg\"
		   alt=\"date". $mondate."-". sprintf('%02d',$hour). "時\"
		    title=\"". $mondate."-". sprintf('%02d',$hour). "時\">";//日付-時間.jpgの画像を返す。
		}
	?>
<br>
<a href="sensor_data_<?php echo $mondate; ?>.csv">sensor_data_<?php echo $mondate; ?>.csv download</a><br>

</p>
数値データとグラフは10分ごと、空の写真は1時間ごとにデータ取得しています。<br>
ラズベリーパイをシャットダウンすると内部時計がストップします。コンソールから再設定してください。<br>
This site works with Raspberry Pi. Every ten minutes updating. Copyright c 2019 おー. All Rights Reserved
<br></body></html>
