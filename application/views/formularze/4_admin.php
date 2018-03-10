
<div class="White">
	<form name="Form1" class='form' method="post" action="/index.php/action_panel/twoKK"  >
		<div class="head_Font" >
			<span><h2>Tworzenie konta Admina</h2></span>
		</div>
		<p>Podaj Hasło Admina</p>
		<div class='br'>
			<label for="">Login</label>
			<input type="text" name="logA" value="" spellcheck="false">
		</div>

		<div class='br'>
			<label for="">Hasło</label>
			<input type="password" name="passA" value="" spellcheck="false">
		</div>
		<Br /><br />
		<p>Dane Użydkownika</p>
		<div class='br'>
			<label for="">Login</label>
			<input type="text" name="logU" value="" spellcheck="false">
		</div>

		<div class='br'>
			<label for="">Hasło</label>
			<input type="password" name="passU" value="" spellcheck="false">
		</div>

		<div class='br'>
			<label for="">Powtworz Hasło</label>
			<input type="password" name="passU2" value="" spellcheck="false">
		</div>
		<div class='br'>
		<label for="" >Pierwsze logowanie z Zmiana hasła</label>
		<select name="ResP" size="1">
			<option value="1">Zmiana Hasła</option>
			<option value="0">Bez zmiany hasła</option>
		</select>
		</div>
		<br />

		

		<div class='br'>
		<label for="" >Uprawnienia</label>
		<select name="uST1" size="1" onclick="SelectFunc()" id='uST1'>
			<option value="0">User</option>
			<option value="1">Admin</option>
		</select>
		</div>

		<div id="divuST2" class='br' style="display: none;">
		<label for="" id="Label9" >Dalsze Uprawnienia</label>
		<select name="uST2" size="1" id="uST2" disabled>
			<option value="0">-- --</option>
			<option value="1">Pelne Uprawnienia</option>
			<option value="2">Pracownicze</option>
		</select>
		</div>

		

		<input type="submit" name="" value=" Tworzenie konta " >
	</form>
</div>
<script type="text/javascript">
	
	function SelectFunc()
	{
	    var x = document.getElementById("uST1").value;
	    if(x == 1)
	    {
	    	document.getElementById("uST2").disabled = false;
	    	document.getElementById("divuST2").style.display = "block";
	    }
	    else
	    {
	    	document.getElementById("divuST2").style.display = "none";
	    	document.getElementById("uST2").disabled = true;
	    	document.getElementById("uST2").value = 0;
	    }

	}

</script>