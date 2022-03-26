<h1 class="page-header">
    <?php echo $alm->id_cita != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb"><!-- decirle al usuario donde esta ubicado dentro del sitio ej home/contactos-->
  <li><a href="?c=Cita">Personas</a></li>
  <li class="active"><?php echo $alm->id_cita != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_cita" value="<?php echo $alm->id_cita; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre y Apellido" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Documento</label>
        <input type="text" name="documento" value="<?php echo $alm->documento; ?>" class="form-control" placeholder="Ingrese su documento" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Fecha de cita</label>
        <input type="datetime-local" name="fecha_actual" value="<?php echo $alm->fecha_actual; ?>" class="form-control" placeholder="Ingrese la fecha cita" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Consulta</label>
        <input type="text" name="consulta" value="<?php echo $alm->consulta; ?>" class="form-control" placeholder="Ingrese tipo consulta" data-validacion-tipo="requerido|min:8" />
    </div>
    
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
<!--validaciones campos ...en php validate que valida email numero telefono esta hecha en php-->
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
