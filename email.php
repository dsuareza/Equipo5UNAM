<?php 
$nombre = strip_tags($_POST['nombre']);
$email = strip_tags($_POST['email']);
$puesto = strip_tags($_POST['puesto']);
$company = strip_tags($_POST['company']);
$comentario = strip_tags($_POST['comentario']);
$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$message .= "Correo Enviado desde sitio web \r\n";
$message .="<---------------------------------------->". " \r\n";
$message .="Nombre: " . $nombre . " \r\n";
$message .= "E-Mail: " . $email . " \r\n";
$message .= "Compañia: " . $company . " \r\n";
$message .= "Comentario: " . $comentario . " \r\n";
$to = 'cbt@cbtasesores.com.mx';
$subject = 'Mensaje enviado desde p&aacute;gina web CBT Asesores';
mail($to, $subject, utf8_decode($message), $header);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href="../css/cbt.css" rel="stylesheet" type="text/css">
<style>
	@media only screen 
and (min-width: 720px) and (max-width:950px) {
	p.intro{width:89.5%}
}
</style>
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../js/functions.js"></script>
<script>
function validar(formulario){
  // primera comprobaci&oacute;n
  if(formulario.nombre.value == ''){
    // informamos del error
    alert('El campo Nombre, es equerido');
    // seleccionamos el campo incorrecto
    formulario.nombre.focus();
    return false;
  }
 if(formulario.email.value == ''){
    alert('El campo E-mail, es requerido');
    formulario.email.focus();
    return false;
  }
  if(formulario.comentario.value == ''){
    alert('El campo Comentario, es requerido');
    formulario.comentario.focus();
    return false;
  }
    
  
 return true;
}
function borrar(forma){
	
	formulario.nombre.value="";
	formulario.puesto.value="";
	formulario.company.value="";
	formulario.comentario.value="";
	formulario.nombre.focus();
	
	
}
</script>

</head>

<body>
<h1 style="display:none;">Firma de Abogados Laborales consolidado en la representación del sector empresarial.</h1>
<div class="wrapper_gral back_1">
	<div class="backs"><img src="../img/backs/background_contacto.jpg" alt="" /></div>
	<div class="wrapper_int">
    	<div class="header">
        	<div class="redes"> <a href="https://www.facebook.com/pages/CBT-Abogados/1422439021342910?ref=ts&fref=ts" target="_blank" class="fb" title="Facebook"><img src="../img/icons/facebook_icon.png" /></a>
                <a href="#" class="tw" title="Twitter"><img src="../img/icons/twitter_icon.png" /></a>
                <a href="#" class="ln" title="LinkedIn"><img src="../img/icons/linkedin_icon.png" /></a>
                <a href="#" class="go" title="Google+"><img src="../img/icons/google_plus_icon.png" /></a>
             </div><!--redes_ini-->
             <div class="cont_int">
             	<a href="#" class="logo_int"><img src="../img/logo_calado_header.png" alt="CBT Home" /></a>
                <div class="adress_int">GOETHE No. 16, 4o Piso<br/> Colonia Anzures  C.P. 11590<br/> Tel:. 5254 - 4970 / al 72 <br />fax: 5254-4976<br /> e-mail:cbt@cbtasesores.com.mx </div>
             </div><!--cont_int-->
             <div id="menu">
             	<ul>
                	<li><a href="index.html" class="">INICIO</a></li>
                    <li><a href="socios.html" class="">SOCIOS</a></li>
                    <li><a href="abogados.html" class="">ABOGADOS</a></li> 
                    <li><a href="servicios.html"  class="btn_menu">SERVICIOS <br /> DE LA FIRMA</a></li>
                    <li><a href="despachos.html" class="btn_menu">DESPACHOS ASOCIADOS</a></li>
                    <li><a href="filiales.html" class="">FILIALES</a></li>
                    <li class="comp"><a href="otras.html" class="btn_menu">ACTIVIDADES COMPLEMENTARIAS</a></li>
<li><a href="clientes.html" class="">CLIENTES</a></li>
                    
                    <li><a href="circulares.html" class="">CIRCULARES</a></li>
                    <li class="last"><a href="contacto.php" class="active">CONTACTO</a></li>
                </ul>
             </div><!--menu-->
        </div><!--header-->
        
        	
            <div id="cont_info">
        		<h1 class="nm1" style="width:93.9%">Contacto</h1>
                <p class="intro" style="color:#093769;"><span style="color:#093769; font-size:1.5em;display:block;">¿Necesita de nuestros servicios?</span><br />Agradecemos su interés en nuestra firma y en los servicios que ofrecemos, si desea contactarnos, ingrese los datos que se le solicitan y en breve un ejecutivo se pondrá en contacto con usted para darle la atención personalizada a sus necesidades.</p>
                <div class="cont_full">
                	
                    
                    <form onsubmit="return validar(this)" action="email.php" method="post" enctype="application/x-www-form-urlencoded" name="formulario" target="_self" id="formulario">
                	<div class="fields_1">
                    	<span>Nombre completo*</span>
                        <input type="text" class="" name="nombre" id="nombre"/>
                        <span>Puesto o Cargo</span>
                        <input type="text" class="" name="puesto" id="puesto"/>
                        <span>Compañía</span>
                        <input type="text" class=" "name="company" id="company"/>
                    </div><!--fields_1-->
                    <div class="fields_2">
                    	<span>Correo electrónico*</span>
                        <input type="text" class="" name="email" id="email"/>
                        <span>Comentario*</span>
                        <textarea class="comentario" id="comentario" name="comentario"> </textarea>
                       
                       <a href="javascript:void(0)" class="borrar" >BORRAR</a>
                       <input type="image" src="../img/enviar_rollover_btn.png" class="enviar" name="enviar" id="enviar" value="" onclick="validar(formulario);" value="Submit"/>
                       <!--<a href="javascript:void(0)" class="enviar" onClick="validar(formulario)">Enviar</a>-->
                    </div><!--fields_1-->
                    
                	
                </form>
                </div>
                
               	
        	</div><!--cont_info-->
    </div><!--wrapper_int-->
    <div id="footer">
    	<span>CBT Abogados Laborales | Todos los derechos reservados 2014</span>
    </div><!--footer-->
</div><!--wrapper_gral-->
<div class="mobile_cont">
	<div class="header_m">
    	<div class="menu">
           <a href="javascript:void(0)" class="open_menu"><img src="../img/btn_menu.png"/></a>
           <a href="javascript:void(0)" class="close_menu"><img src="../img/close.png"/></a>
        </div>
        <div class="redes_m">
        	<a href="#" class="fb_mb"><img src="../img/icons/facebook_icon.png" /></a>
        	<a href="#" class="tw_mb"><img src="../img/icons/twitter_icon.png" /></a>
        	<a href="#" class="ln_mb"><img src="../img/icons/linkedin_icon.png" /></a>
        	<a href="#" class="go_mb"><img src="../img/icons/google_plus_icon.png" /></a>
        </div>
    </div><!--header_m-->
    <ul class="menu_m">
    	<li><a href="index.html" class="">INICIO</a></li>
    	<li><a href="socios.html" class="">SOCIOS</a></li>
        <li><a href="abogados.html" class="">ABOGADOS</a></li>
        
        <li><a href="despachos.html" class="">DESPACHOS ASOCIADOS</a></li>
        <li><a href="filiales.html" class="">FILIALES</a></li>
        <li><a href="otras.html" class="">ACTIVIDADES COMPLEMENTARIAS</a></li>
<li><a href="clientes.html" class="">CLIENTES</a></li>
        
        <li><a href="circulares.html" class="">CIRCULARES</a></li>
        <li><a href="contacto.php" class="active">CONTACTO</a></li>
    </ul><!--menu_m-->
    <div class="cont_logo">
    	<img src="../img/logo_calado_header.png" />
    </div>
    <div class="cont_mob">
     <div class="backs_1">
    	<img src="../img/backs/background_contacto.jpg" alt="" />
        <h1>Contacto</h1>
    </div>
    	
        <div class="cont_info">
         <p class="intro" style="color:#093769;"><span style="color:#093769; font-size:1.5em;display:block;">¿Necesita de nuestros servicios?</span><br />Agradecemos su interés en nuestra firma y en los servicios que ofrecemos, si desea contactarnos, ingrese los datos que se le solicitan y en breve un ejecutivo se pondrá en contacto con usted para darle la atención personalizada a sus necesidades.</p>
        </div>
        <div class="cont_full">
                	
                    
                    <form onsubmit="return validar(this)" action="email.php" method="post" enctype="application/x-www-form-urlencoded" name="formulario" target="_self" id="formulario">
                	<div class="fields_1">
                    	<span>Nombre completo*</span>
                        <input type="text" class="" name="nombre" id="nombre"/>
                        <span>Puesto o Cargo</span>
                        <input type="text" class="" name="puesto" id="puesto"/>
                        <span>Compañía</span>
                        <input type="text" class=" "name="company" id="company"/>
                        <span>Correo electrónico*</span>
                        <input type="text" class="" name="email" id="email"/>
                        <span>Comentario*</span>
                        <textarea class="comentario" id="comentario" name="comentario"> </textarea>
                       
                       <a href="javascript:void(0)" class="borrar" >BORRAR</a>
                       <input type="image" src="../img/enviar_rollover_btn.png" class="enviar" name="enviar" id="enviar" value="" onclick="validar(formulario);" value="Submit"/>
                       <!--<a href="javascript:void(0)" class="enviar" onClick="validar(formulario)">Enviar</a>-->
                    </div><!--fields_1-->
                   
                	
                </form>
                </div>
    </div><!--cont_mob-->
    <div class="footer_m">
    	<div class="adress">Goethe No. 16, 4o Piso Colonia Anzures,  C.P. 11590 , Tel.:5254 - 4970 / al 72 fax: 5254-4976 e-mail:cbt@cbtasesores.com.mx</div><!--adress-->
        
    	
    </div><!--footer_m-->
</div><!--mobile_cont-->
</body>
</html>
