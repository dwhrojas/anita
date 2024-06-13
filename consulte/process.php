<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','nombre');
pt_register('POST','email');
pt_register('POST','asunto');
pt_register('POST','mensaje');
$mensaje=preg_replace("/(\015\012)|(\015)|(\012)/","&nbsp;<br />", $mensaje);if($nombre=="" || $email=="" || $asunto=="" || $mensaje=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email)){
$error.="<li>Invalid email address entered";
$errors=1;
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="nombre: ".$nombre."
email: ".$email."
asunto: ".$asunto."
mensaje: ".$mensaje."
";
$message = stripslashes($message);
mail("consulta@cabaniaslaanita.com.ar","Form Submitted at your website",$message,"From: " . $email);
$make=fopen("admin/data.dat","a");
$to_put="";
$to_put .= $nombre."|".$email."|".$asunto."|".$mensaje."
";
fwrite($make,$to_put);

header("Refresh: 0;url=http://www.cabaniaslaanita.com.ar");
?><?php 
}
?>