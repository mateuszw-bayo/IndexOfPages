

	
	<?php

	$ppp = "";
	$pppt = "";
	$pppk = "";
		$s = count($ttt);

		

	foreach ($ttt as $key => $value)
	{
		if(is_array($value))
		{
			$ka = "<a href='#" . $key . "'>" . $key . "</a>";
			foreach ($value as $key2 => $value2) 
			{
				
				if(is_array($value2))
				{
					
					$pa = "";
					foreach ($value2 as $key3 => $value3) 
					{
						
						
						if(is_array($value3))
						{
							$a = "";
							foreach ($value3 as $key4 => $value4) 
							{
								if(is_array($value4))
								{
									foreach ($value4 as $key5 => $value5) 
									{
										echo "==== " . $key5 . " - " . $value5 . "<br />";
									}
								}
								else
								{
									if($key4 == 'Cena')
									{
										$c = $value4;
									}
									elseif($key4 == 'nazwa')
									{
										$n = $value4;
									} 
									elseif ($key4 == 'opis') 
									{
										$o = $value4;
									}	
								}	
							}
							$pppn = $n;
							$ppp .= "<li class='p'>
							" . $o . "</li>";
							
						}
						else
						{
							if($key3 == 'typ')
							{
								$pt = $value3;
							}
							elseif($key3 == 'nazwa')
							{
								$pn = $value3;
							} 
							elseif ($key3 == 'opis') 
							{
								$po = $value3;
							}
							elseif ($key3 == 'IMG')
							{
								$pI = "
								<img src='/img/produkty/" . $value3 . ".jpg' />";
							}
							
						}
						
					}
					$pppt .=  "<div class='pt' ><table class='tc500'><tr><td style='width: 120px;'>
					" . $pI .  "</td><td>
					<b>" . $pn . "</b>
					<br /> " . $po . " <br /><ul>". $ppp . "</ul></td></tr></table>
					</div>";
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
						$kI = "
						<img src='/img/produkty/" . $value2 . ".jpg' />";
					}
					
				}
				
			}
			$pppk .=  "<div><h3>" . $kn . "</h3> " . $ko . "<br />" . $pppt . "</div>";

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
	







