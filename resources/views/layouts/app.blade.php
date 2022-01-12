<!DOCTYPE html>
<html lang="zxx">
<meta name="csrf-token" content="<?php echo csrf_token() ?>" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Alexan </title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/vendors/font_awesome/css/all.min.css" />
    <script src="https://demo.dashboardpack.com/analytic-html/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/vendors/material_icon/material-icons.css" />
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/css/metisMenu.css">
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/css/style.css" />
    <link rel="stylesheet" href="https://demo.dashboardpack.com/analytic-html/css/colors/default.css" id="colorSkinCSS">

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
<body class="crm_body_bg">



    <!-- main content part here -->

    <!-- sidebar  -->
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="{{route('home')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
            
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            @include('layouts.menu')

        </ul>
    </nav>
    <!--/ sidebar  -->


    <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12  ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                    
                        <div class="sidebar_icon d-lg-none">
                          <i class="ti-menu"></i>
                        </div>                        
                        <h4>&nbsp;&nbsp;&nbsp; <i class=" far fa-file-alt" > </i> Sistema Inventario y Facturación  Alexan Cosmetic   </h4>

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

                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#797A7A">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Cerrar Sesión') }} <i class=" fas fa-sign-in-alt"></i>
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
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--/ menu  -->
        <div class="main_content_iner">
            <div class="container-fluid p-0 ">
                <div class="row justify-content-center">
           
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">

                            @yield('content')
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer part -->
        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>Mikaela Silva <a href="#"> <i class="ti-heart"></i> </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- scripts  -->
    

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <!-- popper js -->
    <script src="https://demo.dashboardpack.com/analytic-html/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="https://demo.dashboardpack.com/analytic-html/js/bootstrap.min.js"></script>
    <script src="https://demo.dashboardpack.com/analytic-html/js/metisMenu.js"></script>
    <script src="https://demo.dashboardpack.com/analytic-html/js/custom.js"></script>
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
