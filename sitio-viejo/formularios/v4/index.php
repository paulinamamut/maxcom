<?
    ini_set('display_errors',1);
    error_reporting(E_ERROR);

    $version = $_GET['version'] == '' ? 'a' : $_GET['version'];
    $campaign = $_GET['campaign'];
    $extras = $_GET['extras'];

    require_once('config/conexion.php');
    $opcionales = array('nombre', 'celular', 'cp');
    $error = false;

    if($_POST['submit']){
        foreach($_POST as $key=>$value){
            if($value=="" && !in_array($key, $opcionales))
                $error = '<p class="warn">Por favor llena todos los campos obligatorios.</p>';
            else $$key = mysqli_real_escape_string($conn, $value);
            if($key=='estado')
                $oestado = $value;
        }
        if(!$error){
/*-----------------------------Email--------------------------------*/
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error[0] = "La dirección de correo electrónico proporcionada no es válida.";
            }
/*------------------------------RFC---------------------------------*/
            if(isset($rfca)){
                if(!preg_match('/^[a-zA-Z]{3}$/',$rfca) || !preg_match('/^\d{6}$/',$rfcb) || !preg_match('/^[a-zA-Z0-9]{3}$/',$rfcc)){
                    $error[1] = "El RFC proporcionado no es válido.";
                }else
                    $rfc = $rfca.$rfcb.$rfcc;
            }
/*--------------------------Teléfono fijo----------------------------*/
            if(isset($telefono)){
                $telefono = preg_replace("/[^0-9]/", "", $telefono);
                if(!preg_match('/^\d{10}$/', $telefono))
                    $error[2] = "Teléfono fijo no válido. Por favor incluye la clave lada.";
            }
            
        }
        if($error){
            if(is_array($error))
                $error = '<ul class="error"><li>'.implode('</li><li>', $error).'</li></ul>';
        }else{
            if(!isset($client_id)){
                $client_id = substr(time(), -4)+rand(0, 9999);
                $query = "INSERT INTO usuarios (empresa, rfc, nombre, puesto, email, tel_fijo, celular, estado, cp, version, campaign, client_id) VALUES ('".$empresa."', '".$rfc."', '".$nombre."', '".$puesto."', '".$email."', '".$telefono."', '".$celular."', '".$estado."', '".$cp."', '".$version."', '".$campaign."', '".$client_id."')";
            }else{
                $query = "UPDATE usuarios SET rfc='".$rfc."', puesto='".$puesto."', tel_fijo='".$telefono."', celular='".$celular."', estado='".$estado."', cp='".$cp."' WHERE client_id = ".$client_id."";
            }
                
            if(mysqli_query($conn, $query)){
                if(!$first_step){
                    require_once('PHPMailer-master/PHPMailerAutoload.php');

                    $mail = new PHPMailer;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.ecloudpanel.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'noreply@maxcomforbusiness.com';
                    $mail->Password = 'Maxcom.mamut';
                    //$mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->From = 'noreply@maxcomforbusiness.com';
                    $mail->FromName = 'Maxcom For Business';
                    $mail->addAddress($email, $nombre);
                    $mail->addReplyTo('servicioalcliente@maxcom.com', 'Maxcom for Business');
                    $mail->isHTML(true);

                    $mail->Subject = 'Maxcom for Business';
                    $mail->Body    = '<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#3d3834;">
										<tr>
											<td colspan="5" style="text-align:center; font-size:12px">Si no puedes ver este mensaje de forma correcta da clic <a href="#">aqu&iacute;</a></td>
										</tr>
                                      <tr height="350">
                                        <td colspan="5" align="right"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_01.jpg" alt="maxcom for BUSINESS" /></td>
                                      </tr>
                                      <tr>
                                        <td width="33"></td>
										<td colspan="3">
											<p>Estimado <font color="#c12030">'.htmlentities($nombre).'</font></p>
											<p>Gracias por tu inter&eacute;s en las soluciones que Maxcom ofrece a empresas como la
tuya. Estamos seguros de que encontrar&aacute;s nuestra oferta muy atractiva.</p>
											<p>En breve un ejecutivo se pondr&aacute; en contacto contigo para conocer mejor
las necesidades espec&iacute;ficas de tu negocio y guiarte en el proceso de determinar
las herramientas que te permitir&aacute;n aumetar la productividad, simplificar
los procesos y disminuir los costos de tu empresa.</p>
											<p>Esperamos que este sea el inicio de una relación muy provechosa para tu empresa.
Si tienes alguna pregunta o comentario no dudes en <a href="#" style="color:#c12030">contactarnos</a>.</p>
										</td>
										<td width="33"></td>
										
                                      </tr>
										<tr>
										<td width="33"></td>
										<td width="178"><a href="#"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_02.jpg" width="178" height="170" alt="Hug Conectivity" ></a></td>
										<td width="178"><a href="#"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_03.jpg" width="178" height="170" alt="Enjoy Collaboration" ></a></td>
										<td width="178"><a href="#"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_04.jpg" width="178" height="170" alt="Smile Managed Services" ></a></td>
										<td width="33"></td>
										</tr>
										<tr height="100">
											<td></td>
											<td></td>
											<td></td>
											<td><p style="text-align:center">Atentamente,</p>
												<p style="text-align:center">El equipo de maxcom</p></td>
											<td></td>
										</tr>
										<tr bgcolor="#393939">
											<td colspan="2"><a href="http://www.maxcom.com.mx"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_05.png" width="160" height="60" alt="maxcom"></a></td>
											<td></td>
											<td align="right">
												<a href="https://twitter.com/Maxcom_Mexico"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_06.png" width="40" height="60" alt="Síguenos en Twitter"></a>
												<a href="https://www.facebook.com/MaxcomMexico"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_07.png" width="40" height="60" alt="Síguenos en Facebook"></a>
												<a href="https://www.youtube.com/user/MaxcomContigo"><img src="http://23.253.99.79/maxcom/emm/mailing/resources/mailing_maxcom_18052015_08.png" width="40" height="60" alt="Conoce nuestro canal de YouTube"></a>
											</td>
											<td></td>
										</tr>
										<tr height="30" align="center" bgcolor="#565656">
											<td colspan="5"><font color="#FFF">&copy; Maxcom 2015</font></td>
										</tr>
                                      
                                    </table>';

                    $mail->AltBody = 'Estimado '.$nombre.',

                                    Gracias por tu interés en las soluciones que Maxcom ofrece a empresas como la
tuya. Estamos seguros de que encontrarás nuestra oferta muy atractiva.

En breve un ejecutivo se pondrá en contacto contigo para conocer mejor
las necesidades específicas de tu negocio y guiarte en el proceso de determinar
las herramientas que te permitirán aumetar la productividad, simplificar
los procesos y disminuir los costos de tu empresa.

Esperamos que este sea el inicio de una relación muy provechosa para tu empresa.
Si tienes alguna pregunta o comentario no dudes en contactarnos.

                                   Atentamente, 
								   
								   La familia maxcom';
                    if($mail->send()) {
                        //echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."gracias";
                        header("Location:http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."gracias");
                    } else {
                        $error = "Tus datos fueron registrados correctamente, pero no hemos podido notificarte por correo electrónico.";
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }
                }else
                    $next = true;
            }else
                $error = "Hubo un error al guardar tus datos. Por favor inténtalo de nuevo más tarde.".$query;
        }
    }
    function form($two_step = false){
        global $empresa, $nombre, $email, $rfca, $rfcb, $rfcc, $puesto, $telefono, $celular, $oestado, $cp, $next, $client_id, $extras;
        if($extras == ''){
            $step1 = '<fieldset class="step1">
                    <label class="obligatorio">
                        <input type="text" name="empresa" value="'.($empresa).'">
                        Nombre de la empresa
                    </label>
                    <label>
                        <input type="text" name="nombre" value="'.($nombre).'">
                        Nombre del contacto
                    </label>
                    <label class="obligatorio">
                        <input type="text" name="email" value="'.($email).'">
                        Email del contacto
                    </label>
                </fieldset>';

            $step2 = '<!--
                --><fieldset>
                    <label class="obligatorio rfc">
                        <input type="text" name="rfca" value="'.($rfca).'">
                        <input type="text" name="rfcb" value="'.($rfcb).'">
                        <input type="text" name="rfcc" value="'.($rfcc).'">
                        RFC de la empresa
                    </label>
                    <label class="obligatorio">
                        <select name="puesto">
                            <option value="">Selecciona una opción</option> 
                            <option value="Encargado de TI"'.($puesto=='Encargado de TI'?' selected':'').'>Encargado de TI</option>
                            <option value="Gerente"'.($puesto=='Gerente'?' selected':'').'>Gerente</option>
                            <option value="Director"'.($puesto=='Director'?' selected':'').'>Director</option>
                        </select>
                        Puesto
                    </label>
                    <label class="obligatorio">
                        <input type="text" name="telefono" value="'.($telefono).'">
                        Teléfono fijo
                    </label>
                </fieldset>
                <fieldset class="third">
                    <label>
                        <input type="text" name="celular" value="'.($celular).'">
                        Celular
                    </label><!--
                    --><label class="obligatorio">
                        <select name="estado">
                            <option value="">Selecciona un estado</option>
                            <option value="Aguascalientes"'.($oestado=='Aguascalientes'?' selected':'').'>Aguascalientes</option>
                            <option value="Baja California"'.($oestado=='Baja California'?' selected':'').'>Baja California</option>
                            <option value="Baja California Sur"'.($oestado=='Baja California Sur'?' selected':'').'>Baja California Sur</option>
                            <option value="Campeche"'.($oestado=='Campeche'?' selected':'').'>Campeche</option>
                            <option value="Chiapas"'.($oestado=='Chiapas'?' selected':'').'>Chiapas</option>
                            <option value="Chihuahua"'.($oestado=='Chihuahua'?' selected':'').'>Chihuahua</option>
                            <option value="Coahuila"'.($oestado=='Coahuila'?' selected':'').'>Coahuila</option>
                            <option value="Colima"'.($oestado=='Colima'?' selected':'').'>Colima</option>
                            <option value="Distrito Federal"'.($oestado=='Distrito Federal'?' selected':'').'>Distrito Federal</option>
                            <option value="Durango"'.($oestado=='Durango'?' selected':'').'>Durango</option>
                            <option value="Estado de México"'.($oestado=='Estado de México'?' selected':'').'>Estado de México</option>
                            <option value="Guanajuato"'.($oestado=='Guanajuato'?' selected':'').'>Guanajuato</option>
                            <option value="Guerrero"'.($oestado=='Guerrero'?' selected':'').'>Guerrero</option>
                            <option value="Hidalgo"'.($oestado=='Hidalgo'?' selected':'').'>Hidalgo</option>
                            <option value="Jalisco"'.($oestado=='Jalisco'?' selected':'').'>Jalisco</option>
                            <option value="Michoacán"'.($oestado=='Michoacán'?' selected':'').'>Michoacán</option>
                            <option value="Morelos"'.($oestado=='Morelos'?' selected':'').'>Morelos</option>
                            <option value="Nayarit"'.($oestado=='Nayarit'?' selected':'').'>Nayarit</option>
                            <option value="Nuevo León"'.($oestado=='Nuevo León'?' selected':'').'>Nuevo León</option>
                            <option value="Oaxaca"'.($oestado=='Oaxaca'?' selected':'').'>Oaxaca</option>
                            <option value="Puebla"'.($oestado=='Puebla'?' selected':'').'>Puebla</option>
                            <option value="Querétaro"'.($oestado=='Querétaro'?' selected':'').'>Querétaro</option>
                            <option value="Quintana Roo"'.($oestado=='Quintana Roo'?' selected':'').'>Quintana Roo</option>
                            <option value="San Luis Potosí"'.($oestado=='San Luis Potosí'?' selected':'').'>San Luis Potosí</option>
                            <option value="Sinaloa"'.($oestado=='Sinaloa'?' selected':'').'>Sinaloa</option>
                            <option value="Sonora"'.($oestado=='Sonora'?' selected':'').'>Sonora</option>
                            <option value="Tabasco"'.($oestado=='Tabasco'?' selected':'').'>Tabasco</option>
                            <option value="Tamaulipas"'.($oestado=='Tamaulipas'?' selected':'').'>Tamaulipas</option>
                            <option value="Tlaxcala"'.($oestado=='Tlaxcala'?' selected':'').'>Tlaxcala</option>
                            <option value="Veracruz"'.($oestado=='Veracruz'?' selected':'').'>Veracruz</option>
                            <option value="Yucatán"'.($oestado=='Yucatán'?' selected':'').'>Yucatán</option>
                            <option value="Zacatecas"'.($oestado=='Zacatecas'?' selected':'').'>Zacatecas</option>
                        </select>
                        Estado
                    </label><!--
                    --><label>
                        <input type="text" name="cp" value="'.($cp).'">
                        C.P.
                    </label>
                </fieldset>';
                
                $paso = $next ? 'dos' : 'uno';
                $$paso = ' class="current"';
                $pasos = $two_step ? '<ul class="pasos"><li'.$uno.'>Paso<em>1</em></li><li'.$dos.'>Paso<em>2</em></li></ul>' : '';
                
            echo '<form action="" method="post">'.$pasos.
                    (!two_step || !$next ? $step1 : '').
                    (!$two_step || $next ? $step2 : '').
                    ($two_step && $next ? '<input type="hidden" name="next" value="true">
                                            <input type="hidden" name="client_id" value="'.$client_id.'">
                                            <input type="hidden" name="nombre" value="'.$nombre.'">
                                            <input type="hidden" name="email" value="'.$email.'">':'').
                    ($two_step && !$next ? '<input type="hidden" name="first_step" value="true">' : '').
                '<input type="hidden" name="submit" value="true"/>
                <button type="submit">Enviar</button>
            </form>';
        }else
            echo '<h1>Gracias!!!</h1>';
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Maxcom for Business</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="http://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet" type="text/css">
</head>
<body>
    <?
        //require_once('versiones/'.($extras == '' ? $version : $extras).'.php');
        require_once('versiones/'.$version.'.php');
    ?>
</body>
</html>