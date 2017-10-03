<?php echo $this->Html->link(__('Nuevo Material'), array('action' => 'add'),  array('class' => 'btn btn-lg btn-success')); ?>
<br>
<br>
<div class="materials index">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nameMaterial', 'Nombre del material'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materials as $material): ?>
	<tr>
		<td><?php echo h($material['Material']['id']); ?>&nbsp;</td>
		<td><?php echo h($material['Material']['nameMaterial']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $material['Material']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $material['Material']['id']),  array('class' => 'btn btn-xs btn-danger', 'confirm' => '¿Estás seguro de eliminar este registro?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
</div>
