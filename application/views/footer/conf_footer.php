<br /><br />
<div class='footer'> 
	<?php

	if(!empty($footer_class))
	{
		echo $footer_class;
	}

	?>
</div>
<footer>
	<p><?php if(!empty($footer_text))
	{
		echo $footer_text;
	}
	else
	{
		echo "Stopka";
	}
		 ?></p>
</footer>
</body>
</html>