<style type="text/css">
	div.me
	{
		padding: 10px;
		margin: auto;
		width: 60%;
		background-color: #bbb;
		color: #000;
		text-align: right;
	}

	div.you
	{
		padding: 10px;
		margin: auto;
		width: 60%;
		background-color: #777;
		color: #fff;
		text-align: left;

	}
</style>
<div id='chat_aj'>
	<?php

		//echo $chat;

	?>
</div> 
<form name='chat'>
	<input type="text" id='mess' name="mess">
	<input type="hidden" name='is_id' value="<?php echo $is_id; ?>">
	<input type="hidden" id="l_id" name='l_id' value="<?php echo $is_id; ?>">
</form>
<button onclick="ChatAjaxAdd()"> Napisz Wiadomosc</button>

<script type="text/javascript" src="/games/js/ajax2.js"></script>
<div id='apliChat'>
	
</div>