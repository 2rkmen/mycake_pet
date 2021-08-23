<?php
App::uses('AppController', 'Controller');

class UserAccountsController extends AppController {
	public $uses = array('Sale');
	public function index($numberOfSales = null) {
		$params = array(
			'conditions' => array('Sale.user_id' => 1),
			'limit' => $numberOfSales);
		$salesForUser = $this->Sale->find('all', $params);
		$this->set('sales', $salesForUser);
//		todo: перечитай че такое Hash
		$total = Hash::extract($salesForUser, '{n}.Sale.total');
		$total = array_sum($total);
		$taxTotal = Hash::extract($salesForUser, '{n}.Sale.tax_total');
		$taxTotal = array_sum($taxTotal);
//		todo: почитать за функцию compact
		$this->set(compact('total', 'taxTotal'));
	}
}
