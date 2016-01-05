<?php

/**
 * EcoFramework
 * @author Alex Casillas / @alexvcasillas
 * @version 0.0.1 Alpha
 */

// Separador de Directorios
DEFINE('DS', DIRECTORY_SEPARATOR);
// Ruta del Proyecto
DEFINE('ROOT', realpath(dirname(__FILE__)) . DS);
// Directorio de Librerías
DEFINE('LIBS', ROOT . 'libs' . DS);
// Directorio de Vistas
DEFINE('VIEWS', ROOT . 'views' . DS);

// AutoLoader de Clases
function AutoLoader($libreria)
{
	if(is_readable(LIBS . 'lib.' . $libreria . '.php'))
		include_once(LIBS . 'lib.' . $libreria . '.php');
	else
		return false;
}

// Registro del AutoLoader de Clases
spl_autoload_register('AutoLoader');

// Instancia de la clase Bootstrap
$bootrap = new Bootstrap();

?>