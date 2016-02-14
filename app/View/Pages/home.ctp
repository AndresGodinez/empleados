<?php $this->Html->script('holder.min'); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <?php echo $this->Html->image('/img/imgHome/1.jpg', array('alt'=>'Panteon_Municipal')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Secreatría de Servicios Públicos.</h1>
              <p>Nos ubicamos en el interior del mercado San Juan 2, mejor conocido como "Mercado de los laureles", en la seunda planta, en la secretaría de Servicios públicos.
              </p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ingreso Usuarios</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php echo $this->Html->image('/img/imgHome/2.jpg', array(
            'alt'=>'Panteon_Municipal', 
            'id'=>'img-carousel',
            'height'=>'100%'
            )); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Panteón Jardín</h1>
              <p>Fundado en el año de 1951, concentra gran historía del estado de Chiapas, encontrando tumbas de celebridades importantes, fuerzas especiales alchon 121, prof. San sebastian </p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php echo $this->Html->image('/img/imgHome/3.jpg', array('alt'=>'Panteon_Jardín')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Panteón Jardín.</h1>
              <p>Fundado en 1951 cuenta con gran historía, encontrandose lapidas de diversas arquitecturas.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing col-md-12">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <?php echo $this->Html->image('/img/imgHome/manos.jpg', 
            array(
                'alt'=>'Perpetuidades', 
                'whidth'=>'140', 
                'height'=>'140',
                'class'=>'img-circle'
                )
              ); ?>
          <h2>Servicios</h2>
            <ul class="list-group">
              <li class="list-group-item">Perpetuidades</li>
              <li class="list-group-item">inhumacion</li>
              <li class="list-group-item">Exhumación</li>
              <li class="list-group-item">Traspasos</li>
              <li class="list-group-item">Fosa</li>
            </ul>
            <br>
          <p><a class="btn btn-default" href="#" role="button">Más Información &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php echo $this->Html->image('/img/imgHome/panteon-frances.jpg', 
            array(
                'alt'=>'Nuestros_Panteones', 
                'whidth'=>'140', 
                'height'=>'140',
                'class'=>'img-circle'
                )
              ); ?>

          <h2>Historia de Nuestros Panteones</h2>
          <p class='justified'>Los panteones de nuestra ciudad cuentan con varias historias importantes, se encuentran personajes ilustres dentro de las instalciones, uno de los principales personajes, el el Prof. Teodomiro Palacios quien donó las instalaciones donde actualmente se encuentra ubicado el palacio municipal, Sr. Sebastian Escobar quien donó el terreno donde actulmente se encuentra el mercado de mismo nombre</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <?php echo $this->Html->image('/img/imgHome/panteon-frances.jpg', 
            array(
                'alt'=>'Nuestros_Panteones', 
                'whidth'=>'140', 
                'height'=>'140',
                'class'=>'img-circle'
                )
              ); ?>
          <h2>Heading</h2>
          <p>El servicio de inhumación, tendrá que ser realiado en las proximas 48 horas, será realizado por alguna funeraria, en casos exepcionales serán inhumados en fechas posteriores a las marcadas, esas indicaciones serán acatadas por el ministerio público en caso de requerir de forma precencial el cadáver. </p>
          <p><a class="btn btn-default" href="#" role="button">Ver más detalles.</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Panteón Jardín<span class="text-muted">Fundado en 1958.</span></h2>
          <p class="lead">Este panteón cuenta con 18 hectareas de terreno, con mas de 29 000 inhumaciones registradas, con perpetuidades actuallizadas, y con un 30% de esa cantidad de inhumaciones sin registros.</p>
        </div>
        <div class="col-md-5">
          <?php echo $this->Html->image('/img/imgHome/panteon-frances.jpg', array(
            'alt'=>'panteon_jardin',
            'class'=>'squareImage'
          )) ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Panteón Municipal <span class="text-muted">fundado en 1953.</span></h2>
          <p class="lead">Fundado en 1953, fue el primer panteón fundado en el municipio constitucional de Tapachula Chiapas, se cuenta que se tealizaban inhumaciones antes de que este predio fuera considerado panteón de manera oficial.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <?php echo $this->Html->image('/img/imgHome/manos.jpg',
          array(
              'class'=>'squareImage',
              'alt'=>'PanteónMunicipal'
          ));  ?>
        </div>
      </div>

      <hr class="featurette-divider">

      
</div>
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Volver arriba</a></p>
        <p>&copy; 2016 Andrés Godínez Company, Inc. &middot; <a href="aressama.blogspot-mx">Contacto</a> &middot; </p>
      </footer>

    </div>