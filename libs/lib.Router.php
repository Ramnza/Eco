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
			'index' => [ 'RequireAuth' => false, 'argumentos' => [ 'titulo' => 'EcoFramework DashBoard' ] ],
		];

	}

	function View($sesion)
	{
		if( array_key_exists(parent::GetBase(), $this->ColeccionRutas) && is_readable( VIEWS . 'view.' . parent::GetBase() . '.php' ) )
		{
			if( isset($this->ColeccionRutas[parent::GetBase()]['RequireAuth']) && $this->ColeccionRutas[parent::GetBase()]['RequireAuth'] )
			{
				if( $sesion->GetSesion('usuario') )
				{
					$vista = $this->ColeccionRutas[parent::GetBase()]['argumentos'];
					$controlador = parent::GetControlador();
					$argumentos = parent::GetArgumentos();
					include_once( VIEWS . 'view.' . parent::GetBase() . '.php' );
				}
				else
				{
					$vista = [ 'titulo' => 'EcoFramework No Access Allowed' ];
					include_once( VIEWS . 'view.noaccess.php');
				}

			}
			else
			{
				$vista = $this->ColeccionRutas[parent::GetBase()]['argumentos'];
				$controlador = parent::GetControlador();
				$argumentos = parent::GetArgumentos();
				include_once( VIEWS . 'view.' . parent::GetBase() . '.php' );
			}
		}
		else
		{
			$vista = [ 'titulo' => 'EcoFramework 404 Error Not Found' ];
			include_once( VIEWS . 'view.404.php');
		}
	}

}

?>