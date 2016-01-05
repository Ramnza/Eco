<?php

/**
* Clase Sesion
* Gestiona el sistema de sesiones
*/
class Sesion
{

	function __construct($identificador)
	{
		if( $this->IsSessionStarted() === FALSE )
			$_SESSION[$identificador] = 0;
	}

	function IsSessionStarted()
	{
	    if ( php_sapi_name() !== 'cli' ) {
	        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
	            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
	        } else {
	            return session_id() === '' ? FALSE : TRUE;
	        }
	    }
	    return FALSE;
	}

	function GetSesion($identificador)
	{
		return isset($_SESSION[$identificador]) ? $_SESSION[$identificador] : FALSE;
	}

	function SetSesion($identificador,  $valor)
	{
		$_SESSION[$identificador] = $valor;
	}

	function UnsetSesion($identificador)
	{
		unset($_SESSION[$identificador]);
	}

}

?>