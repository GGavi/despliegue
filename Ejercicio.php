<html>

	<head>
		<title>Ejercicio1</title>
	</head>
	
	<body>
		<?php
		
			// Recibir una ip y pasarla a binario
        
            // Primer punto en la posicion 3
            // Segundo punto en la posicion 6
            // Tercer punto en la posicion 9
        
        $ip = "1.2.3.10";
        
        $puntaco1 = strpos($ip,".",0);
        $puntaco2 = strpos($ip,".",$puntaco1+1);
        $puntaco3 = strpos($ip,".",$puntaco2+1);
                           
        printf("%08b . %08b . %08b . %08b <br>",
              substr($ip,0,$puntaco1),
              substr($ip,$puntaco1+1,$puntaco2),
              substr($ip,$puntaco2+1,$puntaco3),
              substr($ip,$puntaco3+1,strlen($ip)));

		?>
	</body>

</html>