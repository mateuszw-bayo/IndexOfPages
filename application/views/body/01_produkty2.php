<div id="prod_all">
	
	<?php

	$ppp = "";
	$pppt = "";
	$pppk = "";
		$s = count($ttt);

		

	foreach ($ttt as $key => $value)
	{
		if(is_array($value))
		{
			$ka = "<a href='#p_t" . $key;
			$id = $key;
			foreach ($value as $key2 => $value2) 
			{
				
				if(is_array($value2))
				{
					
					$pa = "ID = " . $key2 . " - TP - <br />";

					$pppt .=  "<div class='pt' >" . $pa . "<br />" . $pI .  "<br /><b>" . $pn . "</b><br /> " . $po . " - " . $pt . "<br />". $ppp . "</div>";
					$ppp = "";
				}
				else
				{
					if($key2 == 'typ')
					{
						$kt = $value2;
					}
					elseif($key2 == 'nazwa')
					{
						$kn = $value2;
					} 
					elseif ($key2 == 'opis') 
					{
						$ko = $value2;
					}
					elseif ($key2 == 'IMG')
					{
						$kI = "<img src='/img/produkty/" . $value2 . ".jpg' />";
					}
					
				}
				
			}
			$pppk .=  "<div class='k' id='pro_k" . $id . "' ><div>" . $ka . "' onclick='Katal_pro(" . $id . ")'><br />" . $kI .  "<br /><p><b>" . $kn . "</b><br /> "  . "". $pppt . "</p></a></div><div class='kopis' id='p_t" . $id . "' style='max-width: 500px; min-width: 250px;'> </div></div>";

			// . $ko . " - " . $kt

			$pppt = "";
		}
		else
		{
			echo "" . $key . " - " . $value . "<br />";
		}

		if(1 == 1)
		{
			echo $pppk;
			$pppk = "";
		}
	}

	//var_dump($ttt);

//echo "<img src='/img/produkty/" . $prod[$i]["IMG_P"] . ".jpg' />";


	?>
	
</div>
<div id="Prod_select">
	
</div>