<?php
class AmpliconsController extends AppController {
	public $theme = "Cakestrap";

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

    # sent inside set to views
	public function index() {
		$this->set('amplicons', $this->Amplicon->find('all'));
	}

	public function view($id = null) {
		if(!$id) {
			throw new NotFoundException(__('Invalid amplicon'));
		}

		$amplicon = $this->Amplicon->findById($id);
		if(!$amplicon) {
			throw new NotFoundException(__('Invalid amplicon'));
		}
		$this->set('amplicon', $amplicon);
	}

	public function add() {
		if( $this->request->is('post') ) {
			$this->Amplicon->create();
			if( $this->Amplicon->save($this->request->data) ) {
				$this->Session->setFlash('Your amplicon has been saved.', 'success');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Unable to add your amlicon.', 'error');
		}
	}

	public function edit( $id = null) {
		if( !$id ) {
			throw new NotFoundException(__('Invalid amplicon'));
		}

		$amplicon = $this->Amplicon->findById($id);
		if( !$amplicon ) {
			throw new NotFoundException(__('Invalid amplicon'));
		}

		if( $this->request->is('post') || $this->request->is('put')) {
			$this->Amplicon->id = $id;
			if( $this->Amplicon->save($this->request->data)) {
				$this->Session->setFlash('Your amplicon has been updated.', 'success');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Unable to update your amplicon.', 'error');
		}

		if( !$this->request->data ) {
			$this->request->data = $amplicon;
		}
	}

	public function delete($id) {
		if( $this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if( $this->Amplicon->delete($id) ) {
			$this->Session->setFlash('The amplicon ' . h($id) . ' has been deleted.', 'info');
			return $this->redirect(array('action' => 'index'));
		}
	}

}
?>
