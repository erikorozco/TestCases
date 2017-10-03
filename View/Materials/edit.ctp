<div class="container-fluid">
	<div class="row">
		<h2>Editar Material</h2>
		<br>
		<br>
		<?php 
			$options = array(
					'label' => 'Editar tipo de lente',
					'class' => 'btn btn-lg btn-success col-md-2'
				);

			echo $this->Form->create('Material', array('class' => 'form-group')); 
			echo $this->Form->input('id');
			echo $this->Form->input('nameMaterial', array('class' => 'form-control', 'placeholder' => 'Nombre del Material'));
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
