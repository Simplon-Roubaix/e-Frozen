<?php
			// Connexion à la base de données
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=frozen;charset=utf8', 'root', 'simplon2017');
			}
			catch(Exception $e)
			{
							die('Erreur : '.$e->getMessage());
			}
// requete mysql:On récupère les infos
			$req = $bdd->query('SELECT * FROM info_site');

			//affichage resultat de la requete//
			$donnees= $req->fetch();
			?>



		<footer>
			<p>Design and conception by <?php echo $donnees['auteur']; ?> .</p>
			<p>On <?php echo $donnees['date']; ?> .</p>
		</footer>

		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/materialize.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
