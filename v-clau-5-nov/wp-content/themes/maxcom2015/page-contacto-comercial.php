<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-business-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Contacto Comercial</p>
		<p>En maxcom te ofrecemos un servicio de preferencia, si tienes dudas o cualquier inquietud puedes contactarnos utilizando el siguiente formato. Si aún no eres cliente y quieres mayor información sobre cobertura en tu zona haz <a href="<?php echo SITEURL;?>/encuentranos">clic aquí</a>. Uno de nuestros ejecutivos se pondrá en contacto contigo para responderte a la brevedad.</p>
	</div>

	<div class="banner-head main portabilidad">
		<h2>ENVÍANOS UN MENSAJE <span>RESOLVEMOS tus dudas</span></h2>
	</div>

  <div class="form-container" id="form-contacto-comercial">
  		<h4>Quiero ser cliente maxcom</h4>

  		<form method="post" id="form-b-contacto-comercial">
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
  					<label for="puesto">*Puesto</label>
  					<input type="text" name="puesto" id="puesto"/>
  				</div>
  			</div>
  			<div class="group">
  				<div class="input-container">
  					<label for="empresa">*Empresa</label>
  					<input type="text" name="empresa" id="empresa"/>
  				</div>
  				<div class="input-container">
            <label for="n_empleados">*Número de empleados:</label>
            <select name="n_empleados" id="n_empleados">
              <option>Selecciona el número de empleados</option>
              <option value="0 a 15 empleados">0 a 15 empleados</option>
              <option value="16 a 250 empleados">16 a 250 empleados</option>
              <option value="251 a 1000 empleados">251 a 1000 empleados</option>
              <option value="Más de 1000 empleados">Más de 1000 empleados</option>
            </select>
          </div>
  			</div>
  			<div class="group">
  				<div class="input-container">
            <label for="direccion">*Dirección</label>
            <input type="text" name="direccion" id="direccion"/>
          </div>
  				<div class="input-container">
  					<label for="asunto">*Asunto</label>
  					<select name="asunto" id="asunto">
  						<option value="">Selecciona tu asunto</option>
              <option>Selecciona una opción</option>
              <option value="Deseo solicitar un Asesor">Deseo solicitar un Asesor</option>
              <option value="Deseo solicitar una Video Conferencia">Deseo solicitar una Video Conferencia</option>
              <option value="Otro" class="conditional">Otro</option>
  					</select>
  				</div>
  			</div>

  			<div class="textarea-container">
  				<label for="mensaje">*Mensaje</label>
  				<textarea name="mensaje" id="mensaje"></textarea>
  			</div>
        <div class="checkbox-container">
          <div class="check">
            <input type="checkbox" name="terms" id="terms" value="1"/>
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

</div>
<?php get_footer(); ?>