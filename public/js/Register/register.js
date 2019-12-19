function validarNombre(){
    console.log("valido");
    var nombre = document.querySelector("input#name");
    if(nombre.value == ""){
        var spanNombre = document.querySelector("span#errorNombre");
        spanNombre.innerHTML = "El nombre es obligatorio.";
    }else{
        var spanNombre = document.querySelector("span#errorNombre");
        spanNombre.innerHTML = "";
    }
}
function validarUser(){
    console.log("valido1");
    var nombre = document.querySelector("input#user_name");
    if(nombre.value == ""){
        var spanNombre = document.querySelector("span#erroruser_name");
        spanNombre.innerHTML = "El Usuario es obligatorio.";
    }else{
        var spanNombre = document.querySelector("span#erroruser_name");
        spanNombre.innerHTML = "";
    }
}
function validarSurname(){
    console.log("valido2");
    var nombre = document.querySelector("input#surname");
    if(nombre.value == ""){
        var spanNombre = document.querySelector("span#errorsurname");
        spanNombre.innerHTML = "El Apellido es obligatorio.";
    }else{
        var spanNombre = document.querySelector("span#errorsurname");
        spanNombre.innerHTML = "";
    }
}
var enviar = document.querySelector("button#send");
enviar.addEventListener("click",function(){
    validarNombre();
    validarUser();
    validarSurname();
});
