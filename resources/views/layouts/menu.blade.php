
    
      <li class="active">
        <a href="{{route('home')}}">
        <i class="ft-home"></i>
        <span class="menu-title" data-i18n="">Inicio</span>
        </a>
      </li>
      @if(Auth::user()->perfil=="Administrador")
          <li class=" nav-item">
            <a href="{{route('clientes')}}">
              <i class="ft-user"></i>
              <span class="menu-title" data-i18n="">Clientes</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->perfil=="Administrador")
          <li class=" nav-item">
            <a href="{{route('categorias')}}">
              <i class="ft-layers"></i>
              <span class="menu-title" data-i18n="">Categorias</span>
            </a>
          </li>
      @endif
      @if(Auth::user()->perfil=="Administrador")
          <li class=" nav-item">
            <a href="{{route('productos')}}">
              <i class="ft-box"></i>
              <span class="menu-title" data-i18n="">Productos</span>
            </a>
          </li>
      @endif
          <li class=" nav-item">
            <a href="{{route('ventas')}}">
              <i class="ft-shopping-cart"></i>
              <span class="menu-title" data-i18n="">Facturación</span>
            </a>
          </li>
          <li class=" nav-item">
            <a href="{{route('report-dia')}}">
              <i class="ft-file"></i>
              <span class="menu-title" data-i18n="">Reporte Día</span>
            </a>
          </li>
          <li class=" nav-item">
            <a href="{{route('report-rango')}}">
              <i class="ft-file"></i>
              <span class="menu-title" data-i18n="">Reporte Mensual</span>
            </a>
          </li>
          @if(Auth::user()->perfil=="Administrador")
          <li class=" nav-item">
            <a href="{{route('usuarios')}}">
              <i class="ft-user"></i>
              <span class="menu-title" data-i18n="">Usuarios</span>
            </a>
          </li>
          @endif
