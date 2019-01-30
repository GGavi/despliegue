<html>

	<head>
		<title>Ejercicio2</title>
	</head>
	
	<body>
		<?php
		
        // Recibir una ip con mascarote y averiguar la direccion de red
        
        $ip = "192.45.127.10/18";
        
        $puntaco1 = strpos($ip,".",0);
        $puntaco2 = strpos($ip,".",$puntaco1+1);
        $puntaco3 = strpos($ip,".",$puntaco2+1);
        $barrote = strpos($ip,"/",0);
        $bitazos = substr($ip,$barrote+1,strlen($ip));

        $ipbin = sprintf("%08b%08b%08b%08b <br>",
            substr($ip,0,$puntaco1),
            substr($ip,$puntaco1+1,$puntaco2),
            substr($ip,$puntaco2+1,$puntaco3),
            substr($ip,$puntaco3+1,$barrote));
        
        echo $ipbin;
        
        $ipDefinitiva = substr($ipbin,0,$bitazos);
        $ipDefinitiva = str_pad($ipDefinitiva, 32, 0, STR_PAD_RIGHT);
        
        echo $ipDefinitiva."<br>";
        
        $primerOct = substr($ipDefinitiva,0,8);
        echo $primerOct."<br>";
        
        $segundoOct = substr($ipDefinitiva,8,8);
        echo $segundoOct."<br>";
        
        $tercerOct = substr($ipDefinitiva,16,8);
        echo $tercerOct."<br>";
        
        $cuartoOct = substr($ipDefinitiva,24,8);
        echo $cuartoOct."<br>";
        
        $primerOct = bindec($primerOct);
        echo $primerOct."<br>";
        
        $segundoOct = bindec($segundoOct);
        echo $segundoOct."<br>";
        
        $tercerOct = bindec($tercerOct);
        echo $tercerOct."<br>";
        
        $cuartoOct = bindec($cuartoOct);
        echo $cuartoOct."<br>";
        
        echo ("Direccion de red: ".$primerOct.".".$segundoOct.".".$tercerOct.".".$cuartoOct."<br><br>");
        
        // Direccion Broadcast
        
        $ipDefinitiva1 = substr($ipbin,0,$bitazos);
        $ipDefinitiva1 = str_pad($ipDefinitiva1, 32, 1, STR_PAD_RIGHT);
        
        echo $ipDefinitiva1."<br>";
        
        $primerOct1 = substr($ipDefinitiva1,0,8);
        echo $primerOct1."<br>";
        
        $segundoOct1 = substr($ipDefinitiva1,8,8);
        echo $segundoOct1."<br>";
        
        $tercerOct1 = substr($ipDefinitiva1,16,8);
        echo $tercerOct1."<br>";
        
        $cuartoOct1 = substr($ipDefinitiva1,24,8);
        echo $cuartoOct1."<br>";
        
        $primerOct1 = bindec($primerOct1);
        echo $primerOct1."<br>";
        
        $segundoOct1 = bindec($segundoOct1);
        echo $segundoOct1."<br>";
        
        $tercerOct1 = bindec($tercerOct1);
        echo $tercerOct1."<br>";
        
        $cuartoOct1 = bindec($cuartoOct1);
        echo $cuartoOct1."<br>";
        
        echo ("Direccion de Broadcast: ".$primerOct1.".".$segundoOct1.".".$tercerOct1.".".$cuartoOct1);
        
        // Rango de direcciones
        
        
        
        
        /*
        /16 /24 /25....
        
        stringnuevo = stringIP -> quitar los puntacos -> 192168015
        -> binario 10000100000 -> 16 donde empiecen los host
        
        
        
        */                 
        /*printf("%08b . %08b . %08b . %08b <br>",
              substr($ip,0,$puntaco1),
              substr($ip,$puntaco1+1,$puntaco2),
              substr($ip,$puntaco2+1,$puntaco3),
              substr($ip,$puntaco3+1,strlen($ip)));
        */
		?>
	</body>

</html>