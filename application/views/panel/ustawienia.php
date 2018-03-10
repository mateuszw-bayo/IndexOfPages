<br />
	<a href="#" onclick="panel_p()">Zamknij panel</a>

<br /><br />

<div>
	<a href='#' onclick='ustbrackground(0)'>Tlo1</a><br />
	<a href='#' onclick='ustbrackground(1)'>Tlo2</a><br />
	<a href='#' onclick='ustbrackground(2)'>Tlo3</a><br />
</div>
<br />
<p><b>USTAWIENIA</b></p>
<a href="#" onclick="getData('/index.php/p_ajax/pf/P_login' ,'Panel_p')">Utworz konto</a>
<br />
<a href="#" onclick="getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')">Dane o stronie</a>

<br />
<?php
if($U == 1)
{
	echo "<a href=\"#\" onclick=\"getData('/index.php/action_panel/outLogin' ,'Panel_p')\">Wyloguj sie!</a>
	<br />";
}
else
{
	echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_login' ,'Panel_p')\">Zaloguj sie!!</a>
	<br />";
}

?>
<br />
<br />
<a href="#" onclick="getData('/index.php/p_ajax/pf/start' ,'Panel_p')">Cofnij</a>

<br />
<br />
<br />


