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
			$ka = "<a href='#" . $key . "'>";
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
			$pppk .=  "<div class='k' id='pro_k" . $id . "' >" . $ka . "<br />" . $kI .  "<br /><p><b>" . $kn . "</b><br /> " . $ko . " - " . $kt . "<br />". $pppt . "</p></div></a>";

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