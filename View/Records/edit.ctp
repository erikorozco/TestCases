<div class="container">
	<h2>Editar revisión</h2>
	<?php echo $this->Html->link('Regresar', array('controller' => 'patients', 'action' => 'ver', $this->request->data['Patient']['id']), array('class' => 'btn btn-lg btn-default pull-right')); ?>
	<br>
	<br>
</div>
	<form method="POST" id="RecordsEditForm" action="">
		<input type="hidden" value="<?php echo $this->request->data['Patient']['id'] ?>" name="id_patient">
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
						<input type="text" class="form-control input-sm" id="sphereLE" name="data[Record][sphereRE]" value="<?php echo $this->request->data['Record']['sphereRE'] ?>" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="cylinderRE" name="data[Record][cylinderRE]" value="<?php echo $this->request->data['Record']['cylinderRE'] ?>" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="axisRE" name="data[Record][axisRE]" value="<?php echo $this->request->data['Record']['axisRE'] ?>" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="aditionRE" name="data[Record][aditionRE]" value="<?php echo $this->request->data['Record']['aditionRE'] ?>" required>
					</td>
				</tr>
				<tr>
					<td><h4>O.I.</h4></td>
					<td>
						<input type="text" class="form-control input-sm" id="sphereRE" name="data[Record][sphereLE]" value="<?php echo $this->request->data['Record']['sphereLE'] ?>" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="cylinderLE" name="data[Record][cylinderLE]" value="<?php echo $this->request->data['Record']['cylinderLE'] ?>" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="axisLE" name="data[Record][axisLE]" value="<?php echo $this->request->data['Record']['axisLE'] ?>" required>
					</td>
					<td>
						<input type="text" class="form-control input-sm" id="aditionLE" name="data[Record][aditionLE]" value="<?php echo $this->request->data['Record']['aditionLE'] ?>" required>
					</td>
				</tr>
			</tbody>
		</table>
			<div class="form-group">
				<label for="DIP">DIP</label>
				<input type="text" class="form-control input-sm" id="DIP" name="data[Record][DIP]" value="<?php echo $this->request->data['Record']['DIP'] ?>">
			</div>
			<div class="form-group">
				<label for="AO">AO</label>
				<input type="text" class="form-control input-sm" id="AO" name="data[Record][AO]" value="<?php echo $this->request->data['Record']['AO'] ?>">
			</div>
			<div class="form-group">
				<label for="note">Observaciones</label>
				<textarea type="text" class="form-control input-sm" id="note" name="data[Record][note]" ><?php echo $this->request->data['Record']['note'] ?></textarea>
			</div>
			<div class="form-group">
				<label for="model">Modelo de armazón</label>
				<input type="text" class="form-control input-sm" id="model" name="data[Record][model]" value="<?php echo $this->request->data['Record']['model'] ?>">
			</div>
		<button type="submit" class="btn btn-lg btn-primary">Guardar</button>
		<?php echo $this->Html->link('Regresar', array('controller' => 'patients', 'action' => 'ver', $this->request->data['Patient']['id']), array('class' => 'btn btn-lg btn-default pull-right')); ?>
	</form>