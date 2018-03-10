<div class="Aconf">
	<a href="">Dodaj Configuracje</a><br />
	<a href=""></a><br />


	<table>
		<tr>
			
	<?php
		$td = 1;

		echo "<tr class='a2'><td></td><td></td><td>Title</td><td></td></tr>";

		echo "<td>Tytuł strony</td><td></td><td><b>" . $header['title'] . "</b></td><td>---</td></tr>";
		
		echo "<tr class='a2'><td></td><td></td><td>Styl CSS</td><td></td></tr>";

		$header_st = count($header['styl']);
		for ($i=0; $i < $header_st; $i++) { 

			if($td == 1)
			{
				echo "<tr class='a1'>";
				$td = 0;
			}
			else
			{
				echo "<tr>";
				$td = 1;
			}

			echo "<td>Style</td><td> Link: </td><td><b>";
			echo $header['styl'][$i];
			echo "</b></td><td>---</td>";
		}
		echo "<tr class='a2'><td></td><td></td><td>Script JS</td><td></td></tr>";


		$header_sc = count($header['script']);
		for ($i=0; $i < $header_sc; $i++) {

			if($td == 1){
				echo "<tr class='a1'>";
				$td = 0;
			}else{
				echo "<tr>";
				$td = 1;
			}

			echo "<td>Style</td><td> Link: </td><td><b>";
			echo $header['script'][$i];
			echo "</b></td><td>---</td></tr>";
		}
		echo "<tr class='a2'><td></td><td></td><td>Menu</td><td></td></tr>";

		$body_m = count($body['menu']);
		for ($i=0; $i < $body_m; $i++) {

			if($td == 1){
				echo "<tr class='a1'>";
				$td = 0;
			}else{
				echo "<tr>";
				$td = 1;
			}

			echo "<td>Menu</td><td></td><td> Link: <b>";
			echo $body['menu'][$i]['url'];
			echo " </b>&nbsp;&nbsp; Nazwa: <b>";
			echo $body['menu'][$i]['name'];
			echo " </b></td><td>---</td></tr>";
		}
		echo "<tr class='a2'><td></td><td></td><td>Poczatek i Zakonecznie menu </td><td></td></tr>";


		if($td == 1){
			echo "<tr class='a1'>";
			$td = 0;
		}else{
			echo "<tr>";
			$td = 1;
		}
		$body_mc = count($body['cfg_menu']);
		echo "<td>Menu</td><td></td><td> ST: <b>";
		echo $body['cfg_menu']['start'];
		echo "</b>&nbsp;&nbsp; EN: <b>";
		echo $body['cfg_menu']['end'];
		echo "</b></td><td>---</td></tr>";
		
		echo "<tr class='a2'><td></td><td></td><td>Stopka</td><td></td></tr>";


		if($td == 1){
			echo "<tr class='a1'>";
			$td = 0;
		}else{
			echo "<tr>";
			$td = 1;
		}
		echo "<td>Stopka strony</td><td></td><td><b>" . $footer['footer_text'] . "</b></td><td>---</td>";
		
	?>
			
		</tr>
	</table>
</div>