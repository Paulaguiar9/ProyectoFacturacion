
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Alexan</title>
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../theme-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/plugins/forms/switch.css">
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/core/colors/palette-switch.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <style>
        h4 { color: #ffffff; }
      </style>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "language": {
                "processing": "Procesando..."
                , "lengthMenu": "Mostrar _MENU_ registros"
                , "zeroRecords": "No se encontraron resultados"
                , "emptyTable": "Ningún dato disponible en esta tabla"
                , "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros"
                , "infoFiltered": "(filtrado de un total de _MAX_ registros)"
                , "search": "Buscar:"
                , "infoThousands": ","
                , "loadingRecords": "Cargando..."
                , "paginate": {
                    "first": "Primero"
                    , "last": "Último"
                    , "next": "->"
                    , "previous": "<-"
                }
                , "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente"
                    , "sortDescending": ": Activar para ordenar la columna de manera descendente"
                }
                , "buttons": {
                    "copy": "Copiar"
                    , "colvis": "Visibilidad"
                    , "collection": "Colección"
                    , "colvisRestore": "Restaurar visibilidad"
                    , "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape."
                    , "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles"
                        , "_": "Copiadas %ds fila al portapapeles"
                    }
                    , "copyTitle": "Copiar al portapapeles"
                    , "csv": "CSV"
                    , "excel": "Excel"
                    , "pageLength": {
                        "-1": "Mostrar todas las filas"
                        , "_": "Mostrar %d filas"
                    }
                    , "pdf": "PDF"
                    , "print": "Imprimir"
                    , "renameState": "Cambiar nombre"
                    , "updateState": "Actualizar"
                }
                , "autoFill": {
                    "cancel": "Cancelar"
                    , "fill": "Rellene todas las celdas con <i>%d<\/i>"
                    , "fillHorizontal": "Rellenar celdas horizontalmente"
                    , "fillVertical": "Rellenar celdas verticalmentemente"
                }
                , "decimal": ","
                , "searchBuilder": {
                    "add": "Añadir condición"
                    , "button": {
                        "0": "Constructor de búsqueda"
                        , "_": "Constructor de búsqueda (%d)"
                    }
                    , "clearAll": "Borrar todo"
                    , "condition": "Condición"
                    , "conditions": {
                        "date": {
                            "after": "Despues"
                            , "before": "Antes"
                            , "between": "Entre"
                            , "empty": "Vacío"
                            , "equals": "Igual a"
                            , "notBetween": "No entre"
                            , "notEmpty": "No Vacio"
                            , "not": "Diferente de"
                        }
                        , "number": {
                            "between": "Entre"
                            , "empty": "Vacio"
                            , "equals": "Igual a"
                            , "gt": "Mayor a"
                            , "gte": "Mayor o igual a"
                            , "lt": "Menor que"
                            , "lte": "Menor o igual que"
                            , "notBetween": "No entre"
                            , "notEmpty": "No vacío"
                            , "not": "Diferente de"
                        }
                        , "string": {
                            "contains": "Contiene"
                            , "empty": "Vacío"
                            , "endsWith": "Termina en"
                            , "equals": "Igual a"
                            , "notEmpty": "No Vacio"
                            , "startsWith": "Empieza con"
                            , "not": "Diferente de"
                            , "notContains": "No Contiene"
                            , "notStarts": "No empieza con"
                            , "notEnds": "No termina con"
                        }
                        , "array": {
                            "not": "Diferente de"
                            , "equals": "Igual"
                            , "empty": "Vacío"
                            , "contains": "Contiene"
                            , "notEmpty": "No Vacío"
                            , "without": "Sin"
                        }
                    }
                    , "data": "Data"
                    , "deleteTitle": "Eliminar regla de filtrado"
                    , "leftTitle": "Criterios anulados"
                    , "logicAnd": "Y"
                    , "logicOr": "O"
                    , "rightTitle": "Criterios de sangría"
                    , "title": {
                        "0": "Constructor de búsqueda"
                        , "_": "Constructor de búsqueda (%d)"
                    }
                    , "value": "Valor"
                }
                , "searchPanes": {
                    "clearMessage": "Borrar todo"
                    , "collapse": {
                        "0": "Paneles de búsqueda"
                        , "_": "Paneles de búsqueda (%d)"
                    }
                    , "count": "{total}"
                    , "countFiltered": "{shown} ({total})"
                    , "emptyPanes": "Sin paneles de búsqueda"
                    , "loadMessage": "Cargando paneles de búsqueda"
                    , "title": "Filtros Activos - %d"
                    , "showMessage": "Mostrar Todo"
                    , "collapseMessage": "Colapsar Todo"
                }
                , "select": {
                    "cells": {
                        "1": "1 celda seleccionada"
                        , "_": "%d celdas seleccionadas"
                    }
                    , "columns": {
                        "1": "1 columna seleccionada"
                        , "_": "%d columnas seleccionadas"
                    }
                    , "rows": {
                        "1": "1 fila seleccionada"
                        , "_": "%d filas seleccionadas"
                    }
                }
                , "thousands": "."
                , "datetime": {
                    "previous": "Anterior"
                    , "next": "Proximo"
                    , "hours": "Horas"
                    , "minutes": "Minutos"
                    , "seconds": "Segundos"
                    , "unknown": "-"
                    , "amPm": [
                        "AM"
                        , "PM"
                    ]
                    , "months": {
                        "0": "Enero"
                        , "1": "Febrero"
                        , "10": "Noviembre"
                        , "11": "Diciembre"
                        , "2": "Marzo"
                        , "3": "Abril"
                        , "4": "Mayo"
                        , "5": "Junio"
                        , "6": "Julio"
                        , "7": "Agosto"
                        , "8": "Septiembre"
                        , "9": "Octubre"
                    }
                    , "weekdays": [
                        "Dom"
                        , "Lun"
                        , "Mar"
                        , "Mie"
                        , "Jue"
                        , "Vie"
                        , "Sab"
                    ]
                }
                , "editor": {
                    "close": "Cerrar"
                    , "create": {
                        "button": "Nuevo"
                        , "title": "Crear Nuevo Registro"
                        , "submit": "Crear"
                    }
                    , "edit": {
                        "button": "Editar"
                        , "title": "Editar Registro"
                        , "submit": "Actualizar"
                    }
                    , "remove": {
                        "button": "Eliminar"
                        , "title": "Eliminar Registro"
                        , "submit": "Eliminar"
                        , "confirm": {
                            "_": "¿Está seguro que desea eliminar %d filas?"
                            , "1": "¿Está seguro que desea eliminar 1 fila?"
                        }
                    }
                    , "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                    }
                    , "multi": {
                        "title": "Múltiples Valores"
                        , "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales."
                        , "restore": "Deshacer Cambios"
                        , "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                    }
                }
                , "info": "Mostrando _START_ a _END_ de _TOTAL_ registros"
                , "stateRestore": {
                    "creationModal": {
                        "button": "Crear"
                        , "name": "Nombre:"
                        , "order": "Clasificación"
                        , "paging": "Paginación"
                        , "search": "Busqueda"
                        , "select": "Seleccionar"
                    }
                    , "emptyError": "El nombre no puede estar vacio"
                    , "removeConfirm": "¿Seguro que quiere eliminar este %s?"
                    , "removeError": "Error al eliminar el registro"
                    , "removeJoiner": "y"
                    , "removeSubmit": "Eliminar"
                    , "renameButton": "Cambiar Nombre"
                    , "renameLabel": "Nuevo nombre para %s"
                }
            }
            , stateSave: true
            , "bDestroy": true
        });
    });

</script>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
                <h4>&nbsp;&nbsp;&nbsp; <i class=" far fa-file-alt" > </i> Sistema Inventario y Facturación  Alexan Cosmetic    </h4>
              
            </ul>
         
            <ul class="nav navbar-nav float-right">
              
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">

                    </div>
                    <div class="profile_info">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de Sesión') }}</a>
                            </li>

                            @else

                            <li class="dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"  aria-expanded="false"  style="color:#ffffff">
                                    {{ Auth::user()->name }} <span class="caret">▼</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }} <i class=" ft-sign-out"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="../../theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt="">
              
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        @include('layouts.menu')
        </ul>
      </div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
       
       
            <div class="content-body"><!-- Chart -->
  
                @yield('content')

        </div>
      </div>
    </div>
  

    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2022  &copy; Copyright <a class="text-bold-800 grey darken-2"  target="_blank"></a></span>
        
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    
    <script src="../../theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="../../theme-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="../../theme-assets/js/scripts/forms/switch.js" type="text/javascript"></script>
    <script src="https://buttons.github.io/buttons.js" async defer></script>
    <!-- BEGIN VENDOR JS-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <!-- BEGIN CHAMELEON  JS-->
    <script src="../../theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="../../theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <script src="../../theme-assets/js/scripts/customizer-lite.js" type="text/javascript"></script>
    <script src="../../theme-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <script src="{{asset('ini.js')}}"></script>
    <script src="{{asset('bower_components/riot/riot.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/riot@2.6.1/riot+compiler.min.js"></script>
    <script src="{{asset('bower_components/EasyAutocomplete//dist/jquery.easy-autocomplete.min.js')}}"></script>

    @yield('bottom')

    <script>
        function baseUrl(url) {
            return '{{url('')}}/' + url;
        }

    </script>

    @yield('js')

  </body>
</html>