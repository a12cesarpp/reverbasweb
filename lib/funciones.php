<?php

require 'phpass-0.3/PasswordHash.php'; 
   
/**
 * Método que encripta password con librería phpass
 * @param type $password
 * @param type $vueltas
 * @return type
 */
function encriptar($password, $vueltas = 8) {
    $hasher = new PasswordHash($vueltas, false);
 
    $password = $hasher->HashPassword($password);
                        
    return $password;
}

/**
 * Método para comprobar si la password guardada coincide con la ofrecida
 * @param type $password
 * @param type $passbbdd
 * @return boolean
 */
function comprobarPass($password,$passbbdd) {
    if($hasher->CheckPassword($password, $passbbdd))
    {
        return true;
    }
    else
    {
        return false;
    }
 
}

function cambiaf_mysql($fecha) {
     $fecha = str_replace('/', '-', $fecha);
     return date('Y-m-d', strtotime($fecha));
}

function cambiaf_normal($fecha) {
     return date('d/m/Y', strtotime($fecha));
}

//----------------------------------------------------------------------------------------------------
/**
 * Función chequearSpam.
 * Chequea caracteres de SPAM en el correo.
 * 
 * @param string $campo El campo a chequear.
 * @return boolean true si ha pasado correctamente el chequeo de spam o sale de la aplicación si se encontró spam imprimiendo un mensaje.
 */
function chequearSpam($campo) {
//Array con las posibles cabeceras a utilizar por un spammer
     $spam = array("Content-Type:",
         "MIME-Version:",
         "Content-Transfer-Encoding:",
         "Return-path:",
         "Subject:",
         "From:",
         "Envelope-to:",
         "To:",
         "bcc:",
         "cc:",
         "link=",
         "url=");

     //Comprobamos que entre los datos no se encuentre alguna de
     //las cadenas del array. Si se encuentra alguna cadena de SPAM muestra mensaje y sale de la aplicación.
     foreach ($spam as $patron) {
          // strpos(pajar,aguja) devuelve FALSE si no encuentra la cadena.
          if (strpos(strtolower($campo), strtolower($patron)) !== false) {
               echo "<br/><br/><h3><CENTER>!! Error: Caracteres SPAM detectados en el correo !! </h3>";
               echo "<h4><CENTER>!! Spammers no permitidos. Solicitud cancelada. !! </h4>.<br/></CENTER>";
               exit; // Sale de la aplicación.
          }
     }

     return true;
}

//----------------------------------------------------------------------------------------------------
/**
 * Función chequearEmail
 * Comprueba que el e-mail tenga un formato válido.
 * 
 * @param type $campo
 * @return boolean true si ha pasado el chequeo de e-mail  o sale de la aplicación si se encontró un e-mail incorrecto.
 */
function chequearEmail($campo) {
     if (!filter_var($campo, FILTER_VALIDATE_EMAIL)) {
          echo "<br/><br/><h3><CENTER>!! Error: Formato de e-mail incorrecto </font>!! </h3>";
          echo "<h4><CENTER>!! Solicitud cancelada !! </h4>.<br/></CENTER>";
          exit; // Sale de la aplicación.
     }
     return true;
}

?>