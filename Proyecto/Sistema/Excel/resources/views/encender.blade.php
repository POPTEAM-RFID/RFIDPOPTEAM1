
<form name="input" action="python http://localhost/updateRFID_CHIDO.py 14040115"    method="post">

chido
<html>
	<head>
		<title>Web LED</title>



	</head>

		<body>

				<!-- Botones encender y apagar -->
					<form action="" method="post">
						<br>
						<br>
						<div  align="center">
						<!-- Lo importante de aquí es el name que debe ser el mismo que en el php, la opcion value sirve para mostrar el nombre -->
							<input type="submit" name="encender"  value="Encender" align="center" size="18">
							<input type="submit" name="apagar"  value="Apagar" align="center" size="18">
							<input type="submit" name="secuencia"  value="Secuencia" align="center" size="18">
						</div>
						<br>
					</form>

					<!-- PHP Donde si se pula el boton encender cuyo name es encender, se ejecuta el script que se encuentra en el directorio indicado -->
					<?php


						if (isset($_POST['encender'])) {

							exec('C:\Python27\python.exe http://localhost/updateRFID_CHIDO.py 14040115');

						}
						elseif (isset($_POST['apagar'])) {

							exec("sudo python /var/www/html/apagar.py");

							}
						elseif (isset($_POST['secuencia'])) {

							exec("sudo python /var/www/html/secuencia.py");

							}

					?>



	</body>
<html>
