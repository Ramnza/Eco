<?php

/**
 *
 * Eco - A PHP Framework
 *
 * Open Source Application for PHP development
 *
 * The Souce Code is released under The MIT License (MIT)
 *
 * Copyright (c) 2016 Alex Casillas
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @package Eco
 * @author Alex Casillas / @alexvcasillas
 * @copyright Copyright (c) 2016 - EliteNetwork.es
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link http://eco.elitenetwork.es
 * @version 0.0.1 Alpha
 */

/*
 * -------------------------------------------------------------
 *  DEFINICIONES DEL SISTEMA
 * -------------------------------------------------------------
 *
 * Estas son las definiciones básicas del sistema.
 *
 * Estas definiciones son:
 * DS:    Separador de directorios específico del sistema.
 * ROOT:  Ruta raíz o base del proyecto.
 * LIBS:  Directorio donde se encuentran las librerías básicas
 *        del sistema para su funcionamiento.
 * VIEWS: Directorio donde se encuentran las vistas que serán
 *        mostradas tras el proceso de enrutamiento al usuario.
 *
 * AutoLoader: Sistema para la inclusión automática de clases
 *             sin necesidad de hacer el include correspondiente.
 */
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