<?php include "navbar.php";
	$pass1 = true;
	$pass2 = true;
	$emailErr = "";
	$msgErr = "";
	$to = "mzhang@tandotek.com";
	if(isset($_POST['enviar'])) {
		//Variables
		$name = $_POST['nombre'];
		$email = $_POST['correo'];
			
		if($name == '') {
			$name = "Anon";
		}
		$msg = $_POST['mensaje'];
		$msg = wordwrap($msg, 70, "\r\n");
		$header = "From: ". $email ."\r\n";
			
		//Validación
		if (strlen($msg) < 10) {
			$msgErr = "<p><span class='glyphicon glyphicon-exclamation-sign'/> </span>Su mensaje debe llevar mínimo 10 caracteres.</p>";
			$pass1 = false;
		}
			
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "<p><span class='glyphicon glyphicon-exclamation-sign'/> </span>Su correo está incorrecto.</p>";
			$pass2 = false;
		}
			
		if($pass1 & $pass2) {
			mail($to, "Website E-mail from ".$name, $msg, $header);
			header ("Location: mail_sent.php");
		}
	}
	?>
	<div class="container" id="mail-us">
		<h2 id="lgnd">Contactanos</h2>
		<form id="mail-form" class="input-group" method="POST" action="correo.php">
			<label>Nombre: </label><br />
			<input id="sender" type="text" class="form-control" placeholder="Su nombre" name="nombre"  maxlength="20"/><br />
			<label>Correo: </label><br />
			<input id="email" type="text" class="form-control" placeholder="Su correo" name="correo" required/>
			<br />
			<label>Mensaje: </label><br />
			<textarea id="msg" type="text" class="form-control" rows="4" cols="50" placeholder="Su mensaje..." name="mensaje" required></textarea> 
			<br />
			<div class="form-group submit-group">
				<button name="enviar" class="btn btn-success" onsubmit="">Enviar Correo</button>
			</div>
		</form>
		<div id="error">
			<?php 
			echo $emailErr;
			echo $msgErr;
			?>
			<div id="foot">
			<p>
			<span class="pull-left">&copy; Tandotek Solutions 2016</span>
			<img src="Logo Tandotek Chico.png" class="pull-right" style="height: 35px" /><span class="pull-right">Powered by &copy; </span>
			</p>
		</div>
		</div>
	</div>
</body>
</html>