<?php echo $this->Form->create('Cementery'); ?>
<div class="page-header">
	<h2>Actualizar Panteón</h2>
</div>
<div class="col-md-12">
	<div class="col-md-6">
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array(
			'class'=>'form-control',
			'label'=>'Nombre',
			'PlaceHolder'=>'Nombre'
			)
		);
	?>
	<br>

	<?php echo $this->Form->end(array(
			'label'=>'Actualizar',
			'class'=>'btn btn-info'
		)
	); ?>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-3">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Cementery.id')), array(), __('Esta seguro de eliminar '.$this->Form->value('Cementery.name').' ?', $this->Form->value('Cementery.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Panteones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		  </ul>
		</div>
	</div>
</div>