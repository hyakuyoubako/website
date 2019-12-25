<!DOCTYPE html>
<html lang="ja">
<!--input type="date"で処理のため、月日入力がブラウザに依存するバージョン20191201 おー　-->
  <head>
    <meta charset="UTF-8">
    <title>過去の気象データ</title>
  </head>

  <body>
    <h1>過去の気象データ</h1>
　　　　<a href="index.html">トップページへ</a>
<p>
<form method="get" title="YYYY/MM/DD形式">
<input type="date" name="date" >
<input type="submit" value="送信"></form>

<h2>
 <?php if(isset($_GET["date"])){
	$date=$_GET["date"];
	$mondate=substr($date,0,4).substr($date,5,2).substr($date,8,2);//変数mondateの書式を整えてます。
        }else{
	$mondate=20200101;//エラー対応
	}
  ?>

 <?php echo substr($date,0,4)."年　".substr($date,5,2)."月　".substr($date,8,2)."日　のデータを表示しています。<br>";?>
</h2>
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
		    title=\"". $mondate."-". sprintf('%02d',$hour). "時\" > ";//日付-時間.jpgの画像を返す。
		}
	?>
<br>
<a href="sensor_data_<?php echo $mondate; ?>.csv">sensor_data_<?php echo $mondate; ?>.csv download</a><br>

</p>
数値データとグラフは10分ごと、空の写真は1時間ごとにデータ取得しています。<br>
ラズベリーパイをシャットダウンすると内部時計がストップします。コンソールから再設定してください。<br>
This site works with Raspberry Pi. Every ten minutes updating. Copyright c 2019 おー. All Rights Reserved
<br></body></html>
