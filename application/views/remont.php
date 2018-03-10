<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="MGfolie">
	<meta name="keywords" content="Produkcja foli">
	<meta name="author" content="MGfolia">
	<title>MGfolie</title>
	<link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black|News+Cycle|PT+Sans+Caption|Squada+One|Yanone+Kaffeesatz" rel="stylesheet"> 

	<style type="text/css">

		html
		{
			height: 100%;
		}

		body
		{


			background: rgba(255,255,255,1);
			background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(200,200,200,1) 100%);
			background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(200,200,200,1)));
			background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(200,200,200,1) 100%);
			background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(200,200,200,1) 100%);
			background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(200,200,200,1) 100%);
			background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(200,200,200,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#c8c8c8', GradientType=1 );


			padding: 0;
			margin: 0;
			text-align: center;
			color: #000;
			
			min-height: 100%;
		}
		header
		{
			min-height: 40%;
		}
		content
		{
			text-transform: uppercase;
			font-family: 'Anton', sans-serif;
			text-align: center;
			padding: auto;
			margin: auto;
			height: 20%;
		}

		content h2
		{
			padding-top: 50px;
			margin: 0px;
			padding-bottom: 0px;
			font-size: 40px;
		}
		
		#load
		{

			text-align: center;
			width: 0px;
			
			background-color: #999;
		

			height: 5px;
			padding: auto;
			margin: auto;
		}


		#load2
		{

			text-align: center;
			width: 0px;
			
			background-color: #666;
			

			height: 5px;
			padding: auto;
			margin: auto;
		}



		footer
		{
			font-family: 'PT Sans Caption', sans-serif;

		}
	</style>
	<script type="text/javascript">
		var vload = 0;
		var el = 0;

		function load()
		{
			vload++;
			if(vload < 100)
			{
				el = 100 - vload;
				document.getElementById('load').style.width = vload * 2.2 + "px";
				document.getElementById('load2').style.width = el * 2.2 + "px";
			}
			else if(vload < 200)
			{
				el = 200 - vload;
				document.getElementById('load').style.width = el * 2.2 + "px";
				document.getElementById('load2').style.width = (vload - 100) * 2.2 + "px";
			}
			else
			{
				document.getElementById('load').style.width = 0 + "px";
				document.getElementById('load2').style.width = 0 + "px";
				vload = 0;
			}
		}
		function loadt()
		{
			setInterval(load, 10);
		}

	</script>
</head>
<body onload="loadt()">
	<header></header>
	<content>
		<h2>Strona w remoncie</h2>
		<img src="http://mgfolie.pl/templates/mgfolie/images/logo-1849134570.png">
		<div id='load'></div>
		<p>Przepraszamy</p>
		<div id='load2'></div>
	</content>
	<footer>
		<h3>Kontakt </h3>
		<p>Telefony : <b>697 589 776</b> <br /> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>667 295 272</b> <br />
			E-mail : <b>mgfolie@wp.pl</b><br />
			Adres : <b>Siedlec Ul. Leśna 20 <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;55-095 Siedlec </b><br /> </p>
	</footer>
</body>
</html>