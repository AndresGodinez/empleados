<?php
App::uses('AppController', 'Controller');
/**
 * Positions Controller
 *
 * @property Position $Position
 * @property PaginatorComponent $Paginator
 */
class PositionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $paginate= array(
		'limit'=>1,
		'order'=>array(
			'Position.id'=>'asc')
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Position->recursive = 0;
		$this->paginate['Position']['limit']=20;
		$this->paginate['Position']['order']=array('Position.id'=>'asc');
		$this->Paginator->settings = $this->paginate;
		$this->set('positions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Position->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Position.' . $this->Position->primaryKey => $id));
		$this->set('position', $this->Position->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Position->create();
			if ($this->Position->save($this->request->data)) {
				$this->Session->setFlash('El puesto ha sido guardado.','default', array(
					'class'=>'alert alert-info animated fadeOut'
					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El puesto no ha podido ser guardado','default', array(
					'class'=>'alert alert-dangger animated fadeOut'

					));
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
		if (!$this->Position->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Position->save($this->request->data)) {
				$this->Session->setFlash('El puesto ha sido actualizado','default', array(
					'class'=>'alert alert-info animated fadeOut'

					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El puesto no ha podido ser actualizado.','default', array(
					'class'=>'alert alert-dangger animated fadeOut'
					));
			}
		} else {
			$options = array('conditions' => array('Position.' . $this->Position->primaryKey => $id));
			$this->request->data = $this->Position->find('first', $options);
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
		$this->Position->id = $id;
		if (!$this->Position->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Position->delete()) {
			$this->Session->setFlash('El puesto ha sido eliminado', 'default', array(
					'class'=>'alert alert-info animated fadeOut'
				));
		} else {
			$this->Session->setFlash('El puesto no ha podido ser eliminado', 'default', array(
					'class'=>'alert alert-info animated fadeOut'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
