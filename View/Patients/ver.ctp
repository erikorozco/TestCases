<fieldset>
	 <legend><h2>Expediente del paciente</h2></legend>
	<div>
		<br>

		<h4><strong>Nombre: </strong><?php echo $patientRecord['Patient']['name'].' '.$patientRecord['Patient']['lastName'].' '.$patientRecord['Patient']['secondName']; ?></h4>
		<h4><strong>Teléfono: </strong><?php echo $patientRecord['Patient']['phone'] ?></h4>
	</div>

	<br>
	<h3>Revisiones realizadas</h3>

	<?php if (empty($patientRecord['Record'])): ?>
		<p>No se ha agregado ningun expediente aún</p>
	<?php endif ?>

	<table class="table table-striped">
		<thead>
			<th>Creado</th>
			<th>Notas</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<?php foreach ($patientRecord['Record'] as $record): ?>
				<tr>
					<td><?php echo $this->Time->format('d-m-Y ; h:i A', $record['created']); ?></td>
					<td><?php echo $record['note'] ?></td>
					<td>
						<?php echo $this->Html->link('Detalle', array('controller' => 'Records', 'action' => 'ver', $record['id'] ), array('class' => 'btn btn-xs btn-info')); ?>
						<?php echo $this->Html->link('Editar', array('controller' => 'Records', 'action' => 'edit', $record['id'] ), array('class' => 'btn btn-xs btn-warning')); ?>
						<?php echo $this->Html->link('Imprimir', array('controller' => 'Records', 'action' => 'imprimir_revision', $record['id'] ), array('class' => 'btn btn-xs btn-primary')); ?>
						<?php echo $this->Form->postLink('Eliminar', array('controller' => 'Records', 'action' => 'delete', $record['id']), array('class' => 'btn btn-xs btn-danger', 'confirm' => 'Eliminar este registro')); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<br>
	<div>
		<?php echo $this->Html->link('Nueva revisión', array('controller' => 'Records', 'action' => 'add', $patientRecord['Patient']['id']), array('class' => 'btn btn-lg btn-success pull-left')); ?>
		<?php echo $this->Html->link('Regresar', array('controller' => 'patients', 'action' => 'index'), array('class' => 'btn btn-lg btn-default pull-right')); ?>
	</div>
</fieldset>
