
<div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-primary"  href="{{route('home')}}" >
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Inicio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  "    href="{{route('clientes')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white "    href="{{route('categorias')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">category</i>
          </div>
          <span class="nav-link-text ms-1">Categorias</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link text-white "    href="{{route('productos')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
          </div>
          <span class="nav-link-text ms-1">Productos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white "   href="{{route('ventas')}}" >
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <span class="nav-link-text ms-1">Facturación</span>
        </a>
      </li>
   
      @if(Auth::user()->perfil=="Administrador")
       <li class="nav-item">
        <a class="nav-link text-white "  href="{{route('usuarios')}}" >
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Usuarios</span>
        </a>
      </li>
      @endif
    
      
    </ul>
  </div>