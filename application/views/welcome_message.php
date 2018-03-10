<?php




if(!empty($_POST['var1']) && !empty($_POST['var2']) && !empty($_POST['var3']))
{


	$z1 = $_POST['var1'];
	$z2 = $_POST['var2'];
	$z3 = $_POST['var3'];

	if ($z1 == $z2 && $z1 == $z3) 
	{
		$zmiena1 = "Zmiena 1, 2 i 3 sa takie same.";
	}
	else if ($z1 == $z2)
	{
		$zmiena1 = "Zmiena 1 i 2 sa takie same.";
	}
	else if($z1 == $z3)
	{
		$zmiena1 = "Zmiena 1 i 3 sa takie same.";
	}
	else if($z2 == $z3)
	{
		$zmiena1 = "Zmiena 2 i 3 sa takie same.";
	}
	else
	{
		$zmiena1 = "Zmiene sa inne.";
	}


}
else
{
	$zmiena1 = "Zmiene sa puste uzupelnij.";
}

/* --- PRZYKLAD --- */
$va1 = 1;
$va2 = "1";
if($va1 === $va2)
{
	echo "SSS";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nauka</title>
</head>
<body>
<div>
<?php

	echo $zmiena1;

?>
</div>

<form method="POST">
	<input type="text" name="var1"> <br />
	<input type="text" name="var2"> <br />
	<input type="text" name="var3"> <br />
	<input type="submit" name="" value="Wyslij">
</form>

<div>
	<form method="POST" action="">
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		<input type="" name=""><br />
		
	</form>
</div>


</body>
</html>