<?php 
	
	class Property extends AppModel
	{
		public $hasOne = array(
			'Record' => array(
				'className' => 'Record',
				'foreignKey' => 'property_id',
				'conditions' => '',
				'depend' => true
			)
		);

		public $belongsTo = array(
			'Color' => array(
	 				'className' => 'Color',
	 				'foreignKey' => 'color_id',
	 		),
	 		'Kynd' => array(
	 				'className' => 'Kynd',
	 				'foreignKey' => 'kynd_id',
	 		),
	 		'Material' => array(
	 				'className' => 'Material',
	 				'foreignKey' => 'material_id',
	 		)
		);
	}

?>