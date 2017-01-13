<div class="syndicates index">
	<h2><?php echo __('Syndicates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('representante'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($syndicates as $syndicate): ?>
	<tr>
		<td><?php echo h($syndicate['Syndicate']['id']); ?>&nbsp;</td>
		<td><?php echo h($syndicate['Syndicate']['name']); ?>&nbsp;</td>
		<td><?php echo h($syndicate['Syndicate']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($syndicate['Syndicate']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($syndicate['Syndicate']['representante']); ?>&nbsp;</td>
		<td><?php echo h($syndicate['Syndicate']['created']); ?>&nbsp;</td>
		<td><?php echo h($syndicate['Syndicate']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $syndicate['Syndicate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $syndicate['Syndicate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $syndicate['Syndicate']['id']), array(), __('Are you sure you want to delete # %s?', $syndicate['Syndicate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Syndicate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
