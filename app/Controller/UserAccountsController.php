<?php
App::uses('AppController', 'Controller');

class UserAccountsController extends AppController {
	public function index() {
		$salesForUser = 'Sales for a user';
		$this->set('sales', $salesForUser);

	}
}
