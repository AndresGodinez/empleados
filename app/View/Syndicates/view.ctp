<div class="syndicates view">
<h2><?php echo __('Syndicate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['representante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($syndicate['Syndicate']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Syndicate'), array('action' => 'edit', $syndicate['Syndicate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Syndicate'), array('action' => 'delete', $syndicate['Syndicate']['id']), array(), __('Are you sure you want to delete # %s?', $syndicate['Syndicate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Syndicates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Syndicate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($syndicate['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Numero Cobro'); ?></th>
		<th><?php echo __('Apoyo'); ?></th>
		<th><?php echo __('Syndicate Id'); ?></th>
		<th><?php echo __('Addres'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Foto Dir'); ?></th>
		<th><?php echo __('Ine Frontal'); ?></th>
		<th><?php echo __('Ine Frontal Dir'); ?></th>
		<th><?php echo __('Ine Trasera'); ?></th>
		<th><?php echo __('Ine Trasera Dir'); ?></th>
		<th><?php echo __('Dom'); ?></th>
		<th><?php echo __('Dom Dir'); ?></th>
		<th><?php echo __('Cementery Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($syndicate['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td><?php echo $employee['numero_cobro']; ?></td>
			<td><?php echo $employee['apoyo']; ?></td>
			<td><?php echo $employee['syndicate_id']; ?></td>
			<td><?php echo $employee['addres']; ?></td>
			<td><?php echo $employee['telephone']; ?></td>
			<td><?php echo $employee['foto']; ?></td>
			<td><?php echo $employee['foto_dir']; ?></td>
			<td><?php echo $employee['ine_frontal']; ?></td>
			<td><?php echo $employee['ine_frontal_dir']; ?></td>
			<td><?php echo $employee['ine_trasera']; ?></td>
			<td><?php echo $employee['ine_trasera_dir']; ?></td>
			<td><?php echo $employee['dom']; ?></td>
			<td><?php echo $employee['dom_dir']; ?></td>
			<td><?php echo $employee['cementery_id']; ?></td>
			<td><?php echo $employee['position_id']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), array(), __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
