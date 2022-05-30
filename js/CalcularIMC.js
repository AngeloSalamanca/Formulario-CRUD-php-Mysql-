// var datos = new datos();

// datos.Nombre = "";
// datos.Cargo = "";
// datos.Edad = "";
// datos.Peso = "";
// datos.Estatura = "";

// function datos(Nombre, Cargo, Edad, Peso, Estatura){

//     this.Nombre=Nombre;
//     this.Cargo=Cargo;
//     this.Edad=Edad;
//     this.Peso=Peso;
//     this.Estatura=Estatura;
// }

// function GuardarDatos(){

//     var Nombre=document.getElementById("nombre").value;
//     var Cargo=document.getElementById("cargo").value;
//     var Edad=document.getElementById("edad").value;
//     var Peso=document.getElementById("peso").value;
//     var Estatura=document.getElementById("estatura").value;
// }

var resultado;

function CalcularIMC(Peso, Estatura) {
  var Peso = document.getElementById("peso").value;
  var Estatura = document.getElementById("estatura").value;
  resultado = parseInt(Peso / Estatura ** 2);

  if (resultado <= 18.5) {
    document.getElementById("resultado").innerHTML =
      "tu indice de masa corporal es: " +
      resultado +
      "<strong> IMC Bajo <strong>";
  } else if (resultado >= 18.5 && resultado <= 24.9) {
    document.getElementById("resultado").innerHTML =
      "tu indice de masa corporal es: " +
      resultado +
      "<strong> IMC Normal <strong>";
  } else if (resultado >= 25 && resultado <= 29.9) {
    document.getElementById("resultado").innerHTML =
      "tu indice de masa corporal es: " +
      resultado +
      "<strong> IMC Sobrepeso <strong>";
  } else if (resultado >= 30) {
    document.getElementById("resultado").innerHTML =
      "tu indice de masa corporal es: " +
      resultado +
      "<strong> IMC Obesidad <strong>";
  }
}

function Limpiar() {
  document.getElementById("nombre").value = "";
  document.getElementById("cargo").value = "";
  document.getElementById("edad").value = "";
  document.getElementById("peso").value = "";
  document.getElementById("estatura").value = "";
}
