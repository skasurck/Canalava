<?php
function isNull($nombre, $sector, $n_afiliacion, $telefono, $info, $contra, $con_contra)
{
    if (strlen(trim($nombre)) < 1 || strlen(trim($sector)) < 1 || strlen(trim($n_afiliacion)) < 1 || strlen(trim($telefono)) < 1 || strlen(trim($info)) < 1 || strlen(trim($contra)) < 1 || strlen(trim($con_contra)) < 1 )
    {
        return true;
        } else {
        return false;
    }
}

function isEmail ($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return true;
        } else {
         return false;
        }
}

function resultBlock($error){
    if(count($error) > 0)
    {
        echo "<div id='error' class='alert alert-danger' role='alert'>
        <a href='#' onclick=\"showHide('error');\">[X]<a\>
        <ul>";
        foreach($error as $error)
        {
            echo "<li>".$error."</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
}
function validaContra($var1, $var2){
    if(stromp($var1, $var2) !== 0 ){
        return false;
    } else {
        return true;
    }
}

function minMax($min, $max, $valor){
    if(strlen(trim($valor)) < $min)
    {
        return true;
    }
    else if(strlen(trim($valor)) > $max)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function emailExiste($email)
{
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT id FROM email WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows;
    $stmt->close();

    if($num > 0){
        return true;
    } else {
        return false;
    }
}
function generateToken()
{
    $gen = md5(uniqid(mt_rand(), false));
    return $gen;
}

function hasPassword($contra)
{
    $hash = password_hash($contra, PASSWORD_DEFAULT);
    return $hash;
}

function registraUsuario($nombre, $sector, $n_afiliacion, $telefono, $pass_hash, $email, $token, $info)
{
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, email, sector, numero_afiliacion, telefono, token, correos_canalava, contra)");
    $stmt->bin_param("ssssisss", $nombre, $email, $sector, $n_afiliacion, $telefono, $token, $info, $pass_hash );

    if($stmt->execute()){
        return $mysqli->insert_id;
        } else {
        return 0;
        }
}
function enviarEmail($email, $nombre, $asunto, $cuerpo)
{
    
    require_once 'https://canalava.org.mx/wp-content/themes/canalavamx/php/PHPMailer/PHPMailer.php';
    require_once 'https://canalava.org.mx/wp-content/themes/canalavamx/php/PHPMailer/Exception.php';
    
    $mail = new PHPMailer();
        $mail->isSMTP(); 
        $mail->SMTPAuth   = true;  
        $mail->SMTPSecure= 'TLS';                                           // Set mailer to use SMTP
        $mail->Host       = 'smtp.canalava.org.mx';
        $mail->Port       = 465; 


        $mail->Username   = 'info@canalava.org.mx';                     // SMTP username
        $mail->Password   = '17diciembre2010';                               // SMTP password                  
         
        $mail->setFrom('info@canalava.org.mx', 'Informacion de CANALAVA');                                 
        $mail->addAddress($email, $nombre);    
    
        // Content
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body    = $cuerpo;
    
        $mail->send();
        if($mail->send())
        return true;
        else
        return false;
    
}