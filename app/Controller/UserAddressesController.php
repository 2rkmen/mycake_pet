<?php
App::uses('AppController', 'Controller');
/**
 * UserAddresses Controller
 *
 * @property UserAddress $UserAddress
 * @property PaginatorComponent $Paginator
 */
class UserAddressesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserAddress->recursive = 0;
		$this->set('userAddresses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserAddress->exists($id)) {
			throw new NotFoundException(__('Invalid user address'));
		}
		$options = array('conditions' => array('UserAddress.' . $this->UserAddress->primaryKey => $id));
		$this->set('userAddress', $this->UserAddress->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserAddress->create();
			if ($this->UserAddress->save($this->request->data)) {
				$this->Flash->success(__('The user address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user address could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserAddress->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserAddress->exists($id)) {
			throw new NotFoundException(__('Invalid user address'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserAddress->save($this->request->data)) {
				$this->Flash->success(__('The user address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user address could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserAddress.' . $this->UserAddress->primaryKey => $id));
			$this->request->data = $this->UserAddress->find('first', $options);
		}
		$users = $this->UserAddress->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserAddress->id = $id;
		if (!$this->UserAddress->exists()) {
			throw new NotFoundException(__('Invalid user address'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserAddress->delete()) {
			$this->Flash->success(__('The user address has been deleted.'));
		} else {
			$this->Flash->error(__('The user address could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
