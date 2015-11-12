<?
    ini_set('display_errors',1);
    error_reporting(E_ERROR);

    $version = $_GET['version'] == '' ? 'b' : $_GET['version'];
    $campaign = $_GET['campaign'];
    $extras = $_GET['extras'];

    require_once('config/conexion.php');
    $opcionales = array('nombre', 'celular', 'cp');
    $error = false;

    if($_POST['submit']){
        foreach($_POST as $key=>$value){
            if($value=="" && !in_array($key, $opcionales))
                $error = 'Por favor llena todos los campos obligatorios.';
            else $$key = mysqli_real_escape_string($conn, $value);
            if($key=='estado')
                $oestado = $value;
        }
        if(!$error){
/*-----------------------------Email--------------------------------*/
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error[0] = 'La dirección de correo electrónico proporcionada no es válida.';
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
            if(is_array($error) && count($error) > 1)
                $error = '<ul class="warn"><li>'.implode('</li><li>', $error).'</li></ul>';
			else
				$error = '<p class="warn">'.(is_array($error) ? $error[0] : $error).'</p>';
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

                    $mail->Subject = 'Global Month of Service - Gracias por registrarte';
                    $mail->Body    = '<table width="600" border="0" cellspacing="0" cellpadding="40" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#3d3834;">
                                      <tr>
                                        <td align="right"><img src="http://registro.voluntariadostarbucks.mx/referencias/mailing_gmos_12marzo_001.jpg" alt="Community Service" /></td>
                                      </tr>
                                      <tr>
                                        <td>Apreciable '.htmlentities($nombre).':</td>
                                      </tr>
                                      <tr>
                                        <td><p>Gracias por ser parte de nuestro &quot;Global Month of Service&quot; e inscribirte al programa:</p>
                                        <p align="center" style="font-size:20px; color:#157045; margin:30px 0;"> &quot;'.htmlentities($estado).'&quot;</p>
                                        <p>Agradecemos mucho tu participaci&oacute;n y dedicaci&oacute;n. Por eso, proximamente recibir&aacute;s toda la informaci&oacute;n necesaria sobre el programa que has elegido para llevarlo a cabo correctamente.</p>
                                        <p>&iexcl;Te esperamos&#33;</p>
                                        <img src="http://registro.voluntariadostarbucks.mx/referencias/mailing_gmos_12marzo_002.jpg" alt="Fondo" />
                                        </td>
                                      </tr>
                                    </table>';

                    $mail->AltBody = 'Apreciable '.$nombre.',

                                    Gracias por ser parte de nuestro "Global Month of Service” e inscribirte al programa:

                                    "'.$estado.'"

                                    Agradecemos mucho tu participación y dedicación. Por eso, próximamente recibirás toda la información necesaria sobre el programa que has elegido para llevarlo a cabo correctamente.

                                    ¡Te esperamos!';
                    if($mail->send()) {
                        //echo 'wooo!!!';
                        header("Location: /gracias");
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
        global $empresa, $nombre, $email, $rfca, $rfcb, $rfcc, $puesto, $telefono, $celular, $oestado, $cp, $next, $client_id, $extras, $error;
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
                $pasos = $two_step ? '<ul class="pasos"><li'.$uno.'>Paso <em>1</em></li><li'.$dos.'>Paso <em>2</em></li></ul>' : '';
                
            echo '<form action="" method="post">'.$error.$pasos.
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
    <title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="http://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet" type="text/css">
</head>
<body>
    <?
		
        require_once('versiones/'.$version.'.php');
    ?>
</body>
</html>