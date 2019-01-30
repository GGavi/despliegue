<html>

	<head>
		<title>5</title>
	</head>
	
	<body>
		<?php
			
		$numeraso = 48;
		$cociente = $numeraso;
		$base = 16;
		$resto = 0;
		$hexa = "";
		
		while ($cociente >= 1) {
			
			$resto = $cociente % $base;
			$cociente = $cociente / $base;
			if ($resto > 9) {
				switch ($resto) {
					case 10: $hexa = $hexa."A";
							 break;
					case 11: $hexa = $hexa."B";
							 break;
					case 12: $hexa = $hexa."C";
							 break;
					case 13: $hexa = $hexa."D";
							 break;
					case 14: $hexa = $hexa."E";
							 break;
					case 15: $hexa = $hexa."F";
							 break;
					}
			} else {
				$hexa = $hexa.$resto;
			}
		}
		
		$hexa = strrev($hexa);
		
		echo $hexa;
			
		?>
	</body>

</html>