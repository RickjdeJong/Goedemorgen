<!DOCTYPE html>
<html>
	<head>
		<title>De tijd is: <?php 
			$today = date("H:i:s");
			echo $today;
		?></title>
		<link rel="stylesheet" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

		<script>
			function setAutoVolume(Element){
				var audio = document.getElementById("collide");
				audio.volume = 0.50;}
		</script>
		<script>
			function startTime() {
			    var today=new Date();
			    var h=today.getHours();
			    var m=today.getMinutes();
			    var s=today.getSeconds();
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('txt').innerHTML = "Het is nu: "+ h+":"+m+":"+s;
			    var t = setTimeout(function(){startTime()},500);}
			    function checkTime(i) {
			    if (i<10) {i = "0" + i};
			    return i;}
		</script>
		<script>
			var audio = document.getElementById("collide");
		</script>
		<script language="JavaScript">
		var r_text = new Array ();
		r_text[0] = "(Kip: 't meest veelzijdige stukje vlees, KIP)";
		r_text[1] = "(Voor als er 'n fuif is. Is er Duyvis)";
		r_text[2] = "(Goeie Mogguh zonder zorgen)";
		r_text[3] = "(U bent toe aan een Daewoo.)";
		r_text[4] = "(En dan is er koffie... Douwe Egberts koffie, lekkere koffie.)";
		r_text[5] = "(Vier uur Cup-a-Soup. Dat zouden meer mensen moeten doen.)";
		r_text[6] = "(Even Apeldoorn bellen)";
		r_text[7] = "(Brood. Daar zit wat in.)"
		r_text[8] = "(Liever Kip's leverworst dan gewone leverworst)"
		r_text[9] = "(Brood. Daar zit wat in.)"
		r_text[10] = "(Hamburgers met korting!!)"
		r_text[11] = "(Lekker lekker, van Lassie)"
		r_text[12] = "(MMM van Mora.)"
		r_text[13] = "(Red Band, als je voor pret bent)"
		var i = Math.floor(13*Math.random())
		</script>
	</head>
	<body onload="startTime()">
		<div class="clicker">
			<a href="#" onclick="var audioElm = document.getElementById('collide'); audioElm.muted = !audioElm.muted";>Mute Sound</a>
		</div>
		<div class="content">
			<h1 id="goede"><?php 
			$today = date("H:i:s");
			$hour = date("H");
			$minute = date("i");
			if ($hour >= 0 && $hour < 4) {
				echo"Ga Slapen!";
				$url = "4uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Kip: 't meest veelzijdige stukje vlees, KIP)";
			}else if ($hour >= 4 && $hour < 6){
				echo"Goede Nacht!";
				$url = "4uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Voor als er 'n fuif is. Is er Duyvis)";
			}else if ($hour >= 6 && $hour < 8) {
				echo"Goede Morgen!";
				$url = "6uur.png";
				$music = "ochtend2.mp3";
				$kwoot = "(Zonder zorgen)";
			}else if ($hour >= 8 && $hour < 9) {
				echo"Goede Ochtend!";
				$url = "8uur.png";
				$music = "middag2.mp3";
				$kwoot = "(U bent toe aan een Daewoo.)";
			}else if ($hour >= 9 && $hour < 12) {
				echo"Goede Mogguh";
				$url = "8uur.png";
				$music = "middag2.mp3";
				$kwoot = "(En dan is er koffie... Douwe Egberts koffie, lekkere koffie.)";
			}else if ($hour >= 12 && $minute < 15 && $hour < 13) {
				echo"Goede Middag!!";
				$url = "12uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Even Apeldoorn bellen)";
			}else if ($hour >= 12 && $minute >= 15 && $hour < 13) {
				echo"Pauze!";
				$url = "12uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Brood. Daar zit wat in.)";
			}else if ($hour >= 13 && $hour < 16) {
				echo"Goede Middag!!";
				$url = "12uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Liever Kip's leverworst dan gewone leverworst)";
			}else if ($hour >= 16 && $hour < 17) {
				echo"Goede Middag!!";
				$url = "avond4uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Vier uur Cup-a-Soup. Dat zouden meer mensen moeten doen.)";
			}else if ($hour >= 17 && $hour < 18) {
				echo"Goede Middag!!";
				$url = "avond4uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Hamburgers met korting!!)";
			}else if ($hour >= 18 && $hour < 20) {
				echo"Goede Avond!!";
				$url = "avond6uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Lekker lekker, van Lassie)";
			}else if ($hour >= 20 && $hour < 22) {
				echo"Goede Avond!!";
				$url = "avond8uur.png";
				$music = "middag2.mp3";
				$kwoot = "(MMM van Mora.)";
			}if ($hour >= 22 && $hour < 24) {
				echo"Goede Avond!!";
				$url = "avond10uur.png";
				$music = "middag2.mp3";
				$kwoot = "(Red Band, als je voor pret bent)";
			}
			?>
			</h1>
			<div id="txt"><h1 id="tijd"></div></h1>
			<style type="text/css">
			a{
				text-decoration: none;
				color: #ffffff;
				font-size: 30pt;
				display: block;
				margin: 0 auto;
			}a:hover{
				color: #e5e5e5;
			}.clicker{
				background: rgba(255,255,255,0.4);
				display: inline-block;
				border-radius: 25px;
				position: fixed;
				left: 0;
			}body{
			background-image:url('<?php echo $url ?>');
    		background-repeat: no-repeat;
   			background-attachment: fixed;
   			background-position: 50% 50%; 
   			margin: 0;
   			padding: 0;
   			text-align: center;}
   			#kwoot{
   				position: fixed;
   				bottom: 30%;
   				margin-left: auto;
   				margin-right: auto;
   				width: 100%;
   				font-size: 20pt;
   			}
   			</style>
		</div>
		<body onload=display_ct();>
		<span id='ct' ></span>
		<audio id="collide"loop autoplay onloadeddata=setAutoVolume("collide")>
			<source src="<?=$music?>" type="audio/mpeg">
			Update your browser for a nice song
		</audio>
		<h1 id="kwoot"><script>document.write(r_text[i]);</script></h1>
	</body>	
</html>	