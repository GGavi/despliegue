<html>

	<head>
		<title>Calculadora</title>
	</head>
	
	<body>
		<?php
			
		function suma($a, $b) {
			
			$suma = $a + $b;
			return $suma;
		}
		
		function resta($a, $b) {
			
			$resta = $a - $b;
			return $resta;
		}
		
		function multiplicacion($a, $b) {
			
			$multiplicacion = $a * $b;
			return $multiplicacion;
		}
		
		function division($a, $b) {
			
			$division = $a / $b;
			return $division;
		}
		
		?>
		
		<?php
		
		$a = 24;
		$b = 12;
		
		echo "Suma de a + b: ".suma($a,$b)."<br>";
		echo "Resta de a - b: ".resta($a,$b)."<br>";
		echo "Multiplicacion de a * b: ".multiplicacion($a,$b)."<br>";
		echo "Divison de a + b: ".division($a,$b)."<br>";
		
		?>
	</body>

</html>