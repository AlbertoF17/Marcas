const botonAceptarCookies = document.getElementById("btn-aceptar-cookies");
const avisoCookies = document.getElementById("aviso-cookies");
const fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");

//CONDICIONAL USADO SÓLO PARA QUE PREGUNTE LAS COOKIES 1 VEZ POR EQUIPO QUE ENTRA A LA PÁGINA
// if (!localStorage.getItem("cookies-aceptadas")) {
//     avisoCookies.classList.add("activo");
//     fondoAvisoCookies.classList.add("activo");
// }

avisoCookies.classList.add("activo");
fondoAvisoCookies.classList.add("activo");

botonAceptarCookies.addEventListener("click", () => {
    avisoCookies.classList.remove("activo");
    fondoAvisoCookies.classList.remove("activo");
    localStorage.setItem("cookies-aceptadas", true); //SÓLO PARA QUE PREGUNTE LAS COOKIES 1 VEZ POR EQUIPO QUE ENTRA A LA PÁGINA
});