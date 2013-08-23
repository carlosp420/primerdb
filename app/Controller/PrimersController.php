<?php
class PrimersController extends AppController {
	public $theme = "Cakestrap";

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
			if( $this->Primer->save($this->request->data) ) {
				$this->Session->setFlash('Your primer has been saved.', 'success');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Unable to add your primer.', 'error');
		}
	}

	public function edit( $id = null) {
		if( !$id ) {
			throw new NotFoundException(__('Invalid primer'));
		}

		$primer = $this->Primer->findById($id);
		if( !$primer ) {
			throw new NotFoundException(__('Invalid primer'));
		}

		if( $this->request->is('post') || $this->request->is('put')) {
			$this->Primer->id = $id;
			if( $this->Primer->save($this->request->data)) {
				$this->Session->setFlash('Your primer has been updated.', 'success');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Unable to update your primer.', 'error');
		}

		if( !$this->request->data ) {
			$this->request->data = $primer;
		}
	}

	public function delete($id) {
		if( $this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if( $this->Primer->delete($id) ) {
			$this->Session->setFlash('The primer ' . h($id) . ' has been deleted.', 'info');
			return $this->redirect(array('action' => 'index'));
		}
	}

}
?>
