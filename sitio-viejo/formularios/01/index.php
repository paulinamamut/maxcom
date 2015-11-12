<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="http://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<a href="#">maxcom for Business</a>
			<h1>Conoce las soluciones en <span class="capitalize">telecomunicaciones</span> que tenemos para tu <span class="capitalize">Empresa</span></h1>
		</div>
		<div id="content">
			<p class="text">En maxcom te ofrecemos los mejores servicios de Telefonía local, Larga Distancia, Voz IP, Datos, Internet y Televisión que tu empresa necesita para garantizar una operación óptima y con eficiencia de costos, a través de una infraestructura propia de última tecnología.</p>
			<ul>
				<li>
					<h2>Soluciones de Conectividad</h2>
					<p>Optimiza el funcionamiento de tu empresa</p>
					<a href="#">Conoce más > </a>
				</li>
				<li>
					<h2>Soluciones de Comunicación</h2>
					<p>Saca el mejor provecho de tus redes</p>
					<a href="#">Conoce más > </a>
				</li>
				<li>
					<h2>Soluciones Compartidas</h2>
					<p>Usa sólo los recursos que necesitas y ahorra dinero</p>
					<a href="#">Conoce más > </a>
				</li>
			</ul>
			<div id="formulario">
				<h3></h3>
				<? echo $error; ?>
				<form action="" method="post">
					<label class="obligatorio first">
						<input type="text" name="empresa" value="<? echo $empresa;?>">
						Nombre de la empresa
					</label><!--
					--><label class="obligatorio rfc">
						<input type="text" name="rfca" value="<? echo $rfca; ?>">
						<input type="text" name="rfcb" value="<? echo $rfcb; ?>">
						<input type="text" name="rfcc" value="<? echo $rfcc; ?>">
						RFC de la empresa
					</label>
					<label class="first">
						<input type="text" name="nombre" value="<? echo $nombre; ?>">
						Nombre del contacto
					</label><!--
					--><label class="obligatorio">
						<select name="puesto">
							<option value="">Selecciona una opción</option> 
							<option value="Encargado de TI"<? echo $puesto=='Encargado de TI'?' selected':''; ?>>Encargado de TI</option>
							<option value="Gerente"<? echo $puesto=='Gerente'?' selected':''; ?>>Gerente</option>
							<option value="Director"<? echo $puesto=='Director'?' selected':''; ?>>Director</option>
						</select>
						Puesto
					</label>
					<label class="obligatorio first">
						<input type="text" name="email" value="<? echo $email; ?>">
						Email del contacto
					</label><!--
					--><label class="obligatorio">
						<input type="text" name="telefono" value="<? echo $telefono; ?>">
						Teléfono fijo
					</label>
					<label class="third">
						<input type="text" name="celular" value="<? echo $celular; ?>">
						Celular
					</label><!--
					--><label class="obligatorio third">
						<select name="estado">
							<option value="">Selecciona un estado</option>
							<option value="Aguascalientes"<? echo $oestado=='Aguascalientes'?' selected':''; ?>>Aguascalientes</option>
							<option value="Baja California"<? echo $oestado=='Baja California'?' selected':''; ?>>Baja California</option>
							<option value="Baja California Sur"<? echo $oestado=='Baja California Sur'?' selected':''; ?>>Baja California Sur</option>
							<option value="Campeche"<? echo $oestado=='Campeche'?' selected':''; ?>>Campeche</option>
							<option value="Chiapas"<? echo $oestado=='Chiapas'?' selected':''; ?>>Chiapas</option>
							<option value="Chihuahua"<? echo $oestado=='Chihuahua'?' selected':''; ?>>Chihuahua</option>
							<option value="Coahuila"<? echo $oestado=='Coahuila'?' selected':''; ?>>Coahuila</option>
							<option value="Colima"<? echo $oestado=='Colima'?' selected':''; ?>>Colima</option>
							<option value="Distrito Federal"<? echo $oestado=='Distrito Federal'?' selected':''; ?>>Distrito Federal</option>
							<option value="Durango"<? echo $oestado=='Durango'?' selected':''; ?>>Durango</option>
							<option value="Estado de México"<? echo $oestado=='Estado de México'?' selected':''; ?>>Estado de México</option>
							<option value="Guanajuato"<? echo $oestado=='Guanajuato'?' selected':''; ?>>Guanajuato</option>
							<option value="Guerrero"<? echo $oestado=='Guerrero'?' selected':''; ?>>Guerrero</option>
							<option value="Hidalgo"<? echo $oestado=='Hidalgo'?' selected':''; ?>>Hidalgo</option>
							<option value="Jalisco"<? echo $oestado=='Jalisco'?' selected':''; ?>>Jalisco</option>
							<option value="Michoacán"<? echo $oestado=='Michoacán'?' selected':''; ?>>Michoacán</option>
							<option value="Morelos"<? echo $oestado=='Morelos'?' selected':''; ?>>Morelos</option>
							<option value="Nayarit"<? echo $oestado=='Nayarit'?' selected':''; ?>>Nayarit</option>
							<option value="Nuevo León"<? echo $oestado=='Nuevo León'?' selected':''; ?>>Nuevo León</option>
							<option value="Oaxaca"<? echo $oestado=='Oaxaca'?' selected':''; ?>>Oaxaca</option>
							<option value="Puebla"<? echo $oestado=='Puebla'?' selected':''; ?>>Puebla</option>
							<option value="Querétaro"<? echo $oestado=='Querétaro'?' selected':''; ?>>Querétaro</option>
							<option value="Quintana Roo"<? echo $oestado=='Quintana Roo'?' selected':''; ?>>Quintana Roo</option>
							<option value="San Luis Potosí"<? echo $oestado=='San Luis Potosí'?' selected':''; ?>>San Luis Potosí</option>
							<option value="Sinaloa"<? echo $oestado=='Sinaloa'?' selected':''; ?>>Sinaloa</option>
							<option value="Sonora"<? echo $oestado=='Sonora'?' selected':''; ?>>Sonora</option>
							<option value="Tabasco"<? echo $oestado=='Tabasco'?' selected':''; ?>>Tabasco</option>
							<option value="Tamaulipas"<? echo $oestado=='Tamaulipas'?' selected':''; ?>>Tamaulipas</option>
							<option value="Tlaxcala"<? echo $oestado=='Tlaxcala'?' selected':''; ?>>Tlaxcala</option>
							<option value="Veracruz"<? echo $oestado=='Veracruz'?' selected':''; ?>>Veracruz</option>
							<option value="Yucatán"<? echo $oestado=='Yucatán'?' selected':''; ?>>Yucatán</option>
							<option value="Zacatecas"<? echo $oestado=='Zacatecas'?' selected':''; ?>>Zacatecas</option>
						</select>
						Estado
					</label><!--
					--><label class="third">
						<input type="text" name="cp" value="<? echo $cp; ?>">
						C.P.
					</label>
					<input type="hidden" name="submit" value="true"/>
					<button type="submit">Enviar</button>
			</form>
			</div>
			<div id="right">
				<p>Llenar este formulario es el siguiente paso para conocer todos los beneficios que maxcom puede brindarle a tu negocio.</p>
				<p>O llámanos por teléfono para que un ejecutivo te asesore:</p>
			</div>
		</div>
		<div id="footer">

		</div>
	</div>
</body>
</html>
