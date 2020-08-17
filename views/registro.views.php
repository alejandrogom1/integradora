<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estiloregistro.css">
</head>
<body>
<div class="contenedor">
	<h1 class="titulo">Registrate</h1>
	<hr class="border">
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="POST" class="formulario" name="login">
        <div class="form-group">
		 <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" placeholder="Usuario" class="usuario">
		</div>
        <div class="form-group">
		 <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" placeholder="Contraseña" class="password">
		</div>
        <div class="form-group">
		 <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" placeholder="Contraseña" class="password_btn"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>
		<?php  if(!empty ($errores)): ?>
		<div class="error">
		<ul><?php echo $errores; ?></ul>
		</div>
		<?php endif; ?>
	</form>
	<p class="texto-registrate">
		¿Ya tienes cuenta?
		<a href="login.php">Iniciar Seción</a>
	</p>
	</div>
</body>
</html>