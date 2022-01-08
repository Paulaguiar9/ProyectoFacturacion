<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @livewireStyles
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />

    <title>
        Tienda
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('bower_components/EasyAutocomplete/dist/easy-autocomplete.min.css')}}">
    <!-- Font Awesome Icons -->

    <script src="./assets/js/jquery-3.5.1.js"></script>
    <script src="./assets/js/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
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
                        , "next": "Siguiente"
                        , "previous": "Anterior"
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

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#" target="_blank">

                <span class="ms-1 font-weight-bold text-white">Alexa Cosmectic</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <nav class="sidebar-nav">
            @include('layouts.menu')

        </nav>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    </ol>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>

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
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>



                </div>
            </div>
        </nav>

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">

                @yield('content')

            </div>



        </div>
    </main>

    <!--   Core JS Files   -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


    <script src="./assets/js/core/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="./assets/js/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>

    <script src="{{asset('ini.js')}}"></script>
    <script src="{{asset('bower_components/riot/riot.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/riot@2.6.1/riot+compiler.min.js"></script>
    <script src="./bower_components/EasyAutocomplete//dist/jquery.easy-autocomplete.min.js"></script>

    @yield('bottom')

    <script>
        function baseUrl(url) {
            return '{{url('')}}/' + url;
        }

    </script>

    @yield('js')
    @livewireScripts
</body>

</html>
