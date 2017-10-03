<div class="container-fluid">
	<div class="row">
		<h2>Agregar Tinte</h2>
		<br>
		<br>
		<?php 
			$options = array(
					'label' => 'Agregar Tinte',
					'class' => 'btn btn-lg btn-success col-md-2'
				);

			echo $this->Form->create('Color', array('class' => 'form-group')); 
			echo $this->Form->input('nameColor', array('label' => 'Nombre del tinte' ,'class' => 'form-control', 'placeholder' => 'Nombre del tinte'));
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