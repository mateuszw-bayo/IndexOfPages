<div class="Atable"><br />
	<h3>Lista userow</h3><br />
	
		<?php
		echo "<h2><b>Jestese na stronie " . $next . " </b></h2>";
		$ilo = $var_arr['ilo'];
		$count_ar = count($var_arr);


		echo "<table cellpadding='5' cellspacing='5'>";
		echo "<tr><td><b>Login logowania</b></td><td><b>Aktywowany</b></td><td><b>Admin</b></td><td><b>Działanie</b></td></tr>";
		$tr = 2;
		for ($i=0; $i < $count_ar-1; $i++) 
		{ 
			if($tr == 2)
			{
				echo "<tr class='a1'><td>";
				$tr = 1;
			}
			else
			{
				echo "<tr><td>";
				$tr = 2;
			}
		

			echo $var_arr[$i]['Login'] . "</td><td>";

			if($var_arr[$i]['Akt'] == 1)
			{
				echo " (Wymaga zmiane hasła) </td><td>"; 
			}
			else
			{
				echo " * </td><td>";
			}

			if($var_arr[$i]['Ranga'] != NULL)
			{
				echo "Admin z Uprawnieniami " . $var_arr[$i]['Ranga'];
			}
			else
			{
				echo "Klient";
			}

			echo "</td><td><a href='" . $var_arr[$i]['id_u'] . "'>Ustawienia</a></td>";

			echo "</tr>";

		}

		echo "<tr>";
		if($next > 1)
		{
			$l = $next - 1;
			echo "<td><a href='/index.php/Admin/index/user/" . $l . "'>Wstecz << </a></td>";
		}
		else
		{
			echo "<td></td>";
		}
		echo "<td></td>";
		if($ilo > 10)
		{
			echo "<td>";
			$iloo = $ilo / 10;
			
			for ($i=0; $i < $iloo; $i++)
			{ 
				$ii = $i + 1;
				echo " <a href='/index.php/Admin/index/user/" . $ii . "/' >" . $ii . "</a> "; 
			}
			echo "</td>";
		}
		else
		{
			echo "<td></td>";
		}

		if(count($var_arr) == 11)
		{
			$n = $next + 1;
			
			echo "<td><a href='/index.php/Admin/index/user/" . $n . "'> >> Nastepne</a></td>";
		}
		else
		{
			echo "<td></td>";
		}
		echo "</tr>";
		echo "</table>";


		?>
<br />
</div>





