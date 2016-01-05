<?php

/**
* Clase Router
* Gestiona el enrutamiento del framework
*/
class Router extends Controller
{

	private $ColeccionRutas = [];

	function __constructor()
	{
		parent::__construct();
	}

	function AppRoutes()
	{

		$this->ColeccionRutas = [
			'index' => [ 'argumentos' => [ 'titulo' => 'EcoFramework DashBoard' ] ],
		];

	}

	function View()
	{
		if( array_key_exists(parent::GetBase(), $this->ColeccionRutas) && is_readable( VIEWS . 'view.' . parent::GetBase() . '.php' ) )
		{
			$vista = $this->ColeccionRutas[parent::GetBase()]['argumentos'];
			$controlador = parent::GetControlador();
			$argumentos = parent::GetArgumentos();
			include_once( VIEWS . 'view.' . parent::GetBase() . '.php' );
		}
		else
		{
			$vista = [ 'titulo' => 'EcoFramework 404 Error Not Found' ];
			include_once( VIEWS . 'view.404.php');
		}
	}

}

?>