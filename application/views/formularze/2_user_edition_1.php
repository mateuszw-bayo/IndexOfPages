<div class="form">
			<form action="/games/index.php/action/p_ust1" method="POST">
				<ul>

					<li>
						<label>Imie : </label><input type="text" placeholder="Imie" name="user_im" value="<?php if(!empty($firstname))echo $firstname; ?>"/>
					</li>
					<li>
						<label>Nazwisko : </label><input type="text" placeholder="Nazwisko" name="user_nz" value="<?php if(!empty($lastname))echo $lastname; ?>" />
					</li>
					<li>
						<label>Nick : </label><input type="text" placeholder="Nick" <?php 


						if(!empty($nickname) && !is_numeric($nickname))
						{
							echo "disabled";
						}
						else 
						{
							echo "name=\"user_nc\"";
						} 


						?> value="<?php if(!empty($nickname))echo $nickname; ?>" />
					</li>
					<li>
						<label>Płeć : </label>
						<select name="user_sex">
							<option
							<?php 
								if($sex == 1)
								{
									echo "selected";
								}
							?> value="1">Mężczyzna</option>
							<option
							<?php 
								if($sex == 2)
								{
									echo "selected";
								}
							?> value="2">Kobieta</option>
							<?php 
								if($sex == 0)
								{
									echo "<option selected> --- </option>";
								}
							?>
						</select>
					</li>
					<li>
						<p>Opis własnej osoby</p>
					</li>
					<li class="textareaB">
						<textarea class="big" style="width: 475px;"></textarea>
					</li>

				</ul>

				<input type="submit" name="go" value="Edytuj">
			</form>
		</div>