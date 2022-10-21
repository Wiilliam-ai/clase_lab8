

<h1 class="fs-4 text-center">Ejemplo 5: Listado de coches</h1>
<div style="max-width: 600px;" class="mx-auto">
    <a href="?" class="btn btn-dark mb-3">Crear</a>
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
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>    
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
