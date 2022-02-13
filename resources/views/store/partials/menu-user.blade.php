@if(Auth::check())
    @if(Auth::user()->type == 'admin')
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}">Administración</a></li>
    @endif
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            {{-- <li><a  href="{{ route('admin.home') }}">Administración</a></li> --}}
        <li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
        </ul>
    </li>
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
        </ul>
    </li>
@endif






    

