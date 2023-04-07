<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
<div class="card-header">
        <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">
        Agregar Contacto
        </a>




    </div>

    <div class="card-header">
        Contactos
    </div>
    <div class="card-body">

    </div>

</div>


<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Ciudad</th>

            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td><img src="usuario.png" width="20" height="20"></td>
                <td scope="row">Tomas</td>
                <td>Ortiz Loza</td>
                <td>984453672</td>
                <td>ortizl@gmail.com</td>
                <td>Centro Poblado La Victoria</td>
                <td>Sunampe</td>
                <td>
                         <a href="editar.php?id=1" class="btn btn-info">Editar</a>
                </td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>

            <tr>
                <td><img src="fernando.jpg" width="20" height="20"></td>
                <td>Fernando</td>
                <td>Ortiz Marcelo</td>
                <td>986473645</td>
                <td>casper@gmail.com</td>
                <td>Calle Huascar</td>
                <td>Sunampe</td>
                <td>
                         <a href="editar.php?id=1" class="btn btn-info">Editar</a>
                </td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>


            <tr>
                <td><img src="yohan.jpg" width="20" height="20"></td>
                <td>Yohan</td>
                <td>Sanchez Marcelo</td>
                <td>985423014</td>
                <td>cocan@gmail.com</td>
                <td>Av. Santa Rosa</td>
                <td>Sunampe</td>
                <td>
                         <a href="editar.php?id=1" class="btn btn-info">Editar</a>
                </td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>


            <tr>
                <td><img src="didier.jpg" width="20" height="20"></td>
                <td>Didier</td>
                <td>Huasasquiche Levano</td>
                <td>957436987</td>
                <td>dier@gmail.com</td>
                <td>Av. Paraiso</td>
                <td>Sunampe</td>
                <td>
                         <a href="editar.php?id=1" class="btn btn-info">Editar</a>
                </td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>


            <tr>
                <td><img src="emersson.jpg" width="20" height="20"></td>
                <td>Emersson</td>
                <td>Ortiz Jacobo</td>
                <td>986143579</td>
                <td>ortizjacobo25@gmail.com</td>
                <td>Calle Miguel Grau</td>
                <td>Sunampe</td>
                <td>
                         <a href="editar.php?id=1" class="btn btn-info">Editar</a>
                </td>
                <td>
                        <a href="eliminar.php?id=1" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>






<?php include("../../templates/footer.php"); ?>