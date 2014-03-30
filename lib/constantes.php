<?php
// Rutas del sistema.
//definimos las rutas fisicas de las carpetas privadas como una constante
//RAIZ nos devolvería por ejemplo algo como ésto:/var/www/clients/client94/web80/web/dwes/tema4/blog2013/
define('RAIZ', dirname(__DIR__) . '/');
define('RUTA_INC', RAIZ . 'inc/');
define('RUTA_LIB', RAIZ . 'lib/');
define('RUTA_CONF', RAIZ . 'conf/');
define('RUTA_FOTOS', RAIZ . 'fotos/');

// Bases de datos.
define('BD_SERVIDOR', 'localhost');
define('BD_NOMBRE', 'forcer_Rivera_wordpress');
define('BD_USUARIO', 'forcer_reverbas');
define('BD_PASSWORD', 'reverbas_2014');

?>