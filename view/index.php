

<h1 class="fs-4 text-center">Listado de Alumnos</h1>
<div style="max-width: 600px;" class="mx-auto">
    <a href="?cmd=registrar" class="btn btn-dark mb-3">Crear</a>
    <table class="table">
        <thead class="table-dark">

            <tr>
                <!-- 
                    <th>#</th>
                -->
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rowset as $row): ?>
                <tr>
                    <!-- 
                        <td><?php echo $row->id; //$row->getId(); ?></td>
                     -->
                    <td><?php echo $row->nombres; //$row->getNombre(); ?></td>
                    <td><?php echo $row->apellidos;//$row->getApellido(); ?></td>
                    <td><?php echo $row->edad;//$row->getEdad(); ?></td>
                    <td>
                        <a href="?cmd=editar&id=<?php echo $row->id;?>" class="btn btn-warning">Editar</a>
                        <a href="?cmd=eliminar&id=<?php echo $row->id;?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>    
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
