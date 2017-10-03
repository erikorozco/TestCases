<?php


	App::uses('AppController', 'Controller');

	/**
	*@author Erik de Jesús Orozco Castellanos
	*@version v1.0
	*
	*Upadates
	*************************************************************
	*  Author    /   Date      /    Description					*
	*************************************************************
	*
	*
	*/



	class PatientsController extends AppController {

		public $helpers = array('Html', 'Form' );
		public $components = array('Session', 'Paginator');


		public function index()
		{
			/*$this->Paginator->settings['Tagged'] = array(
			    'tagged',
			    'model' => 'Upload',
			    'by' => $tagname
			);*/
			//$this->Paginator->paginate('Tagged');
			//$this->set('patientsRecords', $this->Patient->find('all'));
			//$this->Patient->recursive = 0;
			$this->Paginator->settings = array('limit' => 8);
			$this->set('patientsRecords', $this->Paginator->paginate());
		}

		public function ver($id = null)
		{
			if (!$id) {
			 	throw new NotFoundException("Datos invalidos");
			}
			$patient = $this->Patient->findById($id);

			if (!$patient) {
			 	throw new NotFoundException("El paciente no existe en la base de datos");
			}

			$this->set('patientRecord', $patient);
		}

		public function nuevo()
		{
			if ($this->request->is('post')) {
				$this->loadModel('Record');

				if ($this->Record->saveAssociated($this->request->data)) {
					$this->Session->setFlash("El paciente ha creado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
					return $this->redirect(array('action' => 'index'));
				}

				$this->Session->setFlash("No se pudo crear el paciente", $element = 'default', $params = array('class' => 'alert alert-danger'));
			}
				$this->loadModel('Color');
				$this->loadModel('Kynd');
				$this->loadModel('Material');

				$this->set('colors', $this->Color->find('all'));
				$this->set('kynds', $this->Kynd->find('all'));
				$this->set('materials', $this->Material->find('all'));
		}

		public function editar($id = null)
		{
			if (!$id) {
				throw new NotFoundException("Datos invalidos");
			}

			$patient = $this->Patient->findById($id);

			if (!$patient) {
				throw new NotFoundException("El paciente no ha encontrado");
			}

			if ($this->request->is(array('post', 'put'))) {
				$this->Patient->id = $id;

				if ($this->Patient->save($this->request->data)) {
					$this->Session->setFlash("El paciente ha actualizado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success'));
					return $this->redirect(array('action' => 'index'));
				} else {

				$this->Session->setFlash("El registro no pudo ser modificado",	$element = 'default', $params = array('class' => 'alert alert-danger'));
				}
			}

			if (!$this->request->data) {
				$this->request->data = $patient;
			}
		}

		public function eliminar($id)
		{
			if($this->request->is('get')){
				throw new NotAllowdException('Incorrecto');
			}
			if ($this->Patient->delete($id)) {
				$this->Session->setFlash("El paciente ha sido eliminado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			}
		}

		public function search_patients() {
			//$this->autoRender = false;

			/*$options = array(
				'conditions' => array('OR' =>
										array(
											'Patient.name LIKE' => "%{$this->request->query['search_query']}%",
											'Patient.lastName LIKE' => "%{$this->request->query['search_query']}%",
											'Patient.secondName LIKE' => "%{$this->request->query['search_query']}%"
											))
			);*/
			//$data = $this->Patient->find('all', $options);

			$this->Paginator->settings = array(
											'conditions' => array('OR' =>
																 array('Patient.name LIKE' => "%{$this->request->query['search_query']}%",
																	'Patient.lastName LIKE' => "%{$this->request->query['search_query']}%",
																	'Patient.secondName LIKE' => "%{$this->request->query['search_query']}%"
																	)
																 ),
											'limit' => 7,
											'order' => array(
															'Patient.lastName' => 'asc'
															)
										);

			$this->set('patientsRecords', $this->Paginator->paginate());
		}
	}

?>
