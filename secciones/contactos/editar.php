<?php include("../../templates/header.php"); ?>

<div class="container mt-5">
        <h1>Editar Contacto</h1>
        <form method="POST">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" name="nombres" value="<?php echo $row["nombres"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" value="<?php echo $row["apellidos"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo $row["telefono"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row["email"]; ?>" required>

            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="direccion" class="form-control" name="direccion" value="<?php echo $row["direccion"]; ?>" required>
            
                <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="ciudad" class="form-control" name="ciudad" value="<?php echo $row["ciudad"]; ?>" required>


<?php include("../../templates/footer.php"); ?>