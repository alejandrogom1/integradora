<!DOCTYPE html>
<html lang="Es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" href="../css/estiloregistro.css">	
    <link rel="stylesheet" href="../css/estilos1.css">	
</head>
<body>
<div class="contenedor">
	<h1 class="titulo">Iniciar Seción</h1>
	<hr class="border">
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="POST" class="formulario" name="login">
        <div class="form-group">
		 <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" placeholder="Usuario" class="usuario">
		</div>
        <div class="form-group">
		 <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" placeholder="Contraseña" class="password_btn"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>
		<?php  if(!empty ($errores)): ?>
		<div class="error">
		<ul><?php echo $errores; ?></ul>
		</div>
		<?php endif; ?>
	</form>
	<p class="texto-registrate">
		¿A un no tienes una cuenta?
		<a href="Registrate.php">Registrate</a>
	</p>
	</div>
    
</body>
</html>