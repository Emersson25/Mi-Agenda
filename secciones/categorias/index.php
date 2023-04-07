<?php include("../../templates/header.php"); ?>
<br/>

<div class="card">
    <div class="card-header">
        Categorias
    </div>
    <div class="card-body">

    </div>

</div>


<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Llamadas Frencuentes</th>
                <th scope="col">Llamadas No Frencuentes</th>
                <th scope="col">Llamadas No Deseadas</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">Fernado</td>
                <td>Yohan</td>
                <td>Emersson</td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <tr>
                <td>Yohan</td>
                 <td>Emersson</td>
                <td>Didier</td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>

            <tr>
                <td>Tomas</td>
                <td>Emersson</td>
                <td>Didier</td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>




<?php include("../../templates/footer.php"); ?>