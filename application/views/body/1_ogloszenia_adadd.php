<div>
	<div class='r400'>
		<h3>Wprowadz dane</h3>
		<div id='form' class='y' style='margin: auto;'>
			<form action='/games/index.php/action/ad_add/' method='POST' >
			<ul>
				<li>
					<label for='namespace'>Nazwa ogloszenia : </label>
					<input name='namespace' type='text'  id='namespace' placeholder='Nazwa ogloszenia' value='' />
				</li>
				<li>
					<label for='opis'>Krotki opis : </label>
					<input name='opis' type='text'  id='opis' placeholder='Krotki opis' value='' />
				</li>
				<li>
					<p>Tresc ogloszenia</p>
				</li>
					<textarea name='tresc' style='resize: none;' cols='33' rows='5'>wpisz tekst</textarea>
				<li>
					<label for='nick'>Anonimowe : </label>
					<input type="checkbox" name="AU" value="1">
				</li>
				<li>
					<label for='rodzaj'>Rodzaj : </label>
					<select name='rodzaj'>
						<option value='0'>--Wybierz--</option>
						<option value='1'>Sprzedarz</option>
						<option value='2'>Szukam</option>
						<option value='3'>Społeczne</option>
						<option value='4'>Kupie</option>
					</select>
				</li>
				<li>
					<label for='region'>Region : </label>
					<select name='region'>
						<option value='0'>--Wybierz--</option>
						<option value='1'>Region</option>
						<option value='2'>Powiat</option>
						<option value='3'>Kraj</option>
						<option value='4'>Swiat</option>
					</select>
				</li>
				<li>
					<div class='center'>
						<input type='submit'  id='go' name='go' value='Potwierdz' />
					</div>
				</li>
				<input type='hidden' name='code' value='' />
			</ul>
		</form>
	</div>
</div>