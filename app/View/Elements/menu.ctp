  <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">SEmpleados</a> -->
          <?php echo $this->Html->link('Sistema Empleados', array('controller'=>'pages','action'=>'index'),array('class'=>'navbar-brand')) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secretaría <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <?php echo $this->Html->link('Lista Secretaría', array('controller'=>'cementeries', 'action'=>'index')); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Agregar Secretaría',array('controller'=>'cementeries','action'=>'add')); ?>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <?php echo $this->Html->link('Lista Empleados', array('controller'=>'employees', 'action'=>'index')); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Agregar Empleado',array('controller'=>'employees','action'=>'add')); ?>
                  </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Puestos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <?php echo $this->Html->link('Lista Puestos', array('controller'=>'positions', 'action'=>'index')); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Agregar Puesto',array('controller'=>'positions','action'=>'add')); ?>
                  </li>
              </ul>
            </li>
            <li><a href="#about">Acerca de ..</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
              <?php echo $this->Form->create('Employee', array(
                'class'=>'navbar-form navbar-left',
                'type'=>'GET',
                'url'=>array(
                  'controller'=>'employees', 
                  'action'=>'search'
                  )
              )
            ); ?>
            <div class="form-group">
              <?php echo $this->Form->input('search', array(
                'label'=>false,
                'div'=>false,
                'id'=>'s',
                'class'=>'form-control s',
                'autocomplet'=>'off',
                'placeholder'=>'Buscar Empleado...'
                )); 
              ?>
            </div>
            <?php echo $this->Form->button('Buscar', array(
              'div'=>false,
              'class'=>'btn btn-primary'
            )); ?>
            <?php echo $this->Form->end(); ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>