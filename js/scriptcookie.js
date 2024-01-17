

        // Función para establecer la cookie
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        // Función para mostrar la alerta solo si la cookie no está establecida
        function showCookieAlert() {
            if (!document.cookie.includes("cookie_accepted=true")) {
                var userResponse = confirm("Este sitio web utiliza cookies. ¿Desea aceptar?");
                if (userResponse) {
                    setCookie("cookie_accepted", "true", 30); // Establecer la cookie por 30 días 
                }
            }
        }

        // Mostrar la alerta cuando la página se carga
        window.onload = showCookieAlert;
