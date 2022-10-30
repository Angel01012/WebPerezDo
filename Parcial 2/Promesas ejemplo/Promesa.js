let miPromesa = new Promise(function(resolve, reject){
  setTimeout(()=> resolve("Exito"),1000);
  setTimeout(()=> reject(new error("Error")),1000);

    
});
let solicitud = fetch ("url");
//.then(respuesta => respuesta.json())
//solicitud.then( function(respuesta)){
//}