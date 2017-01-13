<div class="page-header">
	<h2>Detalles de Puesto</h2>
</div>
<div class="col-md-12">
	<div class="col-md-8">
	<!-- vacio	 -->
	</div>	
	<div class="col-md-3">
		<!-- acciones -->
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li><?php echo $this->Html->link(__('Actualizar Puesto'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Puesto'), array('action' => 'delete', $position['Position']['id']), array(), __('Esta seguro de eiliminar'.$position['Position']['name'].'?', $position['Position']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Puestos'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		  </ul>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-6 well">
		<p>
			ID
			<br>
				<strong><?php echo h($position['Position']['id']); ?></strong>
			<br>	
			Nombre
			<br>
			<strong><?php echo h($position['Position']['name']); ?></strong>
			<br>
			Creado
			<br>
			<strong> <?php echo h($position['Position']['created']) ?></strong>
			<br>
			Modificado
			<br>
			<strong> <?php echo h($position['Position']['modified']) ?></strong>
		</p>
			
		
		
	</div>
</div>

	

<div class="page-header">
	<h2>Empleados Con este cargo</h2>
</div>
<div class="col-md-12">
	<div class="table-responsive">
		<?php if (!empty($position['Employee'])): ?>
	<table class='table table-striped'>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Dirección'); ?></th>
		<th><?php echo __('Teléfono'); ?></th>
		<th><?php echo __('Panteón'); ?></th>
		<th><?php echo __('Puesto'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($position['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td><?php echo $employee['addres']; ?></td>
			<td><?php echo $employee['telephone']; ?></td>
			<td><?php echo $employee['cementery_id']; ?></td>
			<td><?php echo $employee['position_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles '), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Editar '), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar '), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array(), __('Esta seguro de eliminar al empleado '.$employee['name'].'?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	</div>
</div>
	

