
<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-empleado',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>
 <div id="contenedor-empleado">
 <div class="col-md-12">
 			 	<!-- progresanod -->
 	<div class="progress oculto2" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>
	<!-- /progresando -->
 </div>
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
				<th><?php echo $this->Paginator->sort('Foto'); ?></th>
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
			<td><?php echo $this->Html->image('../files/employee/foto/'.$employee['Employee']['foto_dir'].'/'.'thumb_'.$employee['Employee']['foto'],array(
				'class'=>'dr2'
				)
			); ?>&nbsp;</td>
			<td><?php echo h($employee['Employee']['name']); ?>&nbsp;</td>
			<td class="col-md-2 justified"><?php echo h($employee['Employee']['addres']); ?>&nbsp;</td>
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
		?>	
	</p>
		<ul class="pagination">
				<li> <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
				<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
				<li> <?php echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	</div>
	<?php echo $this->Js->writeBuffer(); ?>
</div>