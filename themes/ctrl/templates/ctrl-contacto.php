<div id="contacto" class="titulo contacto seccion">

	<h2>Contacto</h2>

</div><!-- contacto -->

<div class="seccion contacto width clearfix">

	<form action="<?php echo site_url('contacto-recibido'); ?>" method="post" class="left tercio form-contacto">
		<input name="nombre" type="text" value="Nombre" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" >
		<input name="email" type="email" value="Correo" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" >
		<input name="auto" type="text" value="Asunto" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" >

		<textarea name="mensaje" name="mensaje" id="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" >Mensaje</textarea>

		<input type="submit" value="Enviar">
	</form>

	<div class="left datos-contacto">
		<h4>Dirección</h4>
		<p>Gladiolas 18 Izcalli Cuauhtémoc I, Metepec, México, C.P. 52176.</p>

		<h4>Correo</h4>
		<p>info@c-ctrl.com</p>

		<h4>Teléfono</h4>
		<p>+52 (722) 581 2191</p>
	</div><!-- left -->

</div><!-- contacto -->