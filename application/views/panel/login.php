<br />
<a href="#" onclick="panel_p()">Zamknij panel</a>

<br /><br />


<?php
if($U == 1)
{
	echo "<B><a href=\"#\" onclick=\"getData('/index.php/p_ajax/pf/start' ,'Panel_p')\">Jestes zalogowany.</a></B><br /><br />";
}
else
{

?>
	<div>
	<form action="/index.php/action_panel/twoLogin" method="POST">
		<p>Login</p>
		<input type="text" name="logU"><br />
		<p>Hasło</p>
		<input type="password" name="passU"><br />
		<input type="submit" name="" value="Loguj"><br />
	</form>
	</div>
<?php
}
?>
<a href="#" onclick="getData('/index.php/p_ajax/pf/start' ,'Panel_p')">Cofnij</a>
<br />
<br />
<br />


