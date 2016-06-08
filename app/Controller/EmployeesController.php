<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 * @property PaginatorComponent $Paginator
 */
class EmployeesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'Employee.id' => 'asc'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employee->recursive = 0;
		$this->paginate['Employee']['limit']=10;
		$this->paginate['Employee']['order']=array(
			'Employee.id'=>'asc'
			);
		$this->Paginator->settings = $this->paginate;
		$this->set('employees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash('El empleado ha sido guardado.', 'default', array(
					'class'=>'alert alert-info animated fadeOut'
					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El empleado no pudo ser agregado','default', array(
					'class'=>'alert alert-dangger animated fadeOut'

					));
			}
		}
		$cementeries = $this->Employee->Cementery->find('list');
		$positions = $this->Employee->Position->find('list');
		$this->set(compact('cementeries', 'positions'));
	}
	public function searchjson()
	{
		$term=null;
		if(!empty($this->request->query['term']))
		{
			$term=$this->request->query['term'];
			$terms=explode(' ', trim($term));
			$terms=array_diff($terms,array(''));
			foreach ($terms as $term) {
				$conditions[]=array('Employee.name LIKE' => '%' . $term . '%');
			}
			$employees = $this->Employee->find('all', array(
				'recursive'=>-1,
				'fields'=> array(
					'Employee.id',
					'Employee.name',
					'Employee.foto',
					'Employee.foto_dir'
					),
				'conditions'=>$conditions, 
				'limit'=>20
				));
		}
		echo json_encode($employees);
		$this->autoRender= false;
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash('El empleado ha sido Actualizado','default', array(
					'class'=>'alert alert-info animated fadeOut'
					));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El empleado no pudo ser guardado.','default',array(
					'class'=>'alert alert-dangger animated fadeOut'

					));
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
		$cementeries = $this->Employee->Cementery->find('list');
		$positions = $this->Employee->Position->find('list');
		$this->set(compact('cementeries', 'positions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Datos inválidos'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Session->setFlash('El empleado ha sido eliminado','default', array(
					'class'=>'alert alert-info animated fadeOut'
				));
		} else {
			$this->Session->setFlash('El empleado no ha podido ser eliminado, intente nuevamente', 'default',array(
					'class'=>'alert alert-dangger animated fadeOut'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
