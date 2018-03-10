<br />
<a href="#" onclick="panel_p()">Zamknij panel</a>

<br /><br /><br /><br />

<div>
<?php
if(!empty($A))
{

}
	?>
	<h3>Kontakt</h3>
	<br />
<form action="/index.php/action_panel/kontakt" method="POST">
	<p>Imie i nazwisko</p>
	<input type="text" name="name"><br />
	<p>Adres E-mail</p>
	<input type="text" name="email"><br />
	<p>Tresc:</p>
	<textarea name="tresc" rows="3" cols="20" spellcheck="false"></textarea>
	<br />
	<input type="submit" name="" value="Wyslij wiadomość"><br />
</form>
</div>
<br />
<p>
	<B>Telefony :</B> 697 589 776<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 667 295 272<br />
	<B>E-mail :</B> mgfolie@wp.pl
</p>
<br />
<a href="#" onclick="getData('/index.php/p_ajax/pf/start' ,'Panel_p')">Cofnij</a>
<br />
<br />
<br />


