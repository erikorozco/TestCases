<?php 
	 class Record extends AppModel{
	 	
	 	public $belongsTo = array(
	 			'Patient' => array(
	 				'className' => 'Patient',
	 				'foreignKey' => 'patient_id',
	 			),
	 			'Property' => array(
	 				'className' => 'Property',
	 				'foreignKey' => 'property_id',
	 			)
	 	);

	 }
?>