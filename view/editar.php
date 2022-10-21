<h1 class="fs-4 text-center">Modifica un alumno</h1>
<div style="max-width: 600px;" class="mx-auto border border-4 p-2">
    <form  method="post">
        <input type="hidden" name="txtId" value="<?php echo $objeto->id; ?>">
        <div class="mb-3">
            <label  for="apellidos">Apellidos</label>
            <input id="apellidos" name="apellidos" type="text" class="form-control" value="<?php echo $objeto->apellidos; ?>" />
        </div>
        <div class="mb-3">
            <label  for="nombres">Nombres</label>
            <input id="nombres" name="nombres" type="text" class="form-control" value="<?php echo $objeto->nombres; ?>" />
        </div>
        <div class="mb-3">
            <label  for="edad">Edad</label>
            <input name="edad" type="number" class="form-control" value="<?php echo $objeto->edad; ?>" />
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</div>