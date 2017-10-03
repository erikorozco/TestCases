<h2>Editar paciente</h2>
<?php 
	
	$options = array(
			'label' => 'Editar paciente',
			'class' => 'btn btn-lg btn-success col-md-2'
		);

	echo $this->Form->create('Patient', array('class' => 'form-group')); 
	echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nombre del paciente'));
	echo '<br>';
	echo $this->Form->input('lastName', array('class' => 'form-control', 'placeholder' => 'Nombre del paciente'));
	echo '<br>';
	echo $this->Form->input('secondName', array('class' => 'form-control', 'placeholder' => 'Nombre del paciente'));
	echo '<br>';
	echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Teléfono'));
	echo '<br>';

	echo '<div class="row">';
		echo $this->Form->end($options);
		echo $this->Html->link('Regresar', array('controller' => 'patients', 'action' => 'index'), array('class' => 'btn btn-lg btn-danger pull-right'));
	echo '</div>';
?>

