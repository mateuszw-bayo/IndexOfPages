<div >
	<p>
		<h2>
			Zlecenie płatne.
		</h2>
		Witam w dziale w ktorym mozesz zaoferowac propozycje do projekty jak i prace.
		Prosze o uzupelnienie poprawnie formularza. <br />
		<br />
		Pierwsze 3 rubryki są wymagane. 
		<br /><br />
	</p>
	
	<div class='form'>
		<form action="/index.php/actionp/a_ofering" method="post">
			<ul>
				<li>
					<label>Twój e-mail :</label><input placeholder="E-mail" type="text" name="email" />
				</li>
				<li>
					<label>Temat :</label><input type="text" placeholder="Temat" name="email_temat">
				</li>
				<li class="textareaM">	
					<textarea placeholder="Treść" class="mini" name="email_text"></textarea>
				</li>
				<li>
					<label>Oferta : </label><input type="text" placeholder="Cena" name="email_cena">
				</li>
			</ul>
			<input type="hidden" name="option" value="zl">
			<input type="submit" value="wyslij">
		</form>
	</div>

</div>
