<?php
class PrimersController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('primers', $this->Primer->find('all'));
	}
}

?>
