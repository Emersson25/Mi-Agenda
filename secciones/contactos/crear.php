<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        Contactos
    </div>
    <div class="card-body">

    <form action="procesar_contacto.php" method="post" enctype="multipart/form-data">
        
             <div class="mb-3">
        <label for="nombredelcontacto" class="form-label">Nombre del Contacto</label>
        <input type="text"
         class="form-control" name="nombredelcontacto" id="nombredelcontacto" aria-activedescendant="helpId" placeholder="Nombre del Contacto">
                </div>

      <div class="mb-3">
        <label for="apellidosdelcontacto" class="form-label">Apellidos del contacto</label>
        <input type="text"
         class="form-control" name="apellidosdelcontacto" id="apellidosdelcontacto" aria-activedescendant="helpId" placeholder="Apellidos del Contacto">
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text"
         class="form-control" name="telefono" id="telefono" aria-activedescendant="helpId" placeholder="Telefono">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text"
         class="form-control" name="email" id="email" aria-activedescendant="helpId" placeholder="Email">
      </div>
      
      <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text"
         class="form-control" name="direccion" id="direccion" aria-activedescendant="helpId" placeholder="Direccion">
      </div>

      <div class="mb-3">
        <label for="ciudad" class="form-label">Ciudad</label>
        <input type="text"
         class="form-control" name="ciudad" id="ciudad" aria-activedescendant="helpId" placeholder="Ciudad">
      </div>

    <button type="submit" class="btn btn-success">Agregar</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    


</form>
    



<?php include("../../templates/footer.php"); ?>