<?php
include "navbar.php";
if(!isset($_SESSION["id"]) && !isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
} else {
	echo "<div class='container' id='demo'>
	<h2 id='lgnd'>Demo</h2>
	<div class='row'>
		<iframe style='margin-top: 30px' width='70%' height='470px' src='https://www.youtube.com/embed/-cVUbrUftXU' frameborder='0' allowfullscreen></iframe>
	</div>
	<div id='foot'>
			<p>
			<span class='pull-left'>&copy; Tandotek Solutions 2016</span>
			<img src='Logo Tandotek Chico.png' class='pull-right' style='height: 35px' /><span class='pull-right'>Powered by &copy; </span>
			</p>
		</div>
</div>
</body>
</html>";
}
?>