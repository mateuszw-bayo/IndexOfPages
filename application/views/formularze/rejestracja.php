
TWORZENIE KONTA

				<section id="reg">
					<form action="/index.php/action/register/" method="POST">
						<div class="left">
							<label for="email" >e-mail</label>
							<input type="text" required name="email" placeholder='Podaj tu swoj E-mail'><br />
							<label for="email_p" >ponownie wprowadz e-mail</label>
							<input type="text" required name="email_p" placeholder='Podaj tu swoj E-mail'>
						</div>
						<div class="right">
							<label for="password">hasło</label>
							<input type="password" required placeholder='Minimum 8 znakow' name="password"><br />
							<label for="password_p" >ponownie wprowadz hasło</label>
							<input type="password" required placeholder='Minimum 8 znakow' name="password_p">
						</div>
						<div class="center">
							<span>
								<p style="font-size: 9px;">
									Na e-mail zostanie przeslane podlinkowanie do koncowej fazy weryfikacji.<br />
									Hasło powino sie skladac z minimum 8 znakow.<br />
								</p>
							 Przeczytałem <a href="/index.php/infost/regulamin/">Regulamin</a> i go akceptuje.<input required name="ar" type="checkbox"></span>
							<input type="submit" name="act" value="Rejestruj">
						</div>
					</form>
                </section>