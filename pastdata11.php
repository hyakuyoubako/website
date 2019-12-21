<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>過去の気象データ</title>
  </head>

<!--月日入力をselectで行うバージョン20191201 おー　-->

  <body>
    <h1>過去の気象データ</h1>
　　　　<a href="index.html">トップページへ</a>
<p>
<form action="" name="form1" method="get">
<select name="year">
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>　年
<select name="month">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>　月
<select name="day">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>　日　のデータを表示
<input type="submit" value="送信">
<br>
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
<img src="sensor_data_temp_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気温データ"><br>
<img src="sensor_data_humid_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>湿度データ"><br>
<img src="sensor_data_pressure_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気圧データ"><br>
<img src="sensor_data_temp_humid_<?php echo $mondate; ?>.png" alt="<?php echo $mondate; ?>気温と湿度データ"><br>
<img src="date<?php echo $mondate; ?>-00.jpg" alt="date<?php echo $mondate; ?>-00時" title="<?php echo $mondate; ?>-00時">
<img src="date<?php echo $mondate; ?>-01.jpg" alt="date<?php echo $mondate; ?>-01時" title="<?php echo $mondate; ?>-01時">
<img src="date<?php echo $mondate; ?>-02.jpg" alt="date<?php echo $mondate; ?>-02時" title="<?php echo $mondate; ?>-02時">
<img src="date<?php echo $mondate; ?>-03.jpg" alt="date<?php echo $mondate; ?>-03時" title="<?php echo $mondate; ?>-03時">
<img src="date<?php echo $mondate; ?>-04.jpg" alt="date<?php echo $mondate; ?>-04時" title="<?php echo $mondate; ?>-04時">
<img src="date<?php echo $mondate; ?>-05.jpg" alt="date<?php echo $mondate; ?>-05時" title="<?php echo $mondate; ?>-05時">
<img src="date<?php echo $mondate; ?>-06.jpg" alt="date<?php echo $mondate; ?>-06時" title="<?php echo $mondate; ?>-06時">
<img src="date<?php echo $mondate; ?>-07.jpg" alt="date<?php echo $mondate; ?>-07時" title="<?php echo $mondate; ?>-07時">
<img src="date<?php echo $mondate; ?>-08.jpg" alt="date<?php echo $mondate; ?>-08時" title="<?php echo $mondate; ?>-08時">
<img src="date<?php echo $mondate; ?>-09.jpg" alt="date<?php echo $mondate; ?>-09時" title="<?php echo $mondate; ?>-09時">
<img src="date<?php echo $mondate; ?>-10.jpg" alt="date<?php echo $mondate; ?>-10時" title="<?php echo $mondate; ?>-10時">
<img src="date<?php echo $mondate; ?>-11.jpg" alt="date<?php echo $mondate; ?>-11時" title="<?php echo $mondate; ?>-11時">
<img src="date<?php echo $mondate; ?>-12.jpg" alt="date<?php echo $mondate; ?>-12時" title="<?php echo $mondate; ?>-12時">
<img src="date<?php echo $mondate; ?>-13.jpg" alt="date<?php echo $mondate; ?>-13時" title="<?php echo $mondate; ?>-13時">
<img src="date<?php echo $mondate; ?>-14.jpg" alt="date<?php echo $mondate; ?>-14時" title="<?php echo $mondate; ?>-14時">
<img src="date<?php echo $mondate; ?>-15.jpg" alt="date<?php echo $mondate; ?>-15時" title="<?php echo $mondate; ?>-15時">
<img src="date<?php echo $mondate; ?>-16.jpg" alt="date<?php echo $mondate; ?>-16時" title="<?php echo $mondate; ?>-16時">
<img src="date<?php echo $mondate; ?>-17.jpg" alt="date<?php echo $mondate; ?>-17時" title="<?php echo $mondate; ?>-17時">
<img src="date<?php echo $mondate; ?>-18.jpg" alt="date<?php echo $mondate; ?>-18時" title="<?php echo $mondate; ?>-18時">
<img src="date<?php echo $mondate; ?>-19.jpg" alt="date<?php echo $mondate; ?>-19時" title="<?php echo $mondate; ?>-19時">
<img src="date<?php echo $mondate; ?>-20.jpg" alt="date<?php echo $mondate; ?>-20時" title="<?php echo $mondate; ?>-20時">
<img src="date<?php echo $mondate; ?>-21.jpg" alt="date<?php echo $mondate; ?>-21時" title="<?php echo $mondate; ?>-21時">
<img src="date<?php echo $mondate; ?>-22.jpg" alt="date<?php echo $mondate; ?>-22時" title="<?php echo $mondate; ?>-22時">
<img src="date<?php echo $mondate; ?>-23.jpg" alt="date<?php echo $mondate; ?>-23時" title="<?php echo $mondate; ?>-23時">
<br>
<a href="sensor_data_<?php echo $mondate; ?>.csv">sensor_data_<?php echo $mondate; ?>.csv download</a><br>

</p>
数値データとグラフは10分ごと、空の写真は1時間ごとにデータ取得しています。<br>
ラズベリーパイをシャットダウンすると内部時計がストップします。コンソールから再設定してください。<br>
This site works with Raspberry Pi. Every ten minutes updating. Copyright c 2019 おー. All Rights Reserved
<br></body></html>
