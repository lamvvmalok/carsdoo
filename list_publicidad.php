<?php include("includes/prehtml.php"); ?>
<head>
<?php include('includes/tags.php') ?>
<?=  plugin::jqgrid() ?>
<script type="text/javascript" src="<?= URLSRC ?>jqgrid/plugins/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="<?= URLSRC ?>jqgrid/plugins/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?= URLSRC ?>jqgrid/plugins/jquery.ui.mouse.min.js"></script>
<script type="text/javascript" src="<?= URLSRC ?>jqgrid/plugins/jquery.ui.sortable.min.js"></script>
<script type="text/javascript" src="<?= URLVISTA ?>admin/js/list_publicidad.js?<?= strval(rand(1, 1000)) ?>"></script>
<script type="text/javascript" src="<?= URLVISTA ?>admin/js/mensaje.js?<?= strval(rand(1, 1000)) ?>"></script>
<script type="text/javascript">
mensaje = '<?= nvl($mensaje) ?>';
</script> 
</head>

<body>
<section id="wrapper" class="container">
  <aside class="side-left">
    <div class="side-header">
      <?php include('includes/logo.php') ?>
    </div>
    <div class="side-body">
      <?php
      $menuActivo = "Banners";
      $menuHijoActivo = "Lista de Banners";
      $menuAbueloActivo = "Sitio Web";
      include('includes/menu.php');
      ?>
    </div>
  </aside>

  <section id="content" class="content">
    <header class="content-header">
      <?php
      $titulo = "Banners";
      include('includes/header.php');
      ?>
    </header>
    
    <div class="content-spliter">
      <section id="content-main" class="content-main">
        <div class="content-app fixed-header">
          <div class="app-body">
            <div class="alerts-inf alert alert-success alert-icon margen-superior">
              <div class="icon"><i class="icon ion-ios7-checkmark-empty"></i></div>
              <div class="txt" style="font-weight: 600;">espacio para alertas !!</div>
            </div><!-- alert -->
            <div class="magic-layout">
              <div id="panel1" class="panel panel-default magic-element width-full">
                <div class="panel-heading bg-primary text-inverse bordered-none">
                  <div class="row" style="margin-bottom: 0">
                    <div class="col-sm-8">
                      <h3 class="panel-title"><strong><i class="icon ion-ios7-photos-outline margen-derecho"></i> Listado de Banners</strong></h3>
                    </div>
                    <div class="col-sm-4" style="text-align: right">
                      <div class="visible-xs" style="margin-top: 15px"></div>
                        <a href="publicidad-editar.htm" class="btn btn-xs btn-extend btn-default be-left" role="button">
                          <strong>Agregar Banner</strong>
                          <i class="icon ion-plus-round"></i>
                        </a>
                    </div>
                  </div><!-- row -->
                </div><!-- panel-heading -->
                <div class="panel-body">

                  <div class="table-responsive gridArea">
                    <table id="list" class="scroll table"></table> 
                    <div id="pager" class="scroll"></div> 
                  </div>
                  Nota: Puede ordenar los banner arrastrando la fila con el mouse a la posición deseada.

                </div><!-- panel body -->
              </div><!-- panel1 -->
            </div><!-- magic-layout -->
          </div><!-- app body -->
        </div><!-- content-app -->
      </section><!-- content-main -->
    </div><!-- content-spliter -->
  </section><!-- content -->
</section><!-- wrapper -->

<?php include('includes/footer.php') ?>
</body>
</html>
