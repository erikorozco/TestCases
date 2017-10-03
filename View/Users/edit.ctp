<div class="container-fluid">
	<div class="row">
		<h2>Editar Usuario</h2>
		<br>
		<br>
	<?php
		$options = array(
					'label' => 'Editar Usuario',
					'class' => 'btn btn-lg btn-success col-md-2'
				);
		echo $this->Form->create('User', array('class' => 'form-group'));
		echo $this->Form->input('id');
		echo $this->Form->input('fullname', array('class' => 'form-control', 'placeholder' => 'Nombre del Usuario'));
		echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Usuario'));
		echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Contraseña'));

		echo '<br>';
		echo '<br>';
		echo '<br>';

		echo '<div class="row">';
			echo $this->Form->end($options); 
			echo $this->Html->link(__('Regresar'), array('action' => 'index'), array('class' => 'btn btn-lg btn-danger pull-right'));
		echo '</div>';
	?>
	</div>
</div>


