// Método para establecer una cookie con un nombre, valor y duración en días
function setCookie(nombre, valor, dias) {
    var expiracion = "";
    if (dias) {
        var fecha = new Date();
        fecha.setTime(fecha.getTime() + (dias * 24 * 60 * 60 * 1000));
        expiracion = "; expires=" + fecha.toUTCString();
    }
    document.cookie = nombre + "=" + valor + expiracion + "; path=/";
}
//setCookie("usuario_logueado", "true", 365);// Quitar luego (Es para testear que funciona con la coockie - Esa coockie se creara en la pagina donde se realice la verificacion de inicio de sesion)

// Método para obtener el valor de una cookie por su nombre
function getCookie(nombre) {
    var nombreEQ = nombre + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nombreEQ) == 0) {
            return cookie.substring(nombreEQ.length, cookie.length);
        }
    }
    return null;
}

// Método principal que muestra la alerta de cookies y realiza las redirecciones necesarias
function mostrarAlertaCookies() {
    // Verificar si la cookie de aceptación general está establecida
    if (!getCookie("cookie_aceptada")) {
        var respuestaUsuario = confirm("Este sitio web utiliza cookies. ¿Desea aceptar?");
        if (respuestaUsuario) {
            setCookie("cookie_aceptada", "true", 365); // Establecer la cookie por 365 días (o ajusta el valor según necesites)
        }
    } else {
        var usuarioLogueado = getCookie("usuario_logueado");
        
         // Verificar si no está autenticado y no es la página index.php
        if (!usuarioLogueado && window.location.pathname !== "/index.php") {
            window.location.href = "login.php";
            return;  // Salir de la función para evitar mostrar otras alertas o redirecciones
        }

       
        // Verificar si la cookie de noticias mensuales está establecida
        var ultimaFechaNoticias = getCookie("ultima_fecha_noticias");
        var fechaActual = new Date().toISOString().split('T')[0]; // Obtener la fecha actual en formato YYYY-MM-DD

        // Mostrar la alerta de noticias sobre películas solo si está autenticado
        if (usuarioLogueado && (!ultimaFechaNoticias || ultimaFechaNoticias < fechaActual)) {
            var respuestaNoticias = confirm("¡Nuevas noticias sobre películas! ¿Desea verlas?");
            
            if (respuestaNoticias) {
                // Establecer la cookie de noticias para el próximo mes
                var proximoMes = new Date();
                proximoMes.setMonth(proximoMes.getMonth() + 1);
                proximoMes.setHours(0, 0, 0, 0);
                setCookie("ultima_fecha_noticias", proximoMes.toISOString().split('T')[0], 30);
            }
        }
    }
}

// Ejecutar la función principal cuando el DOM de la página está completamente cargado
document.addEventListener('DOMContentLoaded', function () {
    mostrarAlertaCookies();
});

// Redirigir a la página de inicio de sesión si no está autenticado en cada cambio de página
window.addEventListener('beforeunload', function () {
    var usuarioLogueado = getCookie("usuario_logueado");
    if (!usuarioLogueado && window.location.pathname !== "/index.php") {
        window.location.href = "login.php";
    }
});