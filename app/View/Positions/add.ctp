<?php echo $this->Form->create('Position'); ?>
	<div class="page-header">
		<h2>Nuevo Puesto</h2>
	</div>
<div class="col-md-12">
	<div class="col-md-6">
		<?php
			echo $this->Form->input('name',array(
				'class'=>'form-control',
				'label'=>'Nombre',
				'Placeholder'=>'Nombre'
				)
			);
		?>
		<br>
		<?php echo $this->Form->end(array(
			'class'=>'btn btn-info',
			'label'=>'Nuevo puesto'
		)); ?>
	</div>
	<div class="col-md-2">
		<!-- vacio -->
	</div>
	<div class="col-md-3">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><?php echo $this->Html->link(__('Lista de Puestos'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		  </ul>
		</div>
	</div>
</div>
	