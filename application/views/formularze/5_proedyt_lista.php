<h3>
<?php
	if($lista['tt'] == 1)
	{
		echo "Katalog";
	}
	else if($lista['tt'] == 2)
	{
		echo "Pod Katalog";
	}
	else if($lista['tt'] == 3)
	{
		echo "Produkty";
	}


?>
</h3>
<select name='os_p'>
<?php
	

	$aa = count($lista) -1;

	for ($i=0; $i < $aa; $i++)
	{
		echo "<option value='";
		if(!empty($lista[$i]['id_K']) || !empty($lista[$i]['id_P']) || !empty($lista[$i]['id_pro']))
		{
			if(!empty($lista[$i]['id_K']) && $lista['tt'] == 1)
			{
				$id = $lista[$i]['id_K'];
				$as = 1;
			}
			else if(!empty($lista[$i]['id_P']) && $lista['tt'] == 2)
			{
				$id = $lista[$i]['id_P'];
				$as = 2;
			}
			else if(!empty($lista[$i]['id_pro']) && $lista['tt'] == 3)
			{
				$id = $lista[$i]['id_pro'];
				$as = 3;
			}
		}
		echo $id . "'>";

		if(!empty($lista[$i]['Nazwa_k']) || !empty($lista[$i]['Nazwa_p']) || !empty($lista[$i]['Nazwa_pro']))
		{
			if(!empty($lista[$i]['Nazwa_k']))
			{
				$nazwa = $lista[$i]['Nazwa_k'];
			}
			else if(!empty($lista[$i]['Nazwa_p']))
			{
				$nazwa = $lista[$i]['Nazwa_p'];
			}
			else if(!empty($lista[$i]['Nazwa_pro']))
			{
				$nazwa = $lista[$i]['Nazwa_pro'] . " " . $lista[$i]['opis_pro'];
			}
		}
		echo $nazwa . "</option>";
	}
?>

</select>
<input type="hidden" name="typ" value="<?php echo $as; ?>">
<br />
<button>Edytuj</button>
