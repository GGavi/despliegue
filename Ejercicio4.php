<html>

	<head>
		<title>4</title>
	</head>
	
	<body>
		<?php
			
		$numeraso = 48;
		$cociente = $numeraso;
		$base = 8;
		$resto = 0;
		$octal = "";
		
		while ($cociente >= 1) {
			
			$resto = $cociente % $base;
			$cociente = $cociente / $base;
			$octal = $octal.$resto;	 
		}
		
		$octal = strrev($octal);
		
		echo $octal;
			
		?>
	</body>

</html>