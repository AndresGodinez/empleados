<?php
App::uses('AppController', 'Controller');
/**
 * Cementeries Controller
 *
 * @property Cementery $Cementery
 * @property PaginatorComponent $Paginator
 */
class CementeriesController extends AppController {

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
		$this->Cementery->recursive = 0;
		$this->set('cementeries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cementery->exists($id)) {
			throw new NotFoundException(__('Invalid cementery'));
		}
		$options = array('conditions' => array('Cementery.' . $this->Cementery->primaryKey => $id));
		$this->set('cementery', $this->Cementery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cementery->create();
			if ($this->Cementery->save($this->request->data)) {
				$this->Session->setFlash('El panteón ha sido creado','default', 
					array(
						'class'=>' alert alert-success animated  fadeOut '
						)
					);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cementery could not be saved. Please, try again.'));
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
		if (!$this->Cementery->exists($id)) {
			throw new NotFoundException(__('Invalid cementery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cementery->save($this->request->data)) {
				$this->Session->setFlash(__('The cementery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cementery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cementery.' . $this->Cementery->primaryKey => $id));
			$this->request->data = $this->Cementery->find('first', $options);
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
		$this->Cementery->id = $id;
		if (!$this->Cementery->exists()) {
			throw new NotFoundException(__('Invalid cementery'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cementery->delete()) {
			$this->Session->setFlash(__('The cementery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cementery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
