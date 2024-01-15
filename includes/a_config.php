<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/index.php":
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Lucecine";
		break;
	case "/acercaDe.php":
		$CURRENT_PAGE = "acercaDe";
		$PAGE_TITLE = "Sobre nosotros";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contáctanos";
		break;
	case "/password.php";
		$CURRENT_PAGE = "Password";
		$PAGE_TITLE = "Datos de Usuario"; //añadir las diferentes partes de la web
		break;
	case "/notifications.php";
		$CURRENT_PAGE = "notifications";
		$PAGE_TITLE = "Datos de Usuario";
		break;
	case "/preferencias.php";
		$CURRENT_PAGE = "preferencias";
		$PAGE_TITLE = "Datos de Usuario";
		break;
	case "/infoSuscripcion.php";
		$CURRENT_PAGE = "infoSus";
		$PAGE_TITLE = "Datos de Usuario";
		break;
	case "/cambiarCorreo.php";
		$CURRENT_PAGE = "correo";
		$PAGE_TITLE = "Datos de Usuario";
		break;
	case "/acercaDe.php";
		$CURRENT_PAGE = "acercaDe";
		$PAGE_TITLE = "Acerca de";
		break;
	case "/ayuda.php";
		$CURRENT_PAGE = "ayuda";
		$PAGE_TITLE = "Ayuda";
		break;
	case "/juegos.php";
		$CURRENT_PAGE = "juegos";
		$PAGE_TITLE = "Juegos";
		break;
	default:
		$CURRENT_PAGE = "";
		$PAGE_TITLE = "Lucecine";
}
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('331000462230-2e9krqvalr5t3s6ei5dfi25p5afc9hn4.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://' . $_SERVER['SERVER_NAME'] . ':10000/index.php');


$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

$login_button = '';


?>