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
	public $paginate= array(
		'limit'=>1,
		'order'=>array(
			'cementery.id'=>'asc')
		);

/**
 * index method
 *
 * @return void
 */

	public function index() {
		$this->Cementery->recursive = 0;
		$this->paginate['Cementery']['limit']=10;
		$this->paginate['Cementery']['order']=array('Cementery.id'=>'asc');
		$this->Paginator->settings= $this->paginate;
		$this->set('cementeries', $this->paginate());
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
			throw new NotFoundException(__('Datos inválidos'));
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
				$this->Session->setFlash('El panteón ha sido creado','default',	array(
					'class'=>' alert alert-info animated fadeOut '
					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El panteón no ha podido ser guardado','default', array(
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
		if (!$this->Cementery->exists($id)) {
			throw new NotFoundException(__('Datos Invalidos'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cementery->save($this->request->data)) {
				$this->Session->setFlash('El panteón ha sido actualizado','default', array(
					'class'=>'alert alert-info animated fadeOut'
					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El panteón no ha podido ser actualizado.'));
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
			throw new NotFoundException(__('Datos invalidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cementery->delete()) {
			$this->Session->setFlash('El panteón ha sido eliminado','default',array(
				'class'=>'alert alert-info animated fadeOut'
				));
		} else {
			$this->Session->setFlash('El panteón no pudo ser eliminado','default', array(
					'class'=>'alert alert-dangger animated fadeOut'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
