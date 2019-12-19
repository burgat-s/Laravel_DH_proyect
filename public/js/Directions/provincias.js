
fetch("https://apis.datos.gob.ar/georef/api/provincias")
.then(function(respuesta){
    return respuesta.json();
})
.then(function(datosJSON){
    var select = document.querySelector("select#provincias");
    console.log(select.innerHTML);
    for(var i = 0; i < datosJSON.provincias.length; i++){

        select.innerHTML =
        select.innerHTML + "<option value='"+datosJSON.provincias[i].nombre+"'>"+datosJSON.provincias[i].nombre+"</option>";
    }
    console.log(select.innerHTML);
})
.catch(function(error){
    console.log(error);
});
