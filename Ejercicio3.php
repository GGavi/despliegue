<html>

	<head>
		<title>3</title>
	</head>
	
	<body>
		<?php
			
		$numeraso = 48;
		$cociente = $numeraso;
		$resto = 0;
		$binario = "";
		
		while ($cociente >= 1) {
			
			$resto = $cociente % 2;
			$cociente = $cociente / 2;
			$binario = $binario.$resto;
		}
		
		$binario = strrev($binario);
		
		$binario = str_pad($binario,8,"0",STR_PAD_LEFT);
		
		echo $binario;
			
		?>
	</body>

</html>