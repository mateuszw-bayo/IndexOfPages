<div>
	<table>
	<?php 
	$f = FALSE;
	$u = count($element_error) - 1;

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

		echo "<td>" . $element_error[$i]['opis'] . "</td><td>" . $element_error[$i]['komunikat'] . "</td><td>";
		echo $element_error[$i]['data'] . "</td><td>" .
		"<a href='/index.php/profil/see/" . $element_error[$i]['plik'] . "'>" . $element_error[$i]['plik'] . "</a>" 
		 . "</td>"; 

		echo "</tr>";
		# code...
	}
	
	?>
	</table>
</div>