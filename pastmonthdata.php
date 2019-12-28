<!DOCTYPE html>
<html lang="ja">
<!--pastdata13.phpをもとに、一か月分のデータをグラフ化するphp20191227 おー　-->
<!--  -->
<head>
    <meta charset="UTF-8">
    <title>１か月分の気象データ</title>
  </head>
  <body>
    <h1>１か月分の気象データ</h1>
　　　　<a href="index.html">トップページへ</a>

<p>
<form action="" name="form1" method="get">
<select name="year" id="id_year">
</select>年　
<select name="month" id="id_month">
</select>月　

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
  optionLoop(2019, this_year, 'id_year', this_year);
  optionLoop(1, 12, 'id_month', this_month);
  optionLoop(1, 31, 'id_day', this_day);
})();

</script>
のデータを表示
<input type="submit" value="送信">
<br></p>

<h2>
 <?php if(isset($_GET["year"],$_GET["month"])){
	$year=$_GET["year"];
	$month=$_GET["month"];
	
        }else{
	      $year=2020;	$month=01;
	}
  ?>

 <?php echo $year."年　".$month."月　のデータを表示しています。空の画像は12時（正午）の撮影です。<br>";?>
</h2>
 <?php $mondate = $year*100 + $month ;?>
</form>
</p>

<!--make-graph-monthly.shにデータを渡してグラフを作成する20191227 おー　-->
<?php shell_exec('/bin/sh /home/pi/gnup/make-graph-monthly.sh "'.$mondate.'"');?>

<p>
<br>
<img src="sensor_data_temp_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気温データ">
<img src="sensor_data_humid_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>湿度データ"><br>
<img src="sensor_data_pressure_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気圧データ">
<img src="sensor_data_temp_humid_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気温と湿度データ"><br>

<!--写真画像表示のためのphpプログラム　毎日の12時の画像表示-->

<?php
		for ($day = 01; $day < 31; $day++ ){//変数dayを1から31まで1ずつ変化させる。
    echo "<img src=\"date". $mondate."". sprintf('%02d',$day)."-12.jpg\"
		   alt=\"". $mondate."". sprintf('%02d',$day)."-12時\"
		    title=\"". $mondate."". sprintf('%02d',$day)."-12時\"> ";//日付-時間.jpgの画像を返す。
		}
	?>
<br>
<a href="sensor_data_<?php echo $mondate; ?>.csv">sensor_data_<?php echo $mondate; ?>.csv download</a><br>

</p>
数値データとグラフは10分ごと、空の写真は1時間ごとにデータ取得しています。<br>
ラズベリーパイをシャットダウンすると内部時計がストップします。コンソールから再設定してください。<br>
This site works with Raspberry Pi. Every ten minutes updating. Copyright c 2019 おー. All Rights Reserved
<br></body></html>
