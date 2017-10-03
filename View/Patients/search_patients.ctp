<?php echo $this->Html->link('Agregar paciente', array('controller' => 'patients', 'action' => 'nuevo'), array('class' => 'btn btn-lg btn-success')); ?>
<br>
<br>
<div class="row">
    <div class="col-md-4 col-md-offset-7">
        <form class="form-search" action="<?php echo $this->webroot; ?>patients/search_patients" accept-charset="utf-8" method="get" style="margin-top: 10px;">
            <div class="col-md-9">
                <input class="form-control input-sm search-query" name="search_query" type="text" placeholder="Buscar paciente..." value="">
            </div>
            <div class="col-md-2 text-right">
                <button class="btn btn-search btn-sm" type="submit">Buscar</button>
            </div>
        </form>
    </div>
<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Teléfono</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		<?php if($patientsRecords != null): ?>
			<?php foreach ($patientsRecords as $patient): ?>
				<tr>
					<td><?php echo $patient['Patient']['name'] ?></td>
					<td><?php echo $patient['Patient']['lastName'].' '.$patient['Patient']['secondName']; ?></td>
					<td><?php echo $patient['Patient']['phone'] ?></td>
					<td>
						<?php echo $this->Html->link('Expediente', array('controller' => 'patients', 'action' => 'ver', $patient['Patient']['id'] ), array('class' => 'btn btn-xs btn-info')); ?>
						<?php echo $this->Html->link('Editar', array('controller' => 'patients', 'action' => 'editar', $patient['Patient']['id'] ), array('class' => 'btn btn-xs btn-warning')); ?>
						<?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $patient['Patient']['id']), array('class' => 'btn btn-xs btn-danger', 'confirm' => '¿Estás seguro de eliminar este registro?')); ?>
					</td> 
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="5">No se encontraron resultados</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
<div class="text-center">
    <ul class="pagination pagination-sm">
    <?php
        echo $this->Paginator->prev(__('<'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
        echo $this->Paginator->next(__('>'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
    ?>
    </ul>
</div>	



