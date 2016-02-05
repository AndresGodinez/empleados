<div class="page-header">
	<h2>Detalle empleado</h2>
</div>
<div class="col-md-12">
	<div class="col-md-8">
		<!-- vacio -->
	</div>
	<div class="col-md-3">

		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><?php echo $this->Html->link(__('Editar Empleado'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Esta seguro de eliminar al empleado'.$employee['Employee']['name'].'?', $employee['Employee']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Empleados'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Puestos '), array('controller' => 'positions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		  </ul>
		</div>
	</div>	
</div>
<div class="col-md-12">
	<div class="col-md-6 well dr2 thumbnail">
<?php echo $this->Html->image('../files/employee/foto/'.$employee['Employee']['foto_dir'].'/'.'thumb_'.$employee['Employee']['foto'],array(
			'class'=>'dr2'
			)
		); ?>&nbsp;
		<br>
		<br><br>
		ID: <strong>	<?php echo h($employee['Employee']['id']); ?> </strong> <br>
		Nombre: <strong> <?php echo h($employee['Employee']['name']); ?> </strong>	<br>
		Direccion: <strong><?php echo h($employee['Employee']['addres']); ?></strong> <br>
		Teléfono: <strong><?php echo h($employee['Employee']['telephone']); ?> </strong> <br>			
		Panteón: <strong><?php echo $this->Html->link($employee['Cementery']['name'], array('controller' => 'cementeries', 'action' => 'view', $employee['Cementery']['id'])); ?></strong>	<br>	
		Puesto: <strong> <?php echo $this->Html->link($employee['Position']['name'], array('controller' => 'positions', 'action' => 'view', $employee['Position']['id'])); ?>	</strong>	<br>
		Creado:<strong> <?php echo h($employee['Employee']['created']); ?>	</strong>	<br>
		Modificado:<strong> <?php echo h($employee['Employee']['modified']); ?>	</strong>	<br>
	</div>
	
</div>
