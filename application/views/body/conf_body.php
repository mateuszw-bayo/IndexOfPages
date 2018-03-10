
	<nav>
		<p>
	<?php
			
			$menu_id = count($menu);

		for ($i=0; $i < $menu_id; $i++) { 
			echo $cfg_menu['start'];

			$a = $menu[$i]['url'];
			$name = $menu[$i]['name'];
			echo "<a href='$a'>$name</a>";

			echo $cfg_menu['end']; 
		}
		

?>
		</p>
	</nav>
<section>
	<?php

		echo $section;
		echo "<br />";
		echo $pro;
	?>
</section>
	</div>
	<br />
</div>
