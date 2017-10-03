<?php

	App::uses('AppController', 'Controller');
	require_once(APP . 'Vendor' . DS . 'fpdf' . DS . 'fpdf.php');
	
	/**
	*@author Erik de Jesús Orozco Castellanos
	*@version v1.0
	*
	************************************************************* 
	*  Author    /   Date      /    Description					*									
	*************************************************************
	*
	*
	*/


	class RecordsController extends AppController 
	{
		public $helpers = array('Html', 'Form' );
		public $component = array('Session');

		public function ver($id = null)
		{
			if (!$id) {
			 	throw new NotFoundException("Datos invalidos");	
			}
			$record = $this->Record->findById($id);

			if (!$record) {
			 	throw new NotFoundException("El expediente no existe en la base de datos");
			}

			$this->loadModel('Property');
			$this->set('property', $this->Property->findById($record['Property']['id'])); 
		}

		public function delete($id)
		{
			if($this->request->is('get')){
				throw new NotAllowdException('Incorrecto');	
			}
			if ($this->Record->delete($id)) {
				$this->Session->setFlash("El record ha sido eliminado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'patients', 'action' => 'index'));
			}
		}

		public function add($id = null)
		{
			if ($this->request->is('post')) {
				$this->loadModel('Property');
				$this->Property->create();
				
				if ($this->Property->save($this->request->data)) {
					$property_id = $this->Property->getLastInsertID();
					$this->Record->create();
					$this->request->data['Record']['property_id'] = $property_id;

					if ($this->Record->save($this->request->data)) {
						$this->Session->setFlash("El registro ha creado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
						return $this->redirect(array('controller' => 'patients', 'action' => 'index'));
					}
				}
				
			} else {
				$this->loadModel('Color');
				$this->loadModel('Kynd');
				$this->loadModel('Material');

				$this->set('patient_id', $id);
				$this->set('colors', $this->Color->find('all'));
				$this->set('kynds', $this->Kynd->find('all'));
				$this->set('materials', $this->Material->find('all'));
			}
		}

		public function edit($id = null){

			if (!$id) {
				throw new NotFoundException("Datos invalidos");
			}

			$record = $this->Record->findById($id);

			if (!$record) {
				throw new NotFoundException("La revisión no ha sido encontrado");
			}	

			if ($this->request->is(array('post', 'put'))) {
				$this->Record->id = $id;

				if ($this->Record->save($this->request->data)) {
					$this->Session->setFlash("La revisión se ha actualizado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success'));
					return $this->redirect(array('controller' => 'patients', 'action' => 'ver', $this->request->data['id_patient']));
				} else {

				$this->Session->setFlash("El registro no pudo ser modificado",	$element = 'default', $params = array('class' => 'alert alert-danger'));
				}
			}


			if (!$this->request->data) {
				$this->request->data = $record;
			}
		}

		public function imprimir_revision($id = null){
			$this->layout = '';

			$record = $this->Record->findById($id);
			$this->set('patient', $record);

			$this->loadModel('Property');
			$this->set('property', $this->Property->findById($record['Property']['id']));

			$this->render()->type('application/pdf');
		}

	}
?>