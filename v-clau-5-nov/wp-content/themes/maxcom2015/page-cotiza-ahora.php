<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Cotiza ahora</p>
		<p>Si tienes dudas o cualquier inquietud puedes contactarnos de forma fácil y sencilla.
Si aún no eres cliente y quieres mayor información sobre cobertura 
en tu zona haz <a href="<?php echo SITEURL;?>encuentranos">clic aquí.</a> </p>
	</div>


	<div class="banner-head portabilidad">
		<h2>Mi<span>paquete maxcom</span></h2>
	</div>

  <div class="form-container form-full" id="mi-cuenta">
  		<h4>Mi paquete</h4>
      <?php 
        $precio = (isset($_GET['precio']) ? $_GET['precio'] : '00.00');
        $maxConexion = (isset($_GET['maxConexion']) ? $_GET['maxConexion'] : '');
        $maxDiversion = (isset($_GET['maxDiversion']) ? $_GET['maxDiversion'] : '');
        $maxMovil = (isset($_GET['maxMovil']) ? $_GET['maxMovil'] : '');
      ?>
  		<form method="post" id="form-mi-cuenta">
        <div class="cotizador-oferta">
          <div class="cotizador-combo">

            <?php if(!empty($maxConexion)): ?>
            <div class="p-maxConexion">
              <h3 class="titulo logito maxConexion">maxConexion</h3>
                <p><?php echo $maxConexion; ?></p>
                 <div class="controller-container">
                    <input type="checkbox" name="check-maxConexion" id="check-maxConexion" value="maxConexion" checked>
                    <label for="check-maxConexion"><span></span></label>
                  </div>
              </div>

              <?php endif; ?>

              <?php if(!empty($maxDiversion)): ?>
              <div class="p-maxDiversion">
                <h3 class="titulo logito maxDiversion">maxDiversion</h3>
                <p><?php echo $maxDiversion; ?></p>
                 <div class="controller-container">
                    <input type="checkbox" name="check-maxDiversion" id="check-maxDiversion" value="maxDiversion" checked>
                    <label for="check-maxDiversion"><span></span></label>
                  </div>
              </div>
              <?php endif; ?>

              <?php if(!empty($maxMovil)): ?>
              <div class="p-maxMovil">
                <h3 class="titulo logito maxMovil">maxMovil</h3>
                <p><?php echo $maxMovil; ?></p>
                 <div class="controller-container">
                    <input type="checkbox" name="check-maxMovil" id="check-maxMovil" value="maxMovil" checked>
                    <label for="check-maxMovil"><span></span></label>
                  </div>
              </div>
              <?php endif; ?>


            </div>
          </div>
  				<div class="input-container full">
  					<label for="nombre">*Nombre</label>
  					<input type="text" name="nombre" id="nombre"/>
  				</div>
  				<div class="input-container full">
            <label for="email">*Correo electrónico</label>
            <input type="text" name="email" id="email"/>
          </div>

          <div class="input-container full">
            <label for="telefono">*Número telefónico</label>
            <div class="inner-group">
              <input type="text" name="lada" id="lada" class="smaller"/>
              <input type="text" name="telefono" id="telefono" class="big"/>
            </div>
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