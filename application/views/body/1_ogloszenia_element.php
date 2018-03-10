	<article class='<?php echo $color; ?>'>


		<table CELLPADDING="0" CELLSPACING="0">
			<tr><td class='left'>
				<div class='left'>
					<a href=""><img src="/img/user/off-user-avatar-30.png" width="30" /></a><br />T
				</div>
			</td><td class="line">
				<div>
					
				</div>
			</td><td class="center">
				<div>
					<h1><?php echo $temat; ?></h1>
					
<?php echo $tresc; ?>
<p class="footer">Opublikowano : <time timedate="2014-03-02" pubdate>02-03-2014r</time></p>
				</div>
			</td><td class='right'>
				<div class='right' style="display:table; ">
					<div style="display:table-cell;vertical-align:middle;">
						<div>
							<header>
								tekst na gorze
							</header>
							<footer>
								Komentarze<?php if($coment > 0)
								{
									echo "(*)";
								}
								?>
							</footer>
						</div>
					</div>
				</div>
			</td></tr>
		</table>
		
	</article>