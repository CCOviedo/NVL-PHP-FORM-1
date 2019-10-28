<html>
	<body>
		<form action="php-form-1-servidor.php" method="POST">
			<div>
				<label>Email: </label>
				<input type="email" name="email">
			</div>
			
			<div>
				<label>Contraseña: </label>
				<input type="password" name="password">
			</div>
			
			<div>
				<label>Confirmar cotraseña: </label>
				<input type="password" name="conf-password">
			</div>
			
			<input type="hidden" name="form_submitted" value="1" />
			<input type="submit" value="Submit">
		</form>
		
		<?php
			if (isset($_POST['form_submitted'])){
				$pw = $_POST['password'];
				$cnf_pw = $_POST['conf-password'];
				
				if($pw != "" && $cnf_pw != ""){
					if($pw == $cnf_pw && (strlen($pw) >= 8 && strlen($cnf_pw) >= 8))
					{ 
		?>				<h2>
							<?php echo "Datos procesados correctamente"; ?>
						</h2>
					<?php
					}else{
					?>
						<h2>
							<?php echo "Error en el formulario"; ?> 
						</h2>
					<?php
					}
				}
			}
					?>
	</body>
</html>
