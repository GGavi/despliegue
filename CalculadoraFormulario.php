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
		
		$dato1 = $_POST['dato1'];
		$dato2 = $_POST['dato2'];
		
		$operacion = $_POST['operacion'];
		
		if ($operacion == 'suma') {
			echo suma($dato1,$dato2);
		} else if ($operacion == 'resta') {
			echo resta($dato1,$dato2);
		} else if ($operacion == 'multiplicacion') {
			echo multiplicacion($dato1,$dato2);
		} else if ($operacion == 'division') {
			echo division($dato1,$dato2);
		}
		
		?>
	</body>

</html>