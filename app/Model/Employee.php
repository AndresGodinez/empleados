<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property Cementery $Cementery
 * @property Position $Position
 */
class Employee extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $actsAs=array(
		'Upload.Upload'=>array(
			'foto'=>array(
				'fields'=>array(
					'dir'=>'foto_dir'),
				'thumbnailMethod'=>'php',
				'thumbnailSizes'=>array(
					'vga'=>'640x480',
					'thumb'=>'150x150'
					),
				'deteteOnUpdate'=>true,
				'deleteFolderOnDelete'=>true
				)
			)
		);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'addres' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto'=>array(
			'uploadError'=>array(
				'rule'=>'uploadError',
				'message'=>'Algo anda Mal intenta nuevamente',
				'on'=>'create'
				),
			'isUnderPhpSizeLimit'=>array(
				'rule'=>'isUnderPhpSizeLimit',
				'message'=>'Excede el limite de tamaño de imagen'
				),
			'isValidMimeType'=>array(
				'rule'=>array(
					'isValidMimeType', array(
						'image/jpeg',
						'image/png'
						),
					false
					),
				'message'=>'Unicamente archivos JPG y PNG'
				),
			'isBelowMaxSize'=>array(
				'rule'=>array(
					'isBelowMAxSize',1048576
					),
				'message'=>'El Archivo es Demasiado Grande'
				),
			'isValidExtension'=>array(	
				'rule'=>array('isValidExtension', array( 
					'jpg', 'png'
					),
				false
				),
				'message'=>'No es un tipo de formato válido'
			),
			'checkUniqueName'=>array(
				'rule'=>array('checkUniqueName'
					),
				'message'=>'Imagen ya registrada',
				'on'=>'update'
				),
			),
		'telephone' => array(
			'phone' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cementery' => array(
			'className' => 'Cementery',
			'foreignKey' => 'cementery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
