<?php echo $this->Form->create('Employee', array(
		'type'=>'file',
		'novalidate'=>'novalidate'
	)
); 
?>
<div class="page-header">
	<h2>Nuevo Empleado</h2>
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
				<li><?php echo $this->Html->link(__('Lista Empleados'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('Lista Puestos'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
			  </ul>
			</div>
		</div>
</div>	


<div class="col-md-12">
	<div class="col-md-6">
		<?php
		echo $this->Form->input('name', 
			array(
				'label'=>'Nombre',
				'class'=>'form-control',
				'placeholder'=>'Nombre'
				)
			);
		echo $this->Form->input('numero_cobro',
			array(
				'label'=>'Número de Cobro',
				'class'=>'form-control',
				'placeholder'=>'Número de Cobro'

				)
			);
		echo $this->Form->input('addres',
			array(
				'label'=>'Dirección',
				'class'=>'form-control',
				'rows'=>3,
				'placeholder'=>'Dirección'
				)
			);
		echo $this->Form->input('telephone',
			array(
				'label'=>'Teléfono',
				'class'=>'form-control',
				'placeholder'=>'Teléfono'
				)
			);
			?>
			<div class="checkbox"  style="left: 20px;">
			<?php

		echo $this->Form->input('apoyo',
			array(
				'label'=>'Apoyo',
				'class'=>'chek-box',
				)
			);
			?>
			</div>
			<?php
		echo $this->Form->input('foto',
			array(
				'label'=>'Foto',
				'type'=>'file',
				'id'=>'foto',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'
				)
			);
		echo $this->Form->input('foto_dir',
			array(
				'type'=>'hidden'
				)
			);	

			//campos foto
			//nuevos campos	
		echo $this->Form->input('ine_frontal',
			array(
				'label'=>'Ine Frontal',
				'type'=>'file',
				'id'=>'ine_frontal',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'
				)
			);
		echo $this->Form->input('ine_frontal_dir',
			array(
				'type'=>'hidden'
				)
			);//fin ine frontal
		echo $this->Form->input('ine_trasera',
			array(
				'label'=>'Ine Trasera',
				'type'=>'file',
				'id'=>'ine_trasera',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'
				)
			);
		echo $this->Form->input('ine_trasera_dir',
			array(
				'type'=>'hidden'
				)
			);		
			//FinIne Trasera
		echo $this->Form->input('dom',
			array(
				'label'=>'Domicilio',
				'type'=>'file',
				'id'=>'dom',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'
				)
			);
		echo $this->Form->input('dom_dir',
			array(
				'type'=>'hidden'
				)
			); 
		// fin campo foto de domicilio
		//endnuevos_campos
		echo $this->Form->input('cementery_id',
			array(
				'label'=>'Panteón',
				'class'=>'form-control'
				)
			);
		echo $this->Form->input('position_id',
			array(
				'label'=>'Puesto',
				'class'=>'form-control'
				)
			);
		?>
<br>
		<?php echo $this->Form->end(
			array(
				'label'=>'Alta Empleado',
				'class'=>'btn btn-info'
				)
			); 
		?>

	</div>
	<div class="col-md-6">
		<!-- vacio -->
	</div>
</div>
	