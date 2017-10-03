<div class="container-fluid">
	<div class="row">
		<h2>Editar Color</h2>
		<br>
		<br>
		<?php 
			$options = array(
					'label' => 'Editar color',
					'class' => 'btn btn-lg btn-success col-md-2'
				);

			echo $this->Form->create('Color', array('class' => 'form-group')); 
			echo $this->Form->input('id');
			echo $this->Form->input('nameColor', array('class' => 'form-control', 'placeholder' => 'Nombre del color'));
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

