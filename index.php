<html>
    <head>
        <meta charset="UTF-8">
        <title>testheroku</title>
    </head>
    <body>
    	<?php
        	//$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=GWCourses', 'postgres', '12345678');
        	//echo "done!!!!!!";
	    	$db = parse_url(getenv("postgres://knrfhlsfnwxwvx:aba906d0136d6b051d50e7e44741c74c72a88f97cc83c46aace2606289c740f1@ec2-174-129-209-212.compute-1.amazonaws.com:5432/d2jcglfroenmhj"));

			$pdo = new PDO("pgsql:" . sprintf(
			    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
			    $db["ec2-174-129-209-212.compute-1.amazonaws.com
"],
			    $db["5432"],
			    $db["knrfhlsfnwxwvx"],
			    $db["aba906d0136d6b051d50e7e44741c74c72a88f97cc83c46aace2606289c740f1"],
			    ltrim($db["postgres://knrfhlsfnwxwvx:aba906d0136d6b051d50e7e44741c74c72a88f97cc83c46aace2606289c740f1@ec2-174-129-209-212.compute-1.amazonaws.com:5432/d2jcglfroenmhj
"], "/")
));

        	$sql = "SELECT studentname, course FROM registercourse";
        	$stmt = $pdo->prepare($sql);
        	// thiet lap kieudu lieu tra ve
        	$stmt->setFetchMode(PDO::FETCH_ASSOC);
        	$stmt->execute();
        	$resultSet = $stmt->fetchAll();


        ?>
        <ul>
		<?php  
			foreach ($resultSet as $row) {
			echo '<li>' .
				$row['studentname'] . ' --' . $row['course'] 
				. '</li>';
			}
		?>
		</ul>
    </body>
</html>



