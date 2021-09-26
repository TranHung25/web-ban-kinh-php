<?php
    include('../admincp/modules/header-admin.php');
	include('../admincp/connect/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" href="../admincp/css/style-admin.css">
	<link rel="stylesheet" href="../assest/css/grid.css">
</head>

<body>
	<div class="grid wide">
		<div class="title-name">
			<h1>Welcome to Admincp</h1>
		</div>
	</div>
	<div class="grid wide">
	<?php 
			// include("config/config.php");
			// include("modules/header.php");
			// include("modules/menu.php");
			include("../admincp/modules/main.php");
			// include("modules/footer.php");
	?>
	</div>

</body>
</html>
<?php
 include('../admincp/modules/footer-admin.php');
?>