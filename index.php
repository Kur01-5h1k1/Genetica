<?php 
	include 'assets/php/header.php'; 
?>

	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Genetica</a></h1>
						<nav>
							<a href="#menu">Meniu</a>
						</nav>
					</header>

				<!-- Menu -->
					<?php 
						include 'assets/php/menu.php';
					?>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><i class="fas fa-dna" style='font-size: 48px'></i></div>
							<h2>Genetica</h2>
							<p>Facem genetica accesibila</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="images/adn.webp" alt="" /></a>
									<div class="content">
										<h2 class="major">Ce Este Genetica?</h2>
										<p>Genetica studiază modul în care organismele vii moștenesc caractere, numite trăsături, de la precursorii lor; de exemplu, copiii seamănă adesea cu părinții. Genetica urmărește să stabilească ce trăsături sunt moștenite și să explice cum sunt transmise aceste trăsături din generație în generație.</p>
										<a href="generic.php" class="special">Afla mai multe!</a>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/x.jpeg" alt="" /></a>
									<div class="content">
										<h2 class="major">Cum Este Structurata Informatia?</h2>
										<p>Informația genetică e conținută într-o moleculă lungă numită ADN care e copiată și moștenită din generație în generație. Trăsăturile se găsesc în ADN sub forma de instrucțiuni pentru construirea și funcționarea unui organism. Aceste instrucțiuni sunt conținute în segmente de ADN numite gene.</p>
										<a href="generic.php" class="special">Afla mai multe!</a>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/cerc.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Cum Functioneaza?</h2>
										<p>ADN constă dintr-o secvență de unități simple, iar ordinea acestor unități „scrie” instrucțiunile într-un cod genetic. Situația e similară cu a literelor care, într-o anumită ordine, compun cuvintele unui text. Organismul „citește” înșiruirea acestor unități și decodifică instrucțiunea.</p>
										<a href="generic.php" class="special">Afla mai multe!</a>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Ramuri Ale Geneticii</h2>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/dna.jpg" alt="" /></a>
											<h3 class="major">Genetică moleculară</h3>
											<p>Genetică moleculară este ramura biologiei și geneticii care se ocupă cu studiul structurii și fiziologiei genelor la nivel molecular. Genetica moleculară lucrează pe metodele geneticii și biologiei moleculare pentru a elucida funcția moleculară și interacțiile dintre gene.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/genetica populatiei.jpg" alt="" /></a>
											<h3 class="major">Genetica populațiilor</h3>
											<p>Genetica populațiilor este studiul distribuției și modificărilor frecvențelor alelelor în cadrul unei populație și între populații diferite sub presiunea factorilor.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/genetica umana.png" alt="" /></a>
											<h3 class="major">Genetică umană</h3>
											<p>Genetica umană este ramura geneticii care studiază transmiterea caracterelor ereditare la oameni. Genele pot fi factorul comun pentru majoritatea trăsăturilor moștenite la om. Studiul geneticii umane poate fi util deoarece poate răspunde la unele întrebări legate de natura umană și poate ajuta la înțelegerea bolilor și la dezvoltarea de tratamente eficiente ale acestora.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/inginerie genetica.webp" alt="" /></a>
											<h3 class="major">Inginerie genetică</h3>
											<p>Ingineria genetică reprezintă un ansamblu de metode de lucru prin care se manipulează materialul genetic la nivel molecular și celular. Astfel se obțin microorganisme, plante și animale reprogramate genetic, în al căror genom sunt incluse gene străine, utile, exprimabile și transmisibile stabil la descendenți.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>
									<ul class="actions">
										<li><a href="#" class="button">Browse All</a></li>
									</ul>
								</div>
							</section>

					</section>

					<?php
						include("assets/php/footer.php");
					?>

				<!-- Footer 
					<section id="footer">
						<div class="inner">
							<h2 class="major">Contact</h2>
							<p>Daca ai vreo intrebare, ne gasesti aici.</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Nume si Prenume</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mesaj</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Trimite" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									Untitled Inc<br />
									1234 Somewhere Road Suite #2894<br />
									Nashville, TN 00000-0000
								</li>
								<li class="icon solid fa-phone">(000) 000-0000</li>
								<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
								<li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
								<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section> 

					
					

			</div>

		 Scripts 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html> -->
