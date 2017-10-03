<h1>Panel de control</h1>
<div class="container-fluid">
	<div class="row">
		<div class="accesories-menu">
			<?php echo $this->Html->link('Colores', array('controller' => 'colors', 'action' => 'index'), array('class' => 'btn btn-primary btn-lg')); ?>
		</div>
		
		<?php echo $this->Html->link('Materiales', array('controller' => 'materials', 'action' => 'index'), array('class' => 'btn btn-primary btn-lg')); ?>
		<?php echo $this->Html->link('Tipos', array('controller' => 'kynds', 'action' => 'index'), array('class' => 'btn btn-primary btn-lg')); ?>
	</div>
</div>
