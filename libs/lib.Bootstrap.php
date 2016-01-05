<?php

/**
* Clase Bootstrap
* Gestiona el arranque de los proyectos
*/
class Bootstrap
{

	function __construct()
	{
		$sesion = new Sesion('usuario');
		$router = new Router();
		$router->AppRoutes();
		$router->View();
	}

}

?>