<h2>Nuevo paciente</h2>

<?php 

	$options = array(
			'label' => 'Guardar paciente',
			'class' => 'btn btn-lg btn-success col-md-2'
		);

	echo $this->Form->create('Patient', array('class' => 'form-group'));
	echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Nombre del paciente'));
	echo '<br>';
	echo $this->Form->input('lastName', array('class' => 'form-control', 'placeholder' => 'Apellido paterno'));
	echo '<br>';
	echo $this->Form->input('secondName' , array('class' => 'form-control', 'placeholder' => 'Apellido materno'));
	echo '<br>';
	echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Teléfono'));
	echo '<br>';
?>
	<table class="table table-striped">
			<thead>
				<tr>
					<th></th>
					<th>Esfera</th>
					<th>Cilindro</th>
					<th>Eje</th>
					<th>Adición</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><h4>O.D.</h4></td>
					<td>
						<input type="text" class="form-control input-sm" id="sphereLE" name="data[Record][sphereRE]" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="cylinderRE" name="data[Record][cylinderRE]" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="axisRE" name="data[Record][axisRE]" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="aditionRE" name="data[Record][aditionRE]" required>
					</td>
				</tr>
				<tr>
					<td><h4>O.I.</h4></td>
					<td>
						<input type="text" class="form-control input-sm" id="sphereRE" name="data[Record][sphereLE]" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="cylinderLE" name="data[Record][cylinderLE]" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="axisLE" name="data[Record][axisLE]" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="aditionLE" name="data[Record][aditionLE]" required>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="form-group">
				<label for="DIP">DIP</label>
				<input type="text" class="form-control input-sm" id="DIP" name="data[Record][DIP]">
			</div>
			<div class="form-group">
				<label for="AO">AO</label>
				<input type="text" class="form-control input-sm" id="AO" name="data[Record][AO]">
			</div>
			<div class="form-group">
				<label for="note">Observaciones</label>
				<textarea type="text" class="form-control input-sm" id="note" name="data[Record][note]"></textarea>
			</div>
			<div class="form-group">
				<label for="model">Modelo de armazón</label>
				<input type="text" class="form-control input-sm" id="model" name="data[Record][model]">
			</div>
			<div class="form-group">
				<label for="color">Tintes</label>
				<select class="form-control input-sm" id="color" name="data[Property][color_id]">
					<option value="1">No aplica</option>
					<?php foreach ($colors as $color): ?>
						<option value="<?php echo $color['Color']['id'] ?>"><?php echo $color['Color']['nameColor'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="material">Materiales</label>
				<select class="form-control input-sm" id="color" name="data[Property][material_id]">
					<option value="1">No aplica</option>
					<?php foreach ($materials as $material): ?>
						<option value="<?php echo $material['Material']['id'] ?>"><?php echo $material['Material']['nameMaterial'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="kynd">Tipos</label>
				<select class="form-control input-sm" id="color" name="data[Property][kynd_id]">
					<option value="1">No aplica</option>
					<?php foreach ($kynds as $kynd): ?>
						<option value="<?php echo $kynd['Kynd']['id'] ?>"><?php echo $kynd['Kynd']['nameKynd'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="tonallity">Tonalidad</label>
				<input type="text" class="form-control input-sm" id="tonallity" name="data[Property][tonallity]">
			</div>
<?php 

	echo '<div class="row">';
		echo $this->Form->end($options);
		echo $this->Html->link('Regresar', array('controller' => 'patients', 'action' => 'index'), array('class' => 'btn btn-lg btn-danger pull-right'));
	echo '</div>';
 ?>
