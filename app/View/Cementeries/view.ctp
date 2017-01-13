<div class="page-header">
	<h1>Detalle Secretaría</h1>
</div>

<div class="col-md 12">
	<div class="col-md-8">
		<!-- vacio -->
	</div>
	<div class="col-md-4">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><?php echo $this->Html->link(__('Actualizar Secretaría'), array('action' => 'edit', $cementery['Cementery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Secretaría'), array('action' => 'delete', $cementery['Cementery']['id']), array(), __('Esta seguro de eliminar la secretaría '.$cementery['Cementery']['name'].' ?', $cementery['Cementery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Secretarías'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Secretaría'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>	  
			</ul>
		</div>
	</div>
</div>
<div class="col-md-12">
	
<div class="col-md-6 cementeries view">
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cementery['Cementery']['name']); ?>
			&nbsp;
		</dd>
		<dt>
			<?php echo __('Creado'); ?>
		</dt>
		<dd>
			<?php echo h($cementery['Cementery']['created']); ?>
		</dd>
		<dt>
			<?php echo __('Modificado'); ?>
		</dt>
		<dd>
			<?php echo h($cementery['Cementery']['modified']); ?>
		</dd>
	</dl>
</div>
</div>
<div class="col-md-12">
	<div class="col-md-8">
		<div class="related">
			<h3><?php echo __('Empleados de esta Secretaría'); ?></h3>
			<?php if (!empty($cementery['Employee'])): ?>
			<table class="table table-striped">
			<tr>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Dirección'); ?></th>
				<th><?php echo __('Teléfono'); ?></th>
				<th><?php echo __('Secretaría'); ?></th>
				<th><?php echo __('Cargo'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			<?php foreach ($cementery['Employee'] as $employee): ?>
				<tr>
					<td><?php echo $employee['name']; ?></td>
					<td><?php echo $employee['addres']; ?></td>
					<td><?php echo $employee['telephone']; ?></td>
					<td><?php echo $employee['cementery_id']; ?></td>
					<td><?php echo $employee['position_id']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('Detalles '), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
						<?php echo $this->Html->link(__('Editar '), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
						<?php echo $this->Form->postLink(__('Eliminar '), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array(), __('Esta seguro de eliminar el empleado '.$employee['name'].'?', $employee['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php endif; ?>
		</div>
	</div>	
	<div class="col-md-4">
		<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Acciones
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>  
				</ul>
			</div>
	</div>
	
</div>