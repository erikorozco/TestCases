<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

		public $components = array(
					'Session',
		 			'Auth' => array(
		 						'loginRedirect' => array(
			 						'controller' => 'patients',
			 						'action' => 'index'
		 						),
		 						'logoutRedirect' => array(
		 							'controller' => 'users',
		 							'action' => 'login'
		 						),
		 						'authenticate' => array(
		 							'Form' => array(
		 								'passwordHasher' => 'Blowfish'
		 							)
		 						),
		 						'authError' => false
		 			)
		 );

		public function beforeFilter()//Any action before uderd login
		{
			$this->Auth->allow('login', 'logout');//Actions without be login
			$this->set('current_user', $this->Auth->user());
		}

		public function admin()
		{
			if ($this->Auth->user('role') !== 'admin') {
				$this->Session->setFlash('No cuentas con los permisos necesarios para acceder este modulo', 'default', array('class' => 'alert alert-info'));
				return $this->redirect(array('controller' => 'patients', 'action' => 'index'));
			}
		}

}
