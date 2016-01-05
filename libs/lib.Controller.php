<?php

/**
* Clase Controller
* Gestiona los controladores
*/
class Controller
{

	private $base, $controlador, $argumentos;

	function __construct()
	{

		// Comprobamos la existencia del controlador
		if(isset($_GET['url']))
		{
			// Si existe nuestro controlador, lo gestionamos para obtener cada
			// uno de los "argumentos" que lo componen.
			$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			$this->base 	   = array_shift($url);
			$this->controlador = ( is_null($url) ) ? false : array_shift($url);
			$this->argumentos  = ( is_null($url) ) ? false : array_shift($url);
		}
		else
		{
			// Si no existe nuestro controlador, asignamos como base el "index" y
			// establecemos a "false" el resto de los argumentos que lo componen.
			$this->base        = 'index';
			$this->controlador = false;
			$this->argumentos  = false;
		}

	}

	public function GetBase()
	{
		return $this->base;
	}

	public function GetControlador()
	{
		return $this->controlador;
	}

	public function GetArgumentos()
	{
		return $this->argumentos;
	}

}

?>