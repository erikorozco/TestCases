<h2>Detalle de revisión</h2>
<br>
<fieldset>
	<legend>Revisión</legend>
	<table class="table table-striped">
		<thead>
			<th ></th>
			<th>Esfera</th>
			<th>Cilindro</th>
			<th>Eje</th>
			<th>Adición</th>
		</thead>
		<tbody>
			<tr>	
				<td><b>Ojo derecho</b></td>
				<td><?php echo $property['Record']['sphereRE'] ?></td>
				<td><?php echo $property['Record']['cylinderRE'] ?></td>
				<td><?php echo $property['Record']['axisRE'] ?></td>
				<td><?php echo $property['Record']['aditionRE'] ?></td>
			</tr>
			<tr>
				<td><b>Ojo izquierdo</b></td>
				<td><?php echo $property['Record']['sphereLE'] ?></td>
				<td><?php echo $property['Record']['cylinderLE'] ?></td>
				<td><?php echo $property['Record']['axisLE'] ?></td>
				<td><?php echo $property['Record']['aditionLE'] ?></td>
			</tr>
		</tbody>
	</table>
	<br>

	<p><b>DIP: </b><?php echo $property['Record']['DIP'] ?></p>
	<p><b>DIP: </b><?php echo $property['Record']['AO'] ?></p>
	<br>

	<p><b>Nota: </b><?php echo $property['Record']['note'] ?></p>
	<br>

	<p><b>Tipo de lente: </b><?php echo $property['Kynd']['nameKynd'] ?></p>

	<p><b>Material: </b><?php echo $property['Material']['nameMaterial'] ?></p>

	<p><b>Tinte: </b><?php echo $property['Color']['nameColor'] ?></p>

	<p><b>Tonaldad: </b><?php echo $property['Property']['tonallity'] ?></p>
	<br>

	<p><b>Modelo de armazón: </b><?php echo $property['Record']['model'] ?></p>
	<br>
	
	<p><b>Creado: </b><?php echo $this->Time->format('d-m-Y ; h:i A', $property['Record']['created']); ?></p>
	<p><b>Modificado: </b><?php echo $this->Time->format('d-m-Y ; h:i A', $property['Record']['modified']); ?></p>
	<br>
</fieldset>
<?php echo $this->Html->link('Regresar', array('controller' => 'Patients', 'action' => 'ver', $property['Record']['patient_id']), array('class' => 'btn btn-lg btn-default')); ?>
