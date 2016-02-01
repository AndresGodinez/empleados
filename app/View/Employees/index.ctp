<div class="page-header">
	<h2>Empleados</h2>
</div>
<div class="col-md-12">
	<div class="col-md-10">
		<!-- vacio -->
	</div>
	<div class="col-md-1">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><?php echo $this->Html->link(__('Nuevo Empleado'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Puestos'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		  </ul>
		</div>
	</div>
</div>
<div class="col-md-12">
	&nbsp;
</div>
<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('Panteón'); ?></th>
			<th><?php echo $this->Paginator->sort('Puesto'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['addres']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['telephone']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['Cementery']['name'], array('controller' => 'cementeries', 'action' => 'view', $employee['Cementery']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['Position']['name'], array('controller' => 'positions', 'action' => 'view', $employee['Position']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Esta seguro de eliminar '.$employee['Employee']['name'].'?', $employee['Employee']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="col-md-12">
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} totales, comenzando en el registro {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__(' Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>	
</div>
