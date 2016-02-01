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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panteones <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <?php echo $this->Html->link('Lista Panteones', array('controller'=>'cementeries', 'action'=>'index')); ?>
                </li>
                <li>
                  <?php echo $this->Html->link('Agregar Panteón',array('controller'=>'cementeries','action'=>'add')); ?>
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
        </div><!--/.nav-collapse -->
      </div>
    </nav>