<?php
class PrimersController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('primers', $this->Primer->find('all'));
	}

	public function view($id = null) {
		if(!$id) {
			throw new NotFoundException(__('Invalid primer'));
		}

		$primer = $this->Primer->findById($id);
		if(!$primer) {
			throw new NotFoundException(__('Invalid primer'));
		}
		$this->set('primer', $primer);
	}
}

?>
