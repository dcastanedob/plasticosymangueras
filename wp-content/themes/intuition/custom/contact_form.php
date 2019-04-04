<?php 
	ini_set('display_errors', 1);
ini_set('display_startup_errors' , 1);
		error_reporting(E_ALL);
		if($_POST){
		require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'mail.plasticosymangueras.com.mx';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'no-reply@plasticosymangueras.com.mx';                 // SMTP username
		$mail->Password = 'Hola.1234';                           // SMTP password
		$mail->SMTPSecure = 'tls';                   // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 25;                                    // TCP port to connect to

		$mail->setFrom('no-reply@plasticosymangueras.com.mx', 'Sitio Web JOLEGEASVA');
		$mail->addAddress('ventas@plasticosymangueras.com.mx','Ventas JOLEGEASVA');     // Add a recipient
		
		$mail->Subject = 'CONTACTO DESDE Sitio Web JOLEGEASVA';
		$mail->isHTML(true);     
		$mail->Body    = '<p><b>Hola!</b></p><p>Una persona ha contactado desde nuestro sitio web proporcionando la siguiente informacion</p><p><b>Nombre: </b>'.utf8_decode($_POST['nombre']).'</p><p><b>Correo: </b>'.$_POST['email'].'</p><p><b>Telefono: </b>'.utf8_decode($_POST['telefono']).'</p><p><b>Producto: </b>'.utf8_decode($_POST['producto']).'</p><p><b>Mensaje: </b>'.utf8_decode($_POST['mensaje']).'</p>';
	

		if(!$mail->send()) {
			$mensaje =  '<strong>Ocurrió un error al intentar enviar su mensaje.</strong> Por favor refresque la pagina y pruebe nuevamente.';	
			$mensaje_class = 'alert alert-danger';
		} else {
			$mensaje =  '<strong>Su mensaje ha sido enviado.</strong> En breve nos podremos en contacto con usted.';
			$mensaje_class = 'alert alert-success';
		}

		}
	?>
<style>
	.contact_map .wpb_wrapper{
		padding: 0px !important;
	}
</style>
<div class="row">
	<?php if(isset($mensaje)) :?>
		<div class="col-xs-12">
			<div class="<?php echo $mensaje_class?>" role="alert"><?php echo $mensaje?></div>	
		</div>
	<?php endif;?>
	<div class="col-xs-12">
		<h3 style="color: white; margin-bottom: 0px;">Solicita una cotización</h3>
		<h6 style="color: white; font-style: italic; margin-top: 5px;">Estaremos encantados de ayudarte</h6>
	</div>
	<div class="col-xs-12">
		<form class="form-horizontal" method="post" action="/contacto">
			<div class="form-group">
				<label class="col-sm-2 control-label" style="color:white; text-align: left">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="nombre">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" style="color:white; text-align: left">Correo electrónico</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" required name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" style="color:white; text-align: left">Teléfono</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="telefono">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" style="color:white; text-align: left">Producto</label>
				<div class="col-sm-10">
					<select class="form-control" name="producto">
						<option value="Túberia lisa para uso eléctrico">Túberia lisa para uso eléctrico</option>
						<option value="Túberia lisa para uso agricola">Túberia lisa para uso agricola</option>
						<option value="aja chalupa">Caja chalupa</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" style="color:white; text-align: left">Mensaje</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="3" name="mensaje"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-8 col-xs-12">
					<button type="submit" class="btn btn-success btn-block" >Enviar</button>		
				</div>
				
			</div>
		</form>
	</div>
</div>