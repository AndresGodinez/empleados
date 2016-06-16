<?php
App::uses('AppController', 'Controller');
/**
 * Syndicates Controller
 *
 * @property Syndicate $Syndicate
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 * @property SessionComponent $Session
 */
class SyndicatesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('JS', 'Time');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Syndicate->recursive = 0;
		$this->set('syndicates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Syndicate->exists($id)) {
			throw new NotFoundException(__('Invalid syndicate'));
		}
		$options = array('conditions' => array('Syndicate.' . $this->Syndicate->primaryKey => $id));
		$this->set('syndicate', $this->Syndicate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Syndicate->create();
			if ($this->Syndicate->save($this->request->data)) {
				$this->Session->setFlash(__('The syndicate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The syndicate could not be saved. Please, try again.'));
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
		if (!$this->Syndicate->exists($id)) {
			throw new NotFoundException(__('Invalid syndicate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Syndicate->save($this->request->data)) {
				$this->Session->setFlash(__('The syndicate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The syndicate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Syndicate.' . $this->Syndicate->primaryKey => $id));
			$this->request->data = $this->Syndicate->find('first', $options);
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
		$this->Syndicate->id = $id;
		if (!$this->Syndicate->exists()) {
			throw new NotFoundException(__('Invalid syndicate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Syndicate->delete()) {
			$this->Session->setFlash(__('The syndicate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The syndicate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
