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
	
/**
 * Colors Controller
 *
 * @property Color $Color
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ColorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Color->recursive = 0;
		$this->Paginator->settings = array('limit' => 8);
		$this->set('colors', $this->Paginator->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Color->create();
			if ($this->Color->save($this->request->data)) {
				$this->Session->setFlash(__('El color ha sido guardado correctamente.'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El color no se pudo guardar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Color->exists($id)) {
			throw new NotFoundException(__('Invalid color'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Color->save($this->request->data)) {
				$this->Session->setFlash(__('El color ha sido actualizado correctamente.'), $element = 'default', $params =  array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El color no se pudo guardar'));
			}
		} else {
			$options = array('conditions' => array('Color.' . $this->Color->primaryKey => $id));
			$this->request->data = $this->Color->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Color->id = $id;
		if (!$this->Color->exists()) {
			throw new NotFoundException(__('Color invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Color->delete()) {
			$this->Session->setFlash(__('El color ha sido eliminado correctamente.'), $element = 'default', $params =  array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El color no se pudo guardar'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
