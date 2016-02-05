<?php 
$this->Paginator->options=array(
	'update'=>'#contenedor-puestos',
	'before'=>$this->Js->get('#procesando')->effect('fadeIn', array('buffer'=>false)),
	'complete'=>$this->Js->get('#procesando')->effect('fadeOut', array('buffer'=>false))
	);
 ?>
<div id="contenedor-puestos">
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
		<h2>Lista Puestos </h2>
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
			    <li><?php echo $this->Html->link(__('Nuevo Puesto'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			  </ul>
			</div>
		</div>
		<div class="col-md-1">
			<!-- vacio -->
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<table class='table table-striped'>
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($positions as $position): ?>
			<tr>
				<td><?php echo h($position['Position']['id']); ?>&nbsp;</td>
				<td><?php echo h($position['Position']['name']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Detalles '), array('action' => 'view', $position['Position']['id'])); ?>
					<?php echo $this->Html->link(__('Editar '), array('action' => 'edit', $position['Position']['id'])); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $position['Position']['id']), array(), __('Esta segguro de elimnar '.$position['Position']['name'].'?', $position['Position']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		
		</div>
		<div class="col-md-6">
			<!-- vacio -->
		</div>
		<div class="col-md-12">
			<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} totales, comenzando en el registro {:start}, finalizando en {:end}')
		));
		?>	</p>
		<ul class="pagination">
				<li> <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
				<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
				<li> <?php echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
			</div>
		</div>
	</div>
		<?php echo $this->Js->writeBuffer(); ?>

</div>