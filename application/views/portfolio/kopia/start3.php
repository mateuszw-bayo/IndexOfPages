<STYLE>

div.up
{
	background-repeat: no-repeat;
	background-position: center top;
	/*min-height: 600px;*/
	width: 600px;
	padding: auto;
	margin: auto;
}

a.pf-a
{
	opacity: 0.3;
	color: #FFF;
}

a.pf-a:hover
{
	opacity: 1;
}

a.pf
{
	color: #FFF;
}

img.mypf
{
	border-radius: 10px;
}



div.up p.pf-php
{
	position: relative;
	width: 600px;
	height: 31px;
	top: -40px;
	background-color: rgba(0,155,255,0.7);
	margin: auto;
	padding-top: 5px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
	text-shadow: black 0px 0px 5px;
}



div.up p.pf-kont
{
	position: relative;
	width: 600px;
	height: 31px;
	top: -124px;
	background-color: rgba(0,155,255,0.7);
	margin: auto;
	padding-top: 5px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
	text-shadow: black 0px 0px 5px;
}

div.up img.me
{
	position: relative;
	top: -150px;
	width: 80px;
	height: 80px;
	border-radius: 50%;
}


img.me
{
	width: 80px;
	height: 80px;
	border-radius: 50%;
}

div.center
{

	background-repeat: no-repeat;
	background-position: right top;
	height: 200px;
	width: 600px;
	padding: auto;
	margin: auto;
}

div.dow
{

	background-repeat: no-repeat;
	background-position: left top;
	height: 200px;
	width: 600px;
	padding: auto;
	margin: auto;
}

div.dow p.dow-01
{
	font-family: "Lucida Console", Times, Monospace;
	font-size: 30px;
	position: relative;
	right: -60px;
	top: -20px;
	text-align: right;
	width: 500px;
}

div.form
{
	position: relative;
	top: -100px;
	color: #fff;
}

img.zakro
{
	border-radius: 10px;
}


table.left
{
	text-align: left;
	text-shadow: black 1px 1px 3px;
}

</STYLE>

<script>


function myFunction(Clickedme) {

	if(Clickedme == "prog")
	{

			var tresc = "<table class='left'>	<tr><td><img class='zakro' src='/img/paski/graf-php.jpg' /></td>	<td>									Programuje w PHP od 2012 lutego i oceniam o bardzo rozległa wiedze jak i ciekawe rozwiązania w programowaniu w tym języku.	<br />			Ocena : 7/10	</td></tr>	<tr><td><img class='zakro' src='/img/paski/graf-mysql.jpg' /></td>	<td>									Rozwijałem zagadnienia z baza MYsql razem z PHP. <br />				Ocena : 5/10</td></tr>	<tr><td><img class='zakro' src='/img/paski/graf-htmlcss.jpg' /></td><td>												Od bardzo dawna rozwijałem zagadnienia HTML jak i CSS nawet dodam ze tak samo posiadam wiedze w dziedzinie JS.<br />				Ocena : 8/10</td>			</tr>			<tr>				<td><img class='zakro' src='/img/paski/graf-unity.jpg' /></td>				<td>Jestem pasjonatem i mam w planach zrobienie gry komputerowej, uznałem ze najlepszym środowiskiem dla mnie jest właśnie unity.<br />				Ocena : 3/10</td>			</tr>			<tr>				<td><img class='zakro' src='/img/paski/graf-csharp.jpg' /></td>				<td>Z Unity rozpocząłem pisanie w języku C#.<br />				Ocena : 3/10</td>			</tr>		</table>		<bt />		<p> 			Jestem gotowy na rozwijanie swoich umiejętności jak doznanie czegoś nowego dlatego czekam na szanse która da mi dużo przyjemności jak poznać interesujących ludzi.<br /> Można się zemną kontaktować w rubryce kontakt. </p>		<br /><br />";
			document.getElementById("prog").innerHTML = tresc;
			document.getElementById("programista").className = "pf";
			
	}
	else if (Clickedme == "graf")
	{

			var tresc = "grafik";
			document.getElementById("graf").innerHTML = tresc;
			document.getElementById("grafik").className = "pf";
		
	}
	else if(Clickedme == "kont")
	{
		
			var tresc = "<div class='form'><form action='/index.php/actionp/a_ofering' method='post'>	<ul>	<li>	<label for='email'>Twój e-mail :</label><input style='width: 250px;' placeholder='E-mail' type='text' name='email' />	</li>	<li class='textareaM'>	<textarea placeholder='Treść' class='mini' name='email_text'></textarea>	</li>	</ul>	<input type='hidden' name='option' value='knt'>	<input type='submit' value='wyslij'>	</form></div> Poniżej możesz się zemną skontaktować proszę o wprowadzenie poprawnego E-mail.<br /><br />W ramie dostępu do strony proszę o skontaktowanie się zemną gdzie na wskazany e-mail będzie udostępniony nr jak i kod dostępu.";

			document.getElementById("kont").innerHTML = tresc;
			document.getElementById("kontakt").className = "pf";
		
	}
	else
	{
		document.getElementById("prog").innerHTML = "";
		document.getElementById("graf").innerHTML = "";
		document.getElementById("kont").innerHTML = "";
	}

}

function test()
{

}
</script>

<div class="up">


<br /><br />
	<p><h2>Mateusz Wróbel</h2></p>
	<br /><br /><br />




	<a class="pf-a" id="programista" onclick="myFunction('prog')">
		<img src="/img/paski/programista-php.jpg" class="mypf" />
		<p class="pf-php"> Programista</p>
	</a>
	<div id="prog">
		
	</div>

	<a class="pf-a" id="grafik" onclick="myFunction('graf')">
		<img src="/img/paski/grafika.jpg" class="mypf" />
		<p class="pf-php"> Grafik Komputerowy</p>
	</a>
	<div id="graf">
		
	</div>

	<a class="pf-a" id="kontakt" onclick="myFunction('kont')">
		<img src="/img/paski/totylkoja.jpg" class="mypf" />
		<img src="/img/user/avatar/1.jpg" class="me" >
		<p class="pf-kont"> Kontakt </p>
	</a>
	<div id="kont">
		
	</div>
</div>


<br /><br />
