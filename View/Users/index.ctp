<?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add'),  array('class' => 'btn btn-lg btn-success')); ?>
<br>
<br>
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('fullname', 'Nombre del completo del usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('role', 'Tipo de usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']),  array('class' => 'btn btn-xs btn-danger', 'confirm' => '¿Estás seguro de eliminar este registro?')); ?>
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
<?php echo $this->Html->link('Regresar', array('controller' => 'Patients', 'action' => 'index'), array('class' => 'btn btn-lg btn-default')); ?>
