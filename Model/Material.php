<?php 


	class Material extends AppModel
	{	
		public $hasMany = array(
			'Property' => array(
				'className' => 'Property',
				'foreignKey' => 'color_id',
				'conditions' => '',
				'depend' => true
			)
		);

	}	

?>