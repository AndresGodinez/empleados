<div class="page-header">
	<h1>Panteones</h1>
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
				<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('Lista Empleados'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'employees', 'action' => 'add')); ?> </li>		  
			</ul>
		</div>
	</div>
</div>


<div class="col-md-12">
	<div class="col-md-6">
		<table class ="table table-striped">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($cementeries as $cementery): ?>
		<tr>
			<td><?php echo h($cementery['Cementery']['id']); ?>&nbsp;</td>
			<td><?php echo h($cementery['Cementery']['name']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cementery['Cementery']['id'])); ?>
				<?php echo $this->Html->link(__('Actualizar'), array('action' => 'edit', $cementery['Cementery']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $cementery['Cementery']['id']), array(), __('Esta seguro de eliminnar el panteón '.$cementery['Cementery']['name'].'?', $cementery['Cementery']['id'])); ?>
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
		'format' => __('Pagína {:page} de {:pages}, mostrando {:current} registros de {:count} totales, Comenzando en {:start}, terminando en {:end}')
		));
		?>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__(' Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>	