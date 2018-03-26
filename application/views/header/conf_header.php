<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<?php

	$link = count($styl);
	$scr = count($script);

	if($link > 0)
	{
		for ($i=0; $i < $link; $i++) 
		{ 
			echo '<link rel="stylesheet" type="text/css" href="';
			echo $styl[$i];
			echo "\">\r\t";
		}
	}

	if($scr > 0)
	{
		for ($i=0; $i < $scr; $i++) 
		{ 
			echo '<script type="text/javascript" src="';
			echo $script[$i];
			echo "\"></script>\r\t";
		}
	}



	?>

</head>
<body>
<div id="background_p" style="display: none;">
	<div id="body_black" onclick="panel_p()"></div>
	<div id="Panel_p" style="z-index: 1000;">
		<?php
			echo $panel;
		?>
	</div>
	
</div>
<div id='body' class="body">
	<div id="use">
	<header>
		<?php

		if(!empty($function_menu))
		{
			echo $function_menu;
		}

		?>
		<div id="top_h">
			<?php

				if(!empty($function_baner))
				{
					echo $function_baner;
				}

			?>
		</div>
		<br />
	</header>