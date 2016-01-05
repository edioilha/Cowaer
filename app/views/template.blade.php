<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <title>@yield('title')</title>
    <meta name="description" content="Sistem de Gestão e Controle de rebanho bovino">
    <meta name="author" content="TechMob">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="http://code.jquery.com/jquery.js"></script>-->
    <script src="{{url('plugins/jquery/jquery-2.1.0.min.js')}}"></script>
    <script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All functions for this theme + document.ready processing -->
    <script>
    $(document).ready(function(){

      $(document).tooltip({selector:'*[data-toggle="tooltip"]'});
    });
    </script> 
    <script src="{{url('js/devoops.js')}}"></script>
  </head>
<body>
<!--Start Header-->
<div id="screensaver">
  <canvas id="canvas"></canvas>
  <i class="fa fa-lock" id="screen_unlock"></i>
</div>
<header class="navbar">
  <div class="container-fluid expanded-panel">
    <div class="row">
      <!-- Divisão da Logomarca -->
      <div id="logo" class="col-xs-12 col-sm-2">
        <img class="pull-left" src="{{url('/img/logo.png')}}" alt="Logo DuCheff" width="40">
        <a href="{{url('/')}}">DuCheff</a>
      </div>
      <div id="top-panel" class="col-xs-12 col-sm-10">
        <div class="row">
          <!-- Caixa de pesquisa a direita Nav-Bar -->
          <div class="col-xs-8 col-sm-4">
            <a href="#" class="show-sidebar">
              <i class="fa fa-bars"></i>
            </a>
            <div id="search">
              <input type="text" placeholder="search"/>
              <i class="fa fa-search"></i>
            </div>
          </div>
              <!-- Fim da caixa de pesquisa -->
          <div class="col-xs-4 col-sm-8 top-panel-right">
            <ul class="nav navbar-nav pull-right panel-menu">
              <li class="hidden-xs">
                <a href="index.html" class="modal-link">
                  <i class="fa fa-bell"></i>
                  <span class="badge">7</span>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                  <div class="avatar">
                    <img src="{{url('img/avatar.png')}}" class="img-rounded" alt="avatar" />
                  </div>
                  <i class="fa fa-angle-down pull-right"></i>
                  <div class="user-mini pull-right">
                    <span class="welcome">{{trans('geral.hello')}},</span>
                    <span>{{Session::get('nome_user')}}</span>
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{url('panel-control/perfil')}}">
                      <i class="fa fa-user"></i>
                      <span>{{trans('geral.menu_perfil')}}</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-bell"></i>
                      <span>{{trans('geral.menu_notif')}}</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('panel-control/logout')}}">
                      <i class="fa fa-power-off"></i>
                      <span>{{trans('geral.menu_sair')}}</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
  <div class="row">
    <div id="sidebar-left" class="col-xs-2 col-sm-2">
      <ul class="nav main-menu">
        <li>
          <a href="{{url('panel-control/dashboard')}}" class="{{((Session::get('flag') == 1) ? 'active':'')}}">
            <i class="fa fa-dashboard"></i>
            <span class="hidden-xs">{{trans('geral.menu_side_dashboard')}}</span>
          </a>
        </li>
        @if(Session::get('nivel_user') == 1)
        <li class="dropdown">
          <a href="{{url('panel-control/usuario')}}" class="{{((Session::get('flag') == 2) ? 'active':'')}}">
            <i class="fa fa-user"></i>
            <span class="hidden-xs">{{trans('geral.menu_side_usuario')}}</span>
          </a>
        </li>
        @endif
        <li class="dropdown">
          <a href="#" class="dropdown-toggle {{((Session::get('flag') > 2 && (Session::get('flag') <= 7)) ? 'active':'')}}">
            <i class="fa fa-cutlery"></i>
             <span class="hidden-xs">{{trans('geral.menu_side_cardapio')}}</span>
             <i class="fa fa-caret-down pull-right"></i>
          </a>
          <ul class="dropdown-menu" style="{{((Session::get('flag') > 2 && (Session::get('flag') <= 7)) ? 'display:block;':'display:none;')}}">
            <li><a  href="{{url('panel-control/bebidas')}}" class="{{((Session::get('flag') == 3) ? 'active':'')}}">{{trans('geral.menu_side_cardapio_bebidas')}} <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a  href="{{url('panel-control/variedades')}}" class="{{((Session::get('flag') == 4) ? 'active':'')}}">{{trans('geral.menu_side_cardapio_variedades')}} <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a  href="{{url('')}}">{{trans('geral.menu_side_cardapio_guarnicoes')}} <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a  href="{{url('')}}">{{trans('geral.menu_side_cardapio_molhos')}} <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a  href="{{url('')}}">{{trans('geral.menu_side_cardapio_tipos')}} <i class="fa fa-angle-right pull-right"></i></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-pencil-square-o"></i>
             <span class="hidden-xs">Forms</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="ajax/forms_elements.html">Elements</a></li>
            <li><a class="ajax-link" href="ajax/forms_layouts.html">Layouts</a></li>
            <li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-desktop"></i>
             <span class="hidden-xs">UI Elements</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="ajax/ui_grid.html">Grid</a></li>
            <li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
            <li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
            <li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
            <li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-list"></i>
             <span class="hidden-xs">Pages</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="ajax/page_login.html">Login</a></li>
            <li><a href="ajax/page_register.html">Register</a></li>
            <li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>
            <li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>
            <li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>
            <li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>
            <li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>
            <li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>
            <li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>
            <li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
            <li><a href="ajax/page_500.html">Error 500</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-map-marker"></i>
            <span class="hidden-xs">Maps</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="ajax/maps.html">OpenStreetMap</a></li>
            <li><a class="ajax-link" href="ajax/map_fullscreen.html">Fullscreen map</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-picture-o"></i>
             <span class="hidden-xs">Gallery</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="ajax-link" href="ajax/gallery_simple.html">Simple Gallery</a></li>
            <li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
          </ul>
        </li>
        <li>
           <a class="ajax-link" href="ajax/typography.html">
             <i class="fa fa-font"></i>
             <span class="hidden-xs">Typography</span>
          </a>
        </li>
         <li>
          <a class="ajax-link" href="ajax/calendar.html">
             <i class="fa fa-calendar"></i>
             <span class="hidden-xs">Calendar</span>
          </a>
         </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">
            <i class="fa fa-picture-o"></i>
             <span class="hidden-xs">Multilevel menu</span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">First level menu</a></li>
            <li><a href="#">First level menu</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">
                <i class="fa fa-plus-square"></i>
                <span class="hidden-xs">Second level menu group</span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Second level menu</a></li>
                <li><a href="#">Second level menu</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle">
                    <i class="fa fa-plus-square"></i>
                    <span class="hidden-xs">Three level menu group</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Three level menu</a></li>
                    <li><a href="#">Three level menu</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle">
                        <i class="fa fa-plus-square"></i>
                        <span class="hidden-xs">Four level menu group</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Four level menu</a></li>
                        <li><a href="#">Four level menu</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle">
                            <i class="fa fa-plus-square"></i>
                            <span class="hidden-xs">Five level menu group</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Five level menu</a></li>
                            <li><a href="#">Five level menu</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle">
                                <i class="fa fa-plus-square"></i>
                                <span class="hidden-xs">Six level menu group</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Six level menu</a></li>
                                <li><a href="#">Six level menu</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#">Three level menu</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!--Start Content-->
    <div id="content" class="col-xs-12 col-sm-10">
      
      <div id="ajax-content">
        @yield('content')
      </div>
    </div>
    <!--End Content-->
  </div>
</div>
<!--End Container-->
<!-- Get Translate File -->
@if(App::getLocale() == 'pt-br')
<script src="{{url('js/locale/pt_br.js')}}"></script>
@endif
</body>
</html>
