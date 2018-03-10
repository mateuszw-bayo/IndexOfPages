
<div id='ogl'>
	<header>
		<h2 style="display:none;">
			Oglaszenia
		</h2>
		<div>

		</div>
	</header>
<?php

if(!empty($a))
{
	for($i = 0; $i<$a ; $i++)
	{
		echo $article[$i];
		$l = $i + 1;
		if($a > $l)
		{

			echo "	<div class=\"pauza\"></div>";

		}
	}
}
?>	
	<footer>
		<div>
		
		</div>
	</footer>
</div>



