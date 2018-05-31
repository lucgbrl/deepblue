<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo?></title>
</head>
<body>

<div id="container">
	<h1>Santos & Workers</h1>
	<div id="body">
		<p><?php echo $conteudo?></p>
		<code>application/controllers/Welcome.php</code>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
