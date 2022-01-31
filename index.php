<!DOCTYPE html>
<html lang="en-US">
<title>Cafe V2</title>
<meta charset="utf-8">
<meta http-equiv="refresh" content="600">
<head>
		<link rel="stylesheet" href="./compiled/flipclock.css">

		<script src="./jquery.min.js"></script>

		<script src="./compiled/flipclock.js"></script>

<style>
        .blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
    </style>
	
	</head>
<?php
//ansioso.gif  ansioso2.gif  ansioso3.gif  ansioso4.gif  chegando.gif  nenhum.gif  nenhum2.gif  nervoso.gif  nervoso2.gif
$imagens = array(
		'cafe/cafe1.gif',
		'cafe/cafe2.gif',
		'cafe/cafe3.gif',
		'cafe/cafe4.gif',
		'cafe/cafe5.gif',
		'cafe/cafe6.gif',
		'cafe/cafe7.gif',
		'cafe/cafe8.gif',
		'cafe/cafe9.gif',
		'cafe/cafe10.gif',
);

$i='';



$i='<img src="' . $imagens[rand(0, count($imagens)-1)]. '"/>';

$i='';

$hoje = date('Y-m-d');
$tolerancia = '30' ; //em minutos
$cafeManha = new DateTime("${hoje}T09:00:00+03:00");
$cafeManhaTolerancia = new DateTime("${hoje}T09:${tolerancia}:00+03:00");
$cafeTarde = new DateTime("${hoje}T15:00:00+03:00");
$cafeTardeTolerancia = new DateTime("${hoje}T15:${tolerancia}:00+03:00");

$agoraT = date('Y-m-d\TH:i:s+03:00');
$agora = new DateTime($agoraT);
//$agora = new DateTime('NOW');
//$agora->setTimezone('+03:00');

$cafeManhaAmanha =  clone $cafeManha;
$cafeManhaAmanha->modify( '+1 day' );

$proximoCafe = null;
$estaNaHora = false;

/*
var_dump($agora >= $cafeTarde);
echo '<br>';
var_dump($agora <= $cafeTardeTolerancia);
echo '<br>';
var_dump($agora);
echo '<br>';
var_dump($cafeTardeTolerancia);
echo '<br>';
*/

if ($agora <= $cafeManha) {
	$proximoCafe = clone $cafeManha;
	//echo '1';
}

if ($agora >= $cafeManha && $agora <= $cafeManhaTolerancia) {
	$proximoCafe = clone $cafeTarde;
	$estaNaHora = true;
	//echo '2';
}


if ($agora >= $cafeManhaTolerancia && $agora <= $cafeTarde) {
	$proximoCafe = clone $cafeTarde;
	//echo '3';
}


if ($agora >= $cafeTarde && $agora <= $cafeTardeTolerancia) {
	$estaNaHora = true;
	$proximoCafe = clone $cafeManhaAmanha;
	//echo '4';
} 
/*else {
	//$proximoCafe = clone $cafeManhaAmanha;
	$proximoCafe = clone $cafeTarde;
	//echo '5';
}*/

if ($agora >= $cafeTardeTolerancia) {
	$proximoCafe = clone $cafeManhaAmanha;
}

//var_dump($estaNaHora);

if ($estaNaHora) {
	$i='<img src="' . $imagens[rand(0, count($imagens)-1)]. '"/>';
}

?>

	<body>
		<center>
		<table>
			<tr>
							<!--<td colspan="2" align="center" style="font-size:100px;" ><center>Dago acessando nas.icmc.usp.br</center></td>-->
								<td colspan="2" align="center" style="font-size:100px;" <?php echo ($estaNaHora)?'class="blink_me"':'';?> ><center>Café</center></td>
				
			</tr>
			<tr>
				<td colspan="2" align="center" style="font-size:50px;" >&nbsp;</td>
			</tr>

<!--			<tr>
				<td style="font-size: 40px;">Igor</td>
				<td><div class="clock" style="margin:2em;"></div></td>
			</tr>-->
<!--
			<tr>
				<td style="font-size: 80px;">Dago</td>
				<td><div class="clock2" style="margin:2em;"></div></td>
			</tr>-->
<!--
			<tr>
				<td style="font-size: 80px;">Rodrigo</td>
				<td><div class="clock" style="margin:2em;"></div></td>
			</tr>
		-->	
<?php
	if (! $estaNaHora) { 
?>
			<tr>
				<td style="font-size: 40px;" align="center">Próximo café em:</td>
			</tr>
			<tr>
							<td colspan="2" align="center" style="font-size:100px;" ><div class="clock" style="margin:2em;"></div></td>
			</tr>
			<tr>
							<td colspan="2" align="center" style="font-size:50px;" >&nbsp;</td>
			</tr>
<?php
}
?>
<!--
			<tr>
				<td style="font-size: 40px;" align="center">Dias Úteis</td>
				<td></td>
			</tr>
			<tr>
							<td colspan="2" align="center" style="font-size:100px;" ><div class="clock2" style="margin:2em;"></div></td>
			</tr>
			-->
		<!--	
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="nenhum-apng.png"/></td>
			</tr>
			-->
		
		<!--
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="nenhum2.gif"/></td>
			</tr>
			-->
			
			<!--
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="chegando.gif"/></td>
			</tr>
			-->
			
			<tr>
				<td colspan="2" align="center"><?php echo $i; ?></td>
			</tr>
			
		<!--	
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			-->
<!--
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="ansioso4.gif"/></td>
			</tr>
			-->
			<!--
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="pesca1.gif"/></td>
			</tr>
			-->
			
			<!--<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="ansioso3.gif"/></td>
			</tr>
			-->
		<!--	
			<tr>
				<td colspan="2" align="center" style="font-size:100px;" ><img src="ansioso2.gif"/></td>
			</tr>
			-->
			
			
		</table>
		</center>
		
		
		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date("<?php echo $proximoCafe->format('Y/m/d H:i:s'); ?>");
				//var futureDate  = new Date("2021/12/23 17:30:00");
				//var futureDate  = new Date(2018, 11, 30);
				//var futureDateDago  = new Date("2021/12/23 18:00:00");

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
				//var diffDago = futureDateDago.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true,
					language: 'pt'
				});

/*
				clock = $('.clock2').FlipClock(diffDago, {
					clockFace: 'DailyCounter',
					countdown: true,
					language: 'pt'
				});
*/
			});

setTimeout(function(){
								   window.location.reload(1);
									 }, 50000);
		</script>
		
	</body>
</html>