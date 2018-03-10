<?php

$aa = 0;

if($a == 1)
{
	$aa = 0;
}
else if ($a == 2)
{
	$aa = 1;
}
else if($a == 3)
{
	$aa = 2;
}


?>
<div>
	<div>
		<h5>
			<?php 

			switch ($aa) {
				case '0':
					echo "Kategoria : ";
					break;
				case '1':
					echo "Podkategoria : ";
					break;
				case '2':
					echo "Produkt : ";
					break;
				default:
					echo "Kategoria : ";
					break;
			}

			?>
			<br />
			Dane - <?php echo $nazwa; ?>
		</h5>
		<p>
			
		</p>
	</div>
	<form>
		<input type="text" name="nazwa" value="<?php echo $nazwa; ?>"><br />
		<input type="text" name="img" value="<?php echo $img; ?>"><br />
		<input type="text" name="Opis" value="<?php echo $opis; ?>"><br />
		<input type="submit" name="" value="Edytuj"><br />

	</form>
</div>