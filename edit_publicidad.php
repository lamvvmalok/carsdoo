<?php include("includes/prehtml.php");?>
<head>
<?php include('includes/tags.php') ?>
<?= plugin::validation() ?>
<?= plugin::ckeditor() ?>
<script type="text/javascript">
mensaje = '<?= nvl($mensaje) ?>';
var identificador = '';

$(document).ready(function(){   
  $("#formads").validationEngine({  
    promptPosition: "topRight"
  });

  if(mensaje != ''){
    $('.alerts-inf').show();
    $('.alerts-inf .txt').html(mensaje);
    setInterval(function(){ $('.alerts-inf').hide(); }, 5000);
  }

  if(mensaje == "Banner Guardado") {
    window.location = "publicidad-lista.htm";
  }
});
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
      $menuHijoActivo = "Agregar Banner";
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
                  <div class="panel-actions">
                  </div><!-- /panel-actions -->
                  <h3 class="panel-title"><strong><i class="icon ion-ios7-photos-outline margen-derecho"></i> <?= $tarea ?> Banner</strong></h3>
                </div><!-- panel-heading -->
                <div class="panel-body">

                  <form action="" method="post" id="formads" name="formads" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<? pv($reg['id_publicidad']) ?>" />
                    <div class="form-group margen-ambos">
                      <label for="titulo"><strong>Titulo</strong></label>
                      <input name="dat[titulo]" type="text" class="form-control form-ion validate[required] input-class roundI" id="titulo"  value="<?= pv($reg['titulo']) ?>" />
                    </div><!-- /form-group -->
                    <div class="form-group margen-ambos">
                      <label for="titulo"><strong>Vinculo</strong></label>
                      <input name="dat[vinculo]" type="text" class="form-control form-ion validate[required,custom[url]] input-class roundI" id="vinculo"  value="<?= nvl($reg['vinculo'], 'http://' ) ?>" />
                    </div><!-- /form-group -->
                    <div class="form-group margen-ambos">
                      <label for="archivo"><strong>Seleccione una imagen</strong></label>
                      (Ancho máximo de 184px)
                      <div class="Files-list sin-borde">
                        <input name="archivo" id="archivo" type="file" class="inputs margen-izquierdo validate[<?= (nvl($reg['imagen']) != "") ? 'optional' : 'required' ?>,custom[onlyImg]]" />
                      </div>

                      <?php if(nvl($reg['imagen']) != ""): ?>
                      <div class="Files-list sin-borde" id="image">
                        <img src="<?= URLFILES."publicidad/"."s".$reg['imagen'] ?>" class="margen-izquierdo con-borde" />
                      </div>
                      <?php endif; ?>

                    </div><!-- /form-group -->
                    <div class="form-group margen-ambos margen-superior">
                      <div class="pull-right margen-superior">
                        <button type="submit" name="Acpetar_x" class="btn btn-success btn-extend be-left" value="Guardar">
                          Guardar
                          <i class="icon ion-checkmark-round"></i>
                        </button>
                        <a href="publicidad-lista.htm" class="btn btn-danger btn-extend be-left" value="Cancelar">
                          Cancelar
                          <i class="icon ion-close-round"></i>
                        </a>
                      </div>
                    </div><!-- /form-group -->
                  </form>

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
