const nombre = document.getElementById("nombre");
const apellidop = document.getElementById("apellidop");
const apellidom = document.getElementById("apellidom");
const email = document.getElementById("email");
const telefono = document.getElementById("telefono");
const form = document.getElementById("form");
const listInputs = document.querySelectorAll(".form-input");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let condicion = validacionForm();
  if (condicion) {
    enviarFormulario();
  }
});

function validacionForm() {
  form.lastElementChild.innerHTML = "";
  let condicion = true;
  listInputs.forEach((element) => {
    element.lastElementChild.innerHTML = "";
  });

  if (nombre.value.length < 1 || nombre.value.trim() == "") {
    mostrarMensajeError("nombre", "Nombre no valido*");
    condicion = false;
  }
  if (apellidop.value.length < 1 || apellidop.value.trim() == "") {
    mostrarMensajeError("apellidop", "Apellido no valido");
    condicion = false;
  }
  if (apellidom.value.length < 1 || apellidom.value.trim() == "") {
    mostrarMensajeError("apellidom", "Apellido no valido");
    condicion = false;
  }
  if (email.value.length < 1 || email.value.trim() == "") {
    mostrarMensajeError("email", "Email no valido*");
    condicion = false;
  }
  if (
    telefono.value.length <1 ||
    telefono.value.trim() == "" ||
    isNaN(telefono.value)
  ) {
    mostrarMensajeError("telefono", "Telefono no valido*");
    condicion = false;
  }

  return condicion;
}

function mostrarMensajeError(claseInput, mensaje) {
  let elemento = document.querySelector(`.${claseInput}`);
  elemento.lastElementChild.innerHTML = mensaje;
}