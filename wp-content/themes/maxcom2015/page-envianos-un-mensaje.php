<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Dudas y preguntas</p>
		<p>Si tienes dudas o cualquier inquietud puedes contactarnos de forma fácil y sencilla.
Si aún no eres cliente y quieres mayor información sobre cobertura 
en tu zona haz <a href="<?php echo SITEURL;?>encuentranos">clic aquí.</a> </p>
	</div>

	<div class="banner-head main portabilidad" <?php echo (isset($_GET['quiero-ser-cliente'])) ? 'style="display:none;"' : ''; ?>>
		<h2>ENVÍANOS UN MENSAJE <span>RESOLVEMOS tus dudas</span></h2>
	</div>

	<div class="banner-head portabilidad toshow quiero-ser-cliente" <?php echo (!isset($_GET['quiero-ser-cliente'])) ? 'style="display:none;"' : ''; ?>>
		<h2>QUIERO SER CLIENTE MAXCOM <span>MAXCOM ES PARA TI</span></h2>
	</div>

	<div class="banner-head portabilidad toshow ya-soy-cliente" style="display:none;">
		<h2>Ya soy cliente maxcom<span>MAXCOM ES PARA TI</span></h2>
	</div>

	<div class="elements-container formstoshow">
		<div class="element onimage alphabgB half showform" data-show="quiero-ser-cliente">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>accessoclientes.jpg" alt="Promociones 1"/>
			</div>
			<div class="info-container">
		      <h3 class="bigger">Quiero ser cliente maxcom</h3>
		      <a class="goto">Ver más</a>
		    </div>
		</div>

		<div class="element onimage alphabgR half showform" data-show="ya-soy-cliente">
			<div class="hover-container">
				<img src="<?php echo IMAGEPATH;?>consulta-mail.jpg" alt="Promociones 2"/>
			</div>
			<div class="info-container">
		      <h3 class="bigger">Ya soy cliente maxcom</h3>
		      <a class="goto">Ver más</a>
		    </div>
		</div>

  </div>

  <div class="form-container" <?php echo (!isset($_GET['quiero-ser-cliente'])) ? 'style="display:none;"' : ''; ?> id="quiero-ser-cliente">
  		<h4>Quiero ser cliente maxcom</h4>

  		<form method="post" id="form-quiero-ser-cliente">
  			<div class="group">
  				<div class="input-container">
  					<label for="nombre">*Nombre</label>
  					<input type="text" name="nombre" id="nombre"/>
  				</div>
  				<div class="input-container">
  					<label for="email">*Correo electrónico</label>
  					<input type="text" name="email" id="email"/>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<label for="telefono">*Número telefónico del contacto</label>
  					<div class="inner-group">
	  					<input type="text" name="lada" id="lada" class="smaller"/>
	  					<input type="text" name="telefono" id="telefono" class="big"/>
	  				</div>
  				</div>
  				<div class="input-container">
  					<label for="horario">Horario de contacto</label>
  					<input type="text" name="horario" id="horario"/>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<label for="calle">*Calle</label>
  					<input type="text" name="calle" id="calle"/>
  				</div>
  				<div class="input-container">
  					<div class="inner-group">
  						<div class="input-container">
		  					<label for="ext">*Número exterior</label>
		  					<input type="text" name="ext" id="ext" class="field"/>
		  				</div>
		  				<div class="input-container">
		  					<label for="int">Número interior</label>
		  					<input type="text" name="int" id="int" class="field"/>
		  				</div>
	  				</div>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<label for="entre-calles">Entre calles</label>
  					<input type="text" name="entre-calles" id="entre-calles"/>
  				</div>
  				<div class="input-container">
  					<label for="colonia">*Colonia</label>
  					<input type="text" name="colonia" id="colonia"/>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<div class="inner-group">
  						<div class="input-container">
		  					<label for="cp">*C.P.</label>
		  					<input type="text" name="cp" id="cp" class="field"/>
		  				</div>
		  				<div class="input-container">
		  					<label for="delegacion">*Municipio/Delegación</label>
		  					<input type="text" name="delegacion" id="delegacion" class="field"/>
		  				</div>
	  				</div>
  				</div>
  				<div class="input-container">
  					<label for="entidad">*Entidad</label>
  					<select name="entidad" id="entidad">
  						<option value="">Selecciona tu identidad</option>
  					</select>
  				</div>
  			</div>

  			<div class="textarea-container">
  				<label for="mensaje">*Mensaje</label>
  				<textarea name="mensaje" id="mensaje"></textarea>
  			</div>

        <div class="checkbox-container">
          <div class="check">
            <input type="checkbox" name="terms" id="quiero-terms" value="1"/>
              <label for="terms"><span></span></label>
            </div>
          <label for="terminos-y-condiciones">He leído y estoy de acuerdo con el  <a href="<?php echo SITEURL;?>aviso-de-privacidad" target="_blank">aviso de privacidad</a></label>
          <div class="error-check" style="display:none"></div>
        </div>
        
        <div class="group">   
           <div id="RecaptchaField1" data-sitekey="6Ldl1A0TAAAAAPT2uUrHHaTUJReZkLxjn_fBN5Yc"></div>
        </div>

         <div class="group">
          <div class="input-container full">
            <input type="submit" value="Enviar"/>
          </div>
        </div>
  		</form>
  </div>


    <div class="form-container" style="display:none" id="ya-soy-cliente">
  		<h4>Ya soy cliente maxcom</h4>

       <script type="text/javascript">
         var RecaptchaOptions = {
            theme : 'clean'
         };
       </script>
  		<form method="post" id="form-ya-soy-cliente">
  			<div class="group">
  				<div class="input-container">
  					<label for="nombre">*Nombre</label>
  					<input type="text" name="nombre" id="nombre"/>
  				</div>
  				<div class="input-container">
  					<label for="email">*Correo electrónico</label>
  					<input type="text" name="email" id="email"/>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<label for="telefono">*Número telefónico del contacto</label>
  					<div class="inner-group">
	  					<input type="text" name="lada" id="lada" class="smaller"/>
	  					<input type="text" name="telefono" id="telefono" class="big"/>
	  				</div>
  				</div>
  				<div class="input-container">
  					<label for="horario">Horario del contacto</label>
  					<input type="text" name="horario" id="horario"/>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<label for="no_cuenta">*Número de cuenta maxcom:</label>
  					<input type="text" name="no_cuenta" id="no_cuenta" class="field"/>
  				</div>
  				<div class="input-container">
  					<label for="entidad">*Asunto</label>
  					<select name="asunto" id="asunto">
  						<option value="">Selecciona una opción</option>
  					</select>
  				</div>
  			</div>

  			<div class="textarea-container">
  				<label for="mensaje">*Mensaje</label>
  				<textarea name="mensaje" id="mensaje"></textarea>
  			</div>

        <div class="checkbox-container">
          <div class="check">
            <input type="checkbox" name="terms" id="ya-terms" value="1"/>
              <label for="terms"><span></span></label>
            </div>
          <label for="terminos-y-condiciones">He leído y estoy de acuerdo con el  <a href="<?php echo SITEURL;?>aviso-de-privacidad" target="_blank">aviso de privacidad</a></label>
          <div class="error-check" style="display:none"></div>
        </div>

        <div class="group">   
          <div id="RecaptchaField2"></div>
        </div>

        <div class="group">
          <div class="input-container full">
            <input type="submit" value="Enviar"/>
          </div>
        </div>
  		</form>
  </div>
</div>
<?php get_footer(); ?>