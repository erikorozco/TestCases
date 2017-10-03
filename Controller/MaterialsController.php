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
 * Materials Controller
 *
 * @property Material $Material
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MaterialsController extends AppController {

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
		$this->Material->recursive = 0;
		$this->Paginator->settings = array('limit' => 8);
		$this->set('materials', $this->Paginator->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Material->create();
			if ($this->Material->save($this->request->data)) {
				$this->Session->setFlash(__('El material ha sigo guardado correctamente'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El material no se pudo guardar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
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
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Material->save($this->request->data)) {
				$this->Session->setFlash(__('El material ha sigo actualizado correctamente'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El material no se pudo actualizar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
			$this->request->data = $this->Material->find('first', $options);
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
		$this->Material->id = $id;
		if (!$this->Material->exists()) {
			throw new NotFoundException(__('Invalid material'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Material->delete()) {
			$this->Session->setFlash(__('El material ha sigo eliminado correctamente'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
		} else {
			$this->Session->setFlash(__('El material no se pudo eliminar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
