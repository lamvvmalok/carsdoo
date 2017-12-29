<nav class="side-nav">
  <ul>
    <li class="side-nav-item">
      <a href="login-inicio.htm">
        <i class="nav-item-icon icon ion-ios7-bookmarks"></i>
        Escritorio
      </a>
    </li>

    <li class="side-nav-item <?php if($menuActivo == 'Vehículos') echo 'active' ?>">
      <a href="#vehiculos">
        <i class="nav-item-caret"></i>
        <i class="nav-item-icon icon ion-speedometer"></i>
        Vehículos
      </a>
      <ul id="vehiculos" class="side-nav-child <?php if($menuActivo == 'Vehículos') echo 'open' ?>">
        <li class="side-nav-item-heading">
          <a href="#" class="side-nav-back">
            <i class="nav-item-caret"></i>
            Vehículos
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Mis Vehículos') echo 'active' ?>">
          <a href="inmueble-lista.htm">
            <i class="nav-item-icon icon ion-navicon-round"></i>
            Mis Vehículos
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Nuevo Vehículo') echo 'active' ?>">
          <a href="inmueble-editar.htm" class="importante">
            <i class="nav-item-icon icon ion-plus-round"></i>
            Agregar Nuevo Vehículo
          </a>
        </li>
      </ul>
    </li>

    <li class="side-nav-item <?php if($menuActivo == 'Gestor de Clientes') echo 'active' ?>">
      <a href="#gestor-clientes">
        <i class="nav-item-caret"></i>
        <i class="nav-item-icon icon ion-ios7-people-outline"></i>
        Gestor de Clientes
      </a>
      <ul id="gestor-clientes" class="side-nav-child <?php if($menuActivo == 'Gestor de Clientes') echo 'open' ?>">
        <li class="side-nav-item-heading">
          <a href="#" class="side-nav-back">
            <i class="nav-item-caret"></i>
            Gestor de Clientes
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Directorio de Clientes') echo 'active' ?>">
          <a href="cliente-lista.htm">
            <i class="nav-item-icon icon ion-navicon-round"></i>
            Directorio de Clientes
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Cliente') echo 'active' ?>">
          <a href="cliente-editar.htm">
            <i class="nav-item-icon icon ion-plus-round"></i>
            Agregar Cliente
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Gestiones a Clientes') echo 'active' ?>">
          <a href="crm-lista.htm">
            <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
            Gestiones a Clientes
          </a>
        </li>
      </ul>
    </li>

    <? if($_SESSION['id_tipo_usuario'] == 4 || $_SESSION['id_tipo_usuario'] == 2): ?>
      <li class="side-nav-item <?php if($menuActivo == 'Asesores') echo 'active' ?>">
        <a href="#asesores">
          <i class="nav-item-caret"></i>
          <i class="nav-item-icon icon ion-person-stalker"></i>
          Asesores
        </a>
        <ul id="asesores" class="side-nav-child <?php if($menuActivo == 'Asesores') echo 'open' ?>">
          <li class="side-nav-item-heading">
            <a href="#" class="side-nav-back">
              <i class="nav-item-caret"></i>
              Asesores
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Asesores') echo 'active' ?>">
            <a href="usuario-listar.htm">
              <i class="nav-item-icon icon ion-navicon-round"></i>
              Lista de Asesores
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Asesor') echo 'active' ?>">
            <a href="usuario-editar.htm">
              <i class="nav-item-icon icon ion-plus-round"></i>
              Agregar Asesor
            </a>
          </li>
        </ul>
      </li>

      <?php if($_SESSION['id_tipo_usuario'] == 1): ?>
      <li class="side-nav-item <?php if($menuActivo == 'Proyectos Construcción') echo 'active' ?>">
        <a href="#proyectos">
          <i class="nav-item-caret"></i>
          <i class="nav-item-icon icon ion-social-rss-outline"></i>
          Proyectos Construcción
        </a>
        <ul id="proyectos" class="side-nav-child <?php if($menuActivo == 'Proyectos Construcción') echo 'open' ?>">
          <li class="side-nav-item-heading">
            <a href="#" class="side-nav-back">
              <i class="nav-item-caret"></i>
              Proyectos Construcción
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Proyectos') echo 'active' ?>">
            <a href="proyecto-lista.htm">
              <i class="nav-item-icon icon ion-navicon-round"></i>
              Lista de Proyectos
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Proyecto') echo 'active' ?>">
            <a href="proyecto-editar.htm">
              <i class="nav-item-icon icon ion-plus-round"></i>
              Agregar Proyecto
            </a>
          </li>
        </ul>
      </li>
      <?php endif; ?>

      <li class="side-nav-item <?php if($menuAbueloActivo == 'Sitio Web') echo 'active' ?>">
        <a href="#sitio-web">
          <i class="nav-item-caret"></i>
          <i class="nav-item-icon icon ion-earth"></i>
          Sitio Web
        </a>
        <ul id="sitio-web" class="side-nav-child <?php if($menuAbueloActivo == 'Sitio Web') echo 'open' ?>">
          <li class="side-nav-item-heading">
            <a href="#" class="side-nav-back">
              <i class="nav-item-caret"></i>
              Sitio Web
            </a>
          </li>
          <li class="side-nav-item <?php if($menuActivo == 'Noticias') echo 'active' ?>">
            <a href="#noticias">
              <i class="nav-item-caret"></i>
              <i class="nav-item-icon icon ion-ios7-browsers-outline"></i>
              Noticias
            </a>
            <ul id="noticias" class="side-nav-child <?php if($menuActivo == 'Noticias') echo 'open' ?>">
              <li class="side-nav-item-heading">
                <a href="#" class="side-nav-back">
                  <i class="nav-item-caret"></i>
                  Noticias
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Noticias') echo 'active' ?>">
                <a href="novedad-lista.htm">
                  <i class="nav-item-icon icon ion-navicon-round"></i>
                  Lista de Noticias
                </a>
              </li>
              <li class="side-nav-item if($menuHijoActivo == 'Agregar Noticia') echo 'active' ?>">
                <a href="novedad-editar.htm">
                  <i class="nav-item-icon icon ion-plus-round"></i>
                  Agregar Noticia
                </a>
              </li>
            </ul>
          </li>

          <li class="side-nav-item <?php if($menuActivo == 'Servicios') echo 'active' ?>">
            <a href="#servicios">
              <i class="nav-item-caret"></i>
              <i class="nav-item-icon icon ion-settings"></i>
              Servicios
            </a>
            <ul id="servicios" class="side-nav-child <?php if($menuActivo == 'Servicios') echo 'open' ?>">
              <li class="side-nav-item-heading">
                <a href="#" class="side-nav-back">
                  <i class="nav-item-caret"></i>
                  Servicios
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Servicios') echo 'active' ?>">
                <a href="servicio-lista.htm">
                  <i class="nav-item-icon icon ion-navicon-round"></i>
                  Lista de Servicios
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Servicio') echo 'active' ?>">
                <a href="servicio-editar.htm">
                  <i class="nav-item-icon icon ion-plus-round"></i>
                  Agregar Servicio
                </a>
              </li>
            </ul>
          </li>

          <li class="side-nav-item <?php if($menuActivo == 'Contenidos') echo 'active' ?>">
            <a href="#contenidos">
              <i class="nav-item-caret"></i>
              <i class="nav-item-icon icon ion-social-buffer-outline"></i>
              Contenidos
            </a>
            <ul id="contenidos" class="side-nav-child <?php if($menuActivo == 'Contenidos') echo 'open' ?>">
              <li class="side-nav-item-heading">
                <a href="#" class="side-nav-back">
                  <i class="nav-item-caret"></i>
                  Contenidos
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Nuestra Empresa') echo 'active' ?>">
                <a href="contenido-editar-id_cat-2.htm">
                  <i class="nav-item-icon icon ion-star"></i>
                  Nuestra Empresa
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Contáctenos') echo 'active' ?>">
                <a href="contenido-editar-id-525.htm">
                  <i class="nav-item-icon icon ion-star"></i>
                  Contáctenos
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Contenidos') echo 'active' ?>">
                <a href="contenido-lista.htm">
                  <i class="nav-item-icon icon ion-navicon-round"></i>
                  Lista de Contenidos
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Contenidos') echo 'active' ?>">
                <a href="contenido-editar.htm">
                  <i class="nav-item-icon icon ion-plus-round"></i>
                  Agregar Contenido
                </a>
              </li>
            </ul>
          </li>

          <li class="side-nav-item <?php if($menuActivo == 'Banners') echo 'active' ?>">
            <a href="#banners">
              <i class="nav-item-caret"></i>
              <i class="nav-item-icon icon ion-bag"></i>
              Banners
            </a>
            <ul id="banners" class="side-nav-child <?php if($menuActivo == 'Banners') echo 'open' ?>">
              <li class="side-nav-item-heading">
                <a href="#" class="side-nav-back">
                  <i class="nav-item-caret"></i>
                  Banners
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Banners') echo 'active' ?>">
                <a href="publicidad-lista.htm">
                  <i class="nav-item-icon icon ion-navicon-round"></i>
                  Lista de Banners
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Banner') echo 'active' ?>">
                <a href="publicidad-editar.htm">
                  <i class="nav-item-icon icon ion-plus-round"></i>
                  Agregar Banner
                </a>
              </li>
            </ul>
          </li>

         <li class="side-nav-item <?php if($menuActivo == 'Banners') echo 'active' ?>">
            <a href="#banners">
              <i class="nav-item-caret"></i>
              <i class="nav-item-icon icon ion-bag"></i>
              Banners Slider
            </a>
            <ul id="banners" class="side-nav-child <?php if($menuActivo == 'Banners Slider') echo 'open' ?>">
              <li class="side-nav-item-heading">
                <a href="#" class="side-nav-back">
                  <i class="nav-item-caret"></i>
                  Banners Slider
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Lista de Banners Slider') echo 'active' ?>">
                <a href="publicidad-lista.htm">
                  <i class="nav-item-icon icon ion-navicon-round"></i>
                  Lista de Banners Slider
                </a>
              </li>
              <li class="side-nav-item <?php if($menuHijoActivo == 'Agregar Banner Slider') echo 'active' ?>">
                <a href="publicidad-editar.htm">
                  <i class="nav-item-icon icon ion-plus-round"></i>
                  Agregar Banner Slider
                </a>
              </li>
            </ul>
          </li>



        </ul>
      </li>

      <li class="side-nav-item <?php if($menuActivo == 'Correo Electrónico') echo 'active' ?>">
        <a href="#correo-electronico">
          <i class="nav-item-caret"></i>
          <i class="nav-item-icon icon ion-ios7-email-outline"></i>
          Correo Electrónico
        </a>
        <ul id="correo-electronico" class="side-nav-child <?php if($menuActivo == 'Correo Electrónico') echo 'open' ?>">
          <li class="side-nav-item-heading">
            <a href="#" class="side-nav-back">
              <i class="nav-item-caret"></i>
              Correo Electrónico
            </a>
          </li>

          <?php if($_SESSION['plan'] == 'plus' || $_SESSION['plan'] == 'pro'): ?>

          <li class="side-nav-item <?php if($menuHijoActivo == 'Lista Correos') echo 'active' ?>">
            <a href="email-lista_correos.htm">
              <i class="nav-item-icon icon ion-navicon-round"></i>
              Lista Correos
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Nuevo Correo') echo 'active' ?>">
            <a href="email-editar.htm" class="newmail">
              <i class="nav-item-icon icon ion-plus-round"></i>
              Nuevo Correo
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Ingresar al Correo') echo 'active' ?>">
            <a href="email-info_correo.htm" class="infocorreos">
              <i class="nav-item-icon icon ion-log-in"></i>
              Ingresar al Correo
            </a>
          </li>

          <?php else: ?>

          <li class="side-nav-item <?php if($menuHijoActivo == 'Lista Correos') echo 'active' ?>">
            <a href="factura-planes.htm" class="planes">
              <i class="nav-item-icon icon ion-navicon-round"></i>
              Lista Correos
            </a>
          </li>
          <li class="side-nav-item <?php if($menuHijoActivo == 'Nuevo Corre') echo 'active' ?>">
            <a href="factura-planes.htm" class="planes">
              <i class="nav-item-icon icon ion-plus-round"></i>
              Nuevo Correo
            </a>
          </li>

          <?php endif; ?>

        </ul>
      </li>
    <?php endif; ?>

    <?php if($_SESSION['id_tipo_usuario'] == 4 || $_SESSION['id_tipo_usuario'] == 2): ?>
    <li class="side-nav-item <?php if($menuActivo == 'Configuración') echo 'active' ?>">
      <a href="#configuracion">
        <i class="nav-item-caret"></i>
        <i class="nav-item-icon icon ion-ios7-gear-outline"></i>
        Configuración
      </a>
      <ul id="configuracion" class="side-nav-child <?php if($menuActivo == 'Configuración') echo 'open' ?>">
        <li class="side-nav-item-heading">
          <a href="#" class="side-nav-back">
            <i class="nav-item-caret"></i>
            Configuración
          </a>
        </li>
        <?php if($_SESSION['id_tipo_usuario'] == 4 || $_SESSION['id_tipo_usuario'] == 2): ?>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Información Empresa') echo 'active' ?>">
          <a href="empresa-editar.htm">
            <i class="nav-item-icon icon ion-information-circled"></i>
            Información Empresa
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Cambiar Dominio') echo 'active' ?>">
          <a href="empresa-cambiar_dominio.htm" class="cdominio">
            <i class="nav-item-icon icon ion-earth"></i>
            Cambiar Dominio
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Cambiar Plantilla Página') echo 'active' ?>">
          <a href="empresa-cambiar_plantilla.htm" class="plantilla">
            <i class="nav-item-icon icon ion-document"></i>
            Cambiar Plantilla Página
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Modificar Vocabulario') echo 'active' ?>">
          <a href="lenguaje-cambiar.htm">
            <i class="nav-item-icon icon ion-flag"></i>
            Modificar Vocabulario
          </a>
        </li>
        <?php endif; ?>
        <?php if($_SESSION['id_tipo_usuario'] == 2): ?>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Crear Nueva Empresa') echo 'active' ?>">
          <a href="empresa-crear.htm">
            <i class="nav-item-icon icon ion-plus-round"></i>
            Crear Nueva Empresa
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Pre Registrados') echo 'active' ?>">
          <a href="empresa-preregistrados.htm">
            <i class="nav-item-icon icon ion-laptop"></i>
            Pre Registrados
          </a>
        </li>
        <?php endif; ?>

        <? if($_SESSION['id_tipo_usuario'] == 4 || $_SESSION['id_tipo_usuario'] == 2): ?>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Gestor de Zonas') echo 'active' ?>">
          <a href="localidad-lista.htm" class="plantilla">
            <i class="nav-item-icon icon ion-settings"></i>
            Gestor de Zonas
          </a>
        </li>
        <?php endif; ?>

      </ul>
    </li>
    <?php endif; ?>

    <li class="side-nav-item">
      <a href="https://dashboard.zopim.com" title="Chat Online" target="_blank">
        <i class="nav-item-icon icon ion-chatbubble"></i>
        Chat
      </a>
    </li>

    <li class="side-nav-item">
      <a href="reporte-estadisticas.htm">
        <i class="nav-item-icon icon ion-connection-bars"></i>
        Estadísticas
      </a>
    </li>

    <li class="side-nav-item <?php if($menuActivo == 'Mi Cuenta') echo 'active' ?>">
      <a href="#mi-cuenta">
        <i class="nav-item-caret"></i>
        <i class="nav-item-icon icon ion-ios7-person-outline"></i>
        Mi Cuenta
      </a>
      <ul id="mi-cuenta" class="side-nav-child <?php if($menuActivo == 'Mi Cuenta') echo 'open' ?>">
        <li class="side-nav-item-heading">
          <a href="#" class="side-nav-back">
            <i class="nav-item-caret"></i>
            Mi Cuenta
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Modificar mi Perfil') echo 'active' ?>">
          <a href="usuario-config.htm">
            <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
            Modificar mi Perfil
          </a>
        </li>
        <li class="side-nav-item <?php if($menuHijoActivo == 'Cambiar Contraseña') echo 'active' ?>">
          <a href="usuario-pass.htm" id="chpass">
            <i class="nav-item-icon icon ion-ios7-compose-outline"></i>
            Cambiar Contraseña
          </a>
        </li>
       
      </ul>
    </li>

  </ul>
</nav>

<div class="copy">©<?= date("Y") ?> carsdoo.com | <a href="http://carsdoo.com/system/vista/skin/carsdoo/assets/images/terminosdeuso.pdf" target="_blank" >Términos de Servicios</a></div>
