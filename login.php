<?php include "navbar.php"; 
	$log_err = "";
	if(isset($_POST["confirm"])) {
		$usr = $_POST["usr"];
		$pwd = $_POST["pwd"];
		$sql = "SELECT * FROM users WHERE username = '" . $usr . "' AND password = '". $pwd . "'";
		$result = mysqli_query($conn, $sql);
		$rows = mysqli_num_rows($result);
      	if($rows == 1) {
      		$row = mysqli_fetch_assoc($result);
      		$_SESSION["id"] = $row["id"];
      		$_SESSION["username"] = $usr;
      		header("Location:index.php");
      	} else {
      		$log_err = "<p><span class='glyphicon glyphicon-exclamation-sign'/> El nombre de usuario o la contraseña están incorrectas.</p>";
      	}
	}
 if(!isset($_SESSION["id"])) {
echo '<div class="container" id="sesion">
		<h2 id="lgnd">Iniciar sesión</h2>
		<form id="login-form" class="input-group" method="POST" action="login.php">
			<label>Usuario: </label><br />
			<input type="text" class="form-control" placeholder="Usuario" name="usr"  maxlength="15" required/><br />
			<label>Contraseña: </label><br />
			<input type="password" class="form-control" placeholder="Contraseña" name="pwd" required/>
			<br />
			<div class="form-group submit-group">
				<button name="confirm" class="btn btn-success">Confirmar</button>
			</div>
			</form>

		<div id="error">';
		echo $log_err . '
		</div>

		<div id="foot">
			<p>
			<span class="pull-left">&copy; Tandotek Solutions 2016</span>
			<img src="Logo Tandotek Chico.png" class="pull-right" style="height: 35px" /><span class="pull-right">Powered by &copy; </span>
			</p>
		</div>
	</div>
</body>
</html>';
} else {
	header("Location: index.php");
	exit();
}
?>