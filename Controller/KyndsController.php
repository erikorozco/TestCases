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
 * Kynds Controller
 *
 * @property Kynd $Kynd
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class KyndsController extends AppController {

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
		$this->Kynd->recursive = 0;
		$this->Paginator->settings = array('limit' => 8);
		$this->set('kynds', $this->Paginator->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kynd->create();
			if ($this->Kynd->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo de lente ha sigo guardado correctamente'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo de lente no se pudo guardar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
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
		if (!$this->Kynd->exists($id)) {
			throw new NotFoundException(__('Invalid kynd'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kynd->save($this->request->data)) {
				$this->Session->setFlash(__('El tipo de lente ha sido actualizado correctamente.'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo de lente no se pudo actualizar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Kynd.' . $this->Kynd->primaryKey => $id));
			$this->request->data = $this->Kynd->find('first', $options);
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
		$this->Kynd->id = $id;
		if (!$this->Kynd->exists()) {
			throw new NotFoundException(__('Invalid kynd'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Kynd->delete()) {
			$this->Session->setFlash(__('El tipo de lente ha sido eliminado correctamente.'), $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
		} else {
			$this->Session->setFlash(__('El tipo de lente no se pudo eliminar'), $element = 'default', $params = array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
