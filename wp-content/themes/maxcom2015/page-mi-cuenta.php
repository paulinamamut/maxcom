<?php get_header(); ?>
<div id="content" class="maxConexion-container">
	<!-- INIT PARALLAX TOP BANNER -->
	<?php	get_template_part( 'template/maxcom-header' ); ?>
	<!-- END PARALLAX TOP BANNER -->
	<div class="general-info">
		<p class="title">Mi cuenta</p>
		<p>Ten acceso a toda tu información de manera rápida y segura. Sólo tienes que iniciar sesión para revisar tus estados de cuenta, facturas y más.</p>
	</div>


	<div class="banner-head portabilidad">
		<h2>Mi<span>cuenta maxcom</span></h2>
	</div>

  <div class="form-full form-container" id="mi-cuenta">
  		<h4>Mi cuenta</h4>

  		<form method="post" id="form-mi-cuenta">
  				<div class="input-container full">
  					<label for="nombre">*Nombre de usuario</label>
  					<input type="text" name="uname" id="uname"/>
  				</div>
  				<div class="input-container full">
  					<label for="pass">*Contraseña</label>
  					<input type="password" name="pass" id="pass"/>
  				</div>

        <div class="group">
          <div class="input-container full">
            <input type="submit" value="Enviar"/>
          </div>
        </div>
  		</form>
      <p>¿No recuerdas tu constraseña? Recupérala <a href="http://www.admon.maxcom.com/RegistroOnLine/registro/RecuperarPwd.aspx" target="_blank">aquí</a> </p>
      <p>¿Aún no eres un usuario registrado? Regístrate <a href="http://www.admon.maxcom.com/RegistroOnLine/registro/registro.aspx" target="_blank">aquí</a></p>
  </div>

</div>
<?php get_footer(); ?>