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

		echo "<td><a href='/index.php/actiona/ad_accept_st/" . $var_id[$i] . "/'>POTWIERDZAM</a>" .
		"<br /><a href='/index.php/admin/index/21/" . $var_id[$i] . "'>ODRZUC</a>" .
		"<br /><br />ID : " . $var_id_user[$i] . 
		"<br />NICK : " . $var_community[$i] . 
		"<br />RODZAJ : " . $var_district[$i] . 
		"<br />KATEGORIA : " . $var_category[$i] . 
		"</td><td>DATA : " . $var_date[$i] . 
		"<br /><br />NRczasu : " . $var_czas[$i] .
		"</td><td>" . $var_name[$i] . 
		"</td><td>" . $var_fulldescription[$i] . "</td>";

		echo "</tr>";
		# code...
	}
	
	?>
	</table>
</div>