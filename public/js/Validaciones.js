const form = document.getElementById('formu')
var nombre = document.getElementById('nombre')
var apellido = document.getElementById('apellido')
var email = document.getElementById('mail')
var telefono = document.getElementById('telefono')
var pais = document.getElementById('pais')
var votos = document.getElementById('votos')
var partido = document.getElementById('partido')
var mandato = document.getElementById('mandato')
var auto = document.getElementById('auto')
var btn = document.getElementById('btn')
var borrar = document.getElementById('borrar')

btn.disabled = true;

form.addEventListener('change', function(){
  btn.disabled = true;
  if (nombre.value == ""){
  } else if (apellido.value == ""){
  } else if (mail.value == ""){
  } else if (telefono.value == ""){
  } else if (pais.value == ""){
  } else if (votos.value == ""){
  } else if (partido.value == ""){
  } else if (mandato.value == ""){
  } else {
    btn.disabled = false;
  }

  if (btn.disabled){
    btn.style.backgroundColor = "lightgrey";
    btn.style.cursor = "default";
  } else {
    btn.style.cursor = "pointer";
    btn.style.backgroundColor = "#78c0e0";
  }
})

form.addEventListener('submit', function(e){
  var correcto = confirm("Los datos ingresados estan correctos?")

  if (correcto == true){
    if (partido.value == "auto") {
      auto.value = true;
    }
  } else {
    e.preventDefault();
  }
})

// borrar.addEventListener('click', function(e){
//   var pregunta = confirm("Esta seguro que quiere borrar esta informacion?")
//
//   if (pregunta !== true){
//     e.preventDefault();
//     }
// })
