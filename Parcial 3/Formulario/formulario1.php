<!doctype html>
<html lang="en">
<?php
  $FechaHoy = date('y/m/d H:i:s');
    
  echo '<b> Fecha de creacion de cookie: </b>'.$FechaHoy.'<br>';
  setcookie("Ultima_visita",$FechaHoy,time()+(7*24*60*60));
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h2>Ingresa los Siguientes datos</h2>
    <form id="idFormulario" >
        <div class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="Usuario" name="Usuario">
            </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-12 col-md-6 col-lg-4">
              <label for="exampleInputEmail1" class="form-label">Telefono</label>
              <input type="text" class="form-control" id="Telefono" name="Telefono" aria-describedby="emailHelp">
          </div>
          <div class="form-group col-sm-12 col-md-6 col-lg-8">
              <label for="exampleInputPassword1" class="form-label">Edad</label>
              <input type="text" class="form-control" id="Edad" name="Edad">
          </div>
      </div>
        <div class="row">
            <div class="form-group col-sm-12 col-md-3 col-lg-4">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="Correo" name="Correo" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-sm-12 col-md-6 col-lg-4">
                <label for="exampleInputPassword1" class="form-label">Contrase??a</label>
                <input type="password" class="form-control" id="Contra" name="Contra">
            </div>
            <div class="form-group col-sm-12 col-md-3 col-lg-4">
                <label for="exampleInputPassword1" class="form-label">Confirmar Contrase??a</label>
                <input type="password" class="form-control" id="ConfirmarContra" name="ConfirmarContra">
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-primary" id="btnAgregar">Agregar</button>
        <button type="button" class="btn btn-primary" id="liveToastBtn">Mensaje</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
Click en el boton :)
    </div>
  </div>
</div>

<div id="myModal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <button type="button" class="btn btn-primary" id="btnModal">Modal</button>
      </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <script>
    const toastLiveExample = document.getElementById('liveToast')

    document.getElementById('liveToastBtn').addEventListener('click', () => {
    const toast = new bootstrap.Toast(toastLiveExample)
    toast.show()
  });
  document.getElementById('btnModal').addEventListener('click',() => {
  const myModal = new bootstrap.Modal('#myModal',{})
  myModal.show();
});
document.getElementById("btnAgregar").addEventListener("click",async () =>{
  var datosFormulario = new FormData(document.getElementById("idFormulario"));
  let respuesta = await fetch("mysqli/conexion.php",{
    method: 'POST',
    body:   datosFormulario
  })
  let dato = await respuesta.json();
  document.getElementById("Nombre").value=dato.Nombre;
  document.getElementById("Telefono").value=dato.Telefono;
  document.getElementById("Edad").value=dato.Edad;  
  document.getElementById("Correo").value=dato.Correo;
  document.getElementById("Contra").value=dato.Contra;
  document.getElementById("ConfirmarContra").value=dato.ConfirmarContra;
});
/*
document.getElementById("btnAgregar").addEventListener("click",() =>{
  fetch ('mysqli/conexion.php')
  .then(respuesta => respuesta.json())
  .then(dato=>refrescar(dato[0]))
  function refrescar (reg){
  document.getElementById("Nombre").value=reg.Nombre;
  document.getElementById("Usuario").value=reg.Usuario;
  document.getElementById("Telefono").value=reg.Telefono;
  document.getElementById("Edad").value=reg.Edad;  
  document.getElementById("Correo").value=reg.Correo;
  document.getElementById("Contrase??a").value=reg.Contrase??a;
  document.getElementById("ConfirmarContra").value=reg.ConfirmarContra;
  }
  /*
  let datos= new FormData(idFormulario);
  let formulario = getElementById("idFormulario");
  let Usuario =(datos.get('Usuario'));

});*/
  </script>
</html>