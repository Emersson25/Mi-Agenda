<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        Notas 
    </div>
    <div class="card-body">
    
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th> <label for="fecha" class="form-label">Fecha </label></th>
                <th scope="col">Descripcion</th>
                
            
                <th scope="col">Nota</th>
            </tr>
        </thead>
        <tbody>
            <tr class="mb-3">
                <td>
                    <input type="date" class="form-control form-control-sm" id="fecha">
                </td>
                <td>Amigo</td>
                 <td>Emersson</td>


            <td>
                     <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>



<?php include("../../templates/footer.php"); ?>