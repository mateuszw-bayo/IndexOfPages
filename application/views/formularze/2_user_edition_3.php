<div style="width: 750px; margin: auto;">
	<div style="float: left; width: 250px;">
		<a href="/index.php/profil/ustawienia/step1"><div class="p_blue">Moj profil</div></a>
		<div class="p_blue_o">System</div>
		<a href="/index.php/profil/ustawienia/step2"><div class="p_blue">Haslo i login</div></a>
		
	</div>
	<div style="width: 500px; margin: 0px 0px 0px 250px; padding: auto; background-color: #eeeeee; border-radius: 5px;">
		<br />
		<h3>
			Podstawowe dane profilowe.
		</h3>
		<br />
		<div class="form">
			<form action="/games/index.php/action/p_ust4" method="POST">
				<ul>

					<li>
						<li>
						<label>System MLR : </label>
						<select name="system_akt">
							<option
							<?php 
								if($active == 2)
								{
									echo "selected";
								}
							?> value="1">Aktywny/a</option>
							<option
							<?php 
								if($active <= 1)
								{
									echo "selected";
								}
							?> value="0">Nie Aktywny/a</option>
						</select>
					</li>
					
					
				</ul>

				<input type="submit" name="go" value="Ustaw">
			</form>

			<br />

		</div>
	</div>
</div>