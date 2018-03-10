<br />
	<a href="#" onclick="panel_p()">Zamknij panel</a>

<br /><br />
<?php
if(!empty($A))
{

	echo "<p><b>Admin</b></p>";

	if($A == 1)
	{
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Ustawienia</a>
		<br />";
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Dane o kontach</a>
		<br />";
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Dodanie produktu</a>
		<br />";
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Edytuj produkt</a>
		<br />";
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Odczyt wiadomosci</a>
		<br /><br />";
		
		echo "<a href=\"/index.php/Admin\">Pelny panel Admina</a>
		<br />";
		

	}
	else if($A == 2)
	{
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Dodanie produktu</a>
		<br />";
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Edytuj produkt</a>
		<br />";
		echo "<a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')\">Odczyt wiadomosci</a>
		<br />";
	}
}
?>
<br />


<a href="#" onclick="getData('/index.php/p_ajax/pf/kontakt' ,'Panel_p')">Kontakt</a>
<br />
<a href="#" onclick="getData('/index.php/p_ajax/pf/P_ust' ,'Panel_p')">Dane o stronie</a>
<br />

<?php
if($U == 1)
{
	echo "<br /><br /><a href=\"#\" onclick=\"getData('/index.php/action_panel/outLogin' ,'Panel_p')\">Wyloguj sie!</a>
	<br />";
}
else
{
	echo "<br /><br /><a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/P_login' ,'Panel_p')\">Zaloguj sie!!</a>
	<br />";
}

?>
<br />
<br />
<br />


