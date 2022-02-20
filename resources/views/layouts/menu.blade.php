

      <li class="nav-item">
        <a class="nav-link text-black active bg-gradient-primary"  href="{{route('home')}}" >
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Inicio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black  "    href="{{route('clientes')}}">
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black "    href="{{route('categorias')}}">
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">category</i>
          </div>
          <span class="nav-link-text ms-1">Categorias</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link text-black "    href="{{route('productos')}}">
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
          </div>
          <span class="nav-link-text ms-1">Productos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black "   href="{{route('ventas')}}" >
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <span class="nav-link-text ms-1">Facturación</span>
        </a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link text-black "   href="{{route('report-dia')}}" >
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">RD</i>
          </div>
          <span class="nav-link-text ms-1">Reporte Dia</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-black "   href="{{route('report-rango')}}" >
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">RM</i>
          </div>
          <span class="nav-link-text ms-1">Reporte Mes</span>
        </a>
      </li>
      @if(Auth::user()->perfil=="Administrador")
       <li class="nav-item">
        <a class="nav-link text-black "  href="{{route('usuarios')}}" >
          <div class="text-black text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Usuarios</span>
        </a>
      </li>
      @endif
    
