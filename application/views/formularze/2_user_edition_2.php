<div style="width: 750px; margin: auto;">
	<div style="float: left; width: 250px;">
		<a href="/index.php/profil/ustawienia/step1"><div class="p_blue">Moj profil</div></a>
		<a href="/index.php/profil/ustawienia/step3"><div class="p_blue">System</div></a>
		<div class="p_blue_o">Haslo i login</div>
		
	</div>
	<div style="width: 500px; margin: 0px 0px 0px 250px; padding: auto; background-color: #eeeeee; border-radius: 5px;">
		<br />
		<h3>
			Podstawowe dane profilowe.
		</h3>
		<br />
		<div class="form">
			<form action="/games/index.php/action/p_ust2" method="POST">
				<ul>

					<li>
						<label>Biezace Hasło : </label><input type="password" placeholder="haslo" name="passwordb" value="" />
					</li>
					<li>
						<label>Nowe Hasło : </label><input type="password" placeholder="Nowe Hasło" name="passwordn" />
					</li>
					<li>
						<label>Powtorz Hasło : </label><input type="password" placeholder="Powtorz hasło" name="passwordp" />
					</li>
					
				</ul>

				<input type="submit" name="go" value="Ustaw Nowe Hasło">
			</form>

			<br />
			<br />
			<br />
		<form action="/games/index.php/action/p_ust3" method="POST">
				<ul>

					<li>
						<label>Hasło : </label><input type="password" placeholder="haslo" name="passwordb" value=" " />
					</li>
					<li>
						<label>Nowy E-mail : </label><input type="text" placeholder="Nowy E-mail" name="emailn" />
					</li>
					<li>
						<label>Powtorz E-mail : </label><input type="text" placeholder="Powtorz E-mail" name="emailp" />
					</li>
					
				</ul>

				<input type="submit" name="go" value="Ustaw Nowy E-mail">
			</form>

		</div>
	</div>
</div>