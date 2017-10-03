<?php
	
	class Patient extends AppModel
	{
		public $validate = array(
				'name' => array(
					'rule' => 'notEmpty'
				),
				'lastName' => array(
					'rule' => 'notEmpty'
				),
				'secondName' => array(
					'rule' => 'notEmpty'
				),
				'phone' => array(
					'rule' => 'numeric',
					'message' => 'Solo números'
				)
		);

		public $hasMany = array(
				'Record' => array(
					'className' => 'Record',
					'foreignKey' => 'patient_id',
					'conditions' => '',
					'depend' => true,
				)
			);
	}
?>