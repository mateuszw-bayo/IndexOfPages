<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="author" content="Mateusz Wróbel">
    <meta name="description" content="opis">
    <meta name="keywords" content="klucze">
    <meta name="language" content="pl">
    <link rel="stylesheet" type="text/css" href="/css/style_home.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Bangers|Caveat|Luckiest+Guy|Marck+Script|Open+Sans+Condensed:300|Oxygen" rel="stylesheet"> 
    <script type="text/javascript">

    var strwww = [];
    strwww['color0'] = "/index.php/myajax/pf/niema";
	strwww['color1'] = "/index.php/myajax/pf/start";
	strwww['color2'] = "/index.php/myajax/pf/niema";
    strwww['color3'] = "/index.php/myajax/pf/skill";
    strwww['color4'] = "/index.php/myajax/pf/kon";
    strwww['color5'] = "/index.php/myajax/pf/niema";
	strwww['color6'] = "/index.php/myajax/pf/niema";
	strwww['color7'] = "/index.php/myajax/pf/niema";


 	function ustfun(aust)
	{
		
		
		
		document.getElementById('bodystart').className = aust; 
		if(strwww[aust] != null)
		{
			getData(strwww[aust],'section');
		}
		else
		{
			getData(strwww['color0'],'section');
		}
	}

	if (window.XMLHttpRequest)
	{
		ObiektXMLHttp = new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
		ObiektXMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	function getData(zrodlo, cel)
	{
		if(ObiektXMLHttp)
		{
			var cel = document.getElementById(cel);
			ObiektXMLHttp.open("GET", zrodlo);
			ObiektXMLHttp.onreadystatechange = function()
			{
				if (ObiektXMLHttp.readyState == 4)
				{
					cel.innerHTML = ObiektXMLHttp.responseText;
				}
			}
		ObiektXMLHttp.send(null);
		}
	}
    
    </script>
</head>
<body id="bodystart" class="color1">
<div id="body">
	<div class="hi">
		<header>
			<div class="top">
				

			</div>
			<div class="head">
				<table cellpadding="0" cellspacing="0" >
					<tr>
						<td>
							<img src="/img/ja.jpg">
						</td>
						<td>
							<p class="big">Mateusz Wróbel</p>
							<p class="small">Tworca strony internetowej</p>
						</td>
					</tr>
				</table>
			</div>
		</header>
		<br /><br /><br />
		<nav>
			<div>
			<div class="buf"><p class="color1"><a href="#" onclick="ustfun('color1')">Poczatek</a></p></div>
			<div class="buf"><p class="color2"><a href="#" onclick="ustfun('color2')">Moje Prace</a></p></div>
			<div class="buf"><p class="color3"><a href="#" onclick="ustfun('color3')">Umiejetnośći</a></p></div>
			<div class="buf"><p class="color4"><a href="#" onclick="ustfun('color4')">Kontakt</a></p></div>
			<div class="buf"><p class="color5"><a href="#" onclick="ustfun('color5')">O mnie</a></p></div>
			</div>
		</nav>
	</div>
	<section>
		<div id="start" ></div>
		<div id="section" ">
			<p>Tresc na stronie </p>
		</div>
		<div id="end"></div>
	</section>
</div>
<footer id='foot' >
	<br /><div class="bbfooter" >
		<img src="/img/ikony/znajomosc.png" onclick="ustfun('color6')">
		<img src="/img/ikony/zainteresowanie.png" onclick="ustfun('color6')">
		<img src="/img/ikony/wyksztalcenie.png" onclick="ustfun('color6')">
		<!-- <img src="/img/ikony/u-urodzinyl.png">
		<img src="/img/ikony/u-telefon.png">  -->
		<img src="/img/ikony/umiejetnosci.png" onclick="ustfun('color3')">
		<img src="/img/ikony/u-emaill.png" onclick="ustfun('color4')">
		<img src="/img/ikony/o-mnie.png" onclick="ustfun('color7')">
		<img src="/img/ikony/dos.png" onclick="ustfun('color7')">
		<img src="/img/ikony/atuty.png" onclick="ustfun('color7')">	
	</div><br />
	<p><b>Strona utworzona przez Mateusza Wróbla <br />
	w 2017r.</b></p>
</footer>
</body>
</html>