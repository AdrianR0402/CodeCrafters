
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

// Método para establecer una cookie de sesión con un nombre y valor
function setSessionCookie(nombre, valor) {
    document.cookie = nombre + "=" + valor + "; path=/";
}

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

// Método principal que muestra la alerta de cookies y noticias sobre películas
function mostrarAlertaCookies() {
    // Verificar si la cookie de aceptación general está establecida
    if (!getCookie("cookie_aceptada")) {
        var respuestaUsuario = confirm("Este sitio web utiliza cookies. ¿Desea aceptar?");
        if (respuestaUsuario) {
            setSessionCookie("cookie_aceptada", "true"); // Establecer la cookie por 30 días (puedes ajustar el valor)
        }
    } else {
        // Verificar si la cookie de noticias mensuales está establecida
        var ultimaFechaNoticias = getCookie("ultima_fecha_noticias");
        var fechaActual = new Date().toISOString().split('T')[0]; // Obtener la fecha actual en formato YYYY-MM-DD

        if (!ultimaFechaNoticias || ultimaFechaNoticias < fechaActual) {
            // Mostrar la alerta de noticias sobre películas
            var respuestaNoticias = confirm("¡Nuevas noticias sobre películas! ",
            "fsdafas");
            
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

// Ejecutar la función principal cuando la página se carga completamente
window.onload = mostrarAlertaCookies;