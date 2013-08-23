<?php
class PrimersController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

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

	public function add() {
		if( $this->request->is('post') ) {
			$this->Primer->create();
			if( $this->Primer->save($this->request_data) ) {
				$this->Session->setFlash(__('Your primer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your primer.'));
		}
	}

}
?>
