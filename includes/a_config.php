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
	default:
		$CURRENT_PAGE = "";
		$PAGE_TITLE = "Lucecine";
}
?>