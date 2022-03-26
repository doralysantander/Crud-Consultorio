<h1 class="page-header">Citas</h1>


<div class="well well-sm text-right">
    <!-- c es = cita y a=crud, para darles valor de al c y a-->
    <a class="btn btn-primary" href="?c=Cita&a=Crud">Agregar Persona</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombres</th>
            <th>Documento</th>
            <th>Fecha de cita</th>
            <th >Consulta</th>
           
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
         <!--invocando el metodo listar que esta en model cita, los datos de listar guarga en $r -->
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->documento; ?></td>
            <td><?php echo $r->fecha_actual; ?></td>
            <td><?php echo $r->consulta; ?></td>
   
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Cita&a=Crud&id_cita=<?php echo $r->id_cita; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Cita&a=Eliminar&id_cita=<?php echo $r->id_cita; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
