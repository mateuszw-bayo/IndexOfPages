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

		echo "<td>" . $var_nick[$i] . "</td><td>" . $var_firstname[$i] . "</td><td>";
		echo $var_lastname[$i] . "</td><td>" .
		"<a href='/index.php/profil/see/" . $var_id[$i] . "'>Profil</a>" 
		 . "</td>"; 

		echo "</tr>";
		# code...
	}
	
	?>
	</table>
</div>