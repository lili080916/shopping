<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">MyStore</a>
      <a class="navbar-text" href="{{ route('admin.home') }}">
        <i class="fa fa-dashboard"></i> Dashboard
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-end" id="navbarColor03">
        
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}">Categorías</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">Productos</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}">Pedidos</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}">Usuarios</a></li>
          <li class="nav-item dropdown">

            @if(Auth::user())
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="logout" href="{{ route('admin.home') }}">Administración</a></li>
              <li><a class="logout" href="{{ route('logout') }}">Finalizar sesión</a></li>
            </ul>
            @else 
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            
            @endif
        </li>
        </ul>
      </div>
    </div>
  </nav>