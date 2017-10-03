<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');


	public function beforeFilter()//Actions for this controller before be login
	{
		parent::beforeFilter();//Calling befoteFilter from parent
		$this->Auth->allow('add', 'index');//Access actions before be login
	}


	public function login()
	{
		if($this->request->is('post'))
		{	
			//debug($this->Auth->login());
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash('Usurario y/o contraseña son incorrectos', 'default', array('class' => 'alert alert-danger'));
		}
	}


	public function logout(){
		return $this->redirect($this->Auth->logout());
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->admin();
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash("El Usurario se ha creado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("No se pudo crear el usuario", $element = 'default', $params = array('class' => 'alert alert-danger'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash("El Usurario se ha actualizado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("No se pudo crear el usuario", $element = 'default', $params = array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
				$this->Session->setFlash("El Usurario se ha eliminado exitosamente", $element = 'default', $params =  array('class' => 'alert alert-success', 'role' => 'alert'));
		} else {
			$this->Session->setFlash("No se pudo crear el usuario", $element = 'default', $params = array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
