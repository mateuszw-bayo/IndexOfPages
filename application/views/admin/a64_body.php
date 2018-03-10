<div>
	<table>
		
	<?php

	$f = FALSE;
	for ($i=0; $i < $u; $i++)
	{

		echo "<tr class='";
		
		// Kolor div
		if($f == TRUE)
		{
			// parzyste
			echo "biale";
		}
		else
		{
			// nie parzyste
			echo "szare";
		}

		// wyznaczenie czy pazyste czy nie parzyste.
		$f = !$f;

		echo "'>";

		echo "<td>TEKST : " . $var_news[$i] . 
		"</td><td>" . $var_number[$i] . 
		"</td>";

		echo "</tr>";
		# code...
	}
	
	?>
	</table>

<br />
</div>
<div class="center">
	<form action="/games/index.php/actiona/news_add" method="POST">
		Opis zmian : <input type="text" name="tekst"><br />
		Numer : <input type="text" name="number"><br />
		<input type="submit" name="nowosci" value="Napisz">
	</form>
</div>


