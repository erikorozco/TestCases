

<div class="container-fluid">
	<div class="row">
		<h2>Agregar Usuario</h2>
		<br>
		<br>
		<?php 
			$roles = array('admin' => 'Administrador', 'viwer' => 'Visitante');
			$options = array(
					'label' => 'Agregar Usuario',
					'class' => 'btn btn-lg btn-success col-md-2'
				);

			echo $this->Form->create('User', array('class' => 'form-group')); 
			echo $this->Form->input('fullname', array('label' => 'Nombre completo del usuario' ,'class' => 'form-control', 'placeholder' => 'Nombre completo de usuario'));
			echo '<br>';
			echo $this->Form->input('username', array('label' => 'Nombre de usuario' ,'class' => 'form-control', 'placeholder' => 'Usuario'));
			echo '<br>';
			echo $this->Form->input('password', array('label' => 'Contraseña' ,'class' => 'form-control', 'placeholder' => 'Contraseña'));
			echo '<br>';
			echo $this->Form->input('role', array('type' => 'select', 'options' => $roles));
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