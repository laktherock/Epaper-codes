<!DOCTYPE html>
<head>
<title>The Hindu</title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<?php
	
	//paper style
	$regular="A";
	$metroplus= "B";
	$education="D";
	//edition
	$chennai="1";
	
	//today variables

	$year=date('Y');
	$month=date('m');
	$day=date('d');
	$fulltoday=date("Ymd");

	//yesterday variables

	$yday=date("d", time() - 60 * 60 * 24);
	$ymonth=date("m", time() - 60 * 60 * 24);
	$yyear=date("d", time() - 60 * 60 * 24);
	$fullyesterday = date("Ymd", time()-86400);
	

	//day before yesterday variables

	$yyday=date("d", time() - 172800);
	$yymonth=date("m", time() - 172800);
	$yyyear=date("d", time() - 172800);
	$fulldaybeforeyesterday= date("Ymd", time()-172800);
//print_r($_POST); 
	//specific date using datepicker
	if(!empty($_POST)){
		if(!empty($_POST['date'])){
		//	print_r($_POST['date']);
			$date_arr=explode("/",$_POST['date']);
			//print_r('<pre>');
			//print_r($date_arr);
			$date_month=$date_arr['0'];
			$date_day=$date_arr['1'];
			$date_year=$date_arr['2'];
			//print_r("www.epaper.thehindu.com/pdf/$date_year/$date_month/$date_day/$date_year$date_month$date_day$chennai$regular.zip");

			header("Location: https://epaper.thehindu.com/pdf/$date_year/$date_month/$date_day/$date_year$date_month$date_day$chennai$regular.zip");
			//die();
		}
	}
	else{
		echo "";
	}
?>

</head>
<body>
	<header>
		<center><h1>Epaper Hindu </h1></center>
	</header>
	<div class="paper">
		<ul>
		<li><a href="https://epaper.thehindu.com/pdf/<?php echo "$year"; ?>/<?php echo "$month"; ?>/<?php echo "$day"; ?>/<?php echo "$fulltoday$chennai$regular"; ?>.zip">Today</a></li>
		<li><a href="https://epaper.thehindu.com/pdf/<?php echo "$year"; ?>/<?php echo "$ymonth"; ?>/<?php echo "$yday"; ?>/<?php echo "$fullyesterday$chennai$regular"; ?>.zip">Yesterday</a></li>
		<li><a href="https://epaper.thehindu.com/pdf/<?php echo "$year"; ?>/<?php echo "$yymonth"; ?>/<?php echo "$yyday"; ?>/<?php echo "$fulldaybeforeyesterday$chennai$regular"; ?>.zip">Day before Yesterday</a></li>
		</ul>
	</div>
	<div class="date-picker">
		
		<form name="date" method="post">
		<input type="text" name="date" id="datepicker" placeholder="pick ur date" \>
		<input type="submit" value="Get Newspaper" id="submit" \>
		</form>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
	</div>
</body>
</html>