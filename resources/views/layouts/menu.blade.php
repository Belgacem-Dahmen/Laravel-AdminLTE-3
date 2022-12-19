<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class=" nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <a href="{{ route('profile') }}" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">
    <i class=" nav-icon fas fa-user"></i>
        <p>Profile</p>
    </a>
    <a href="{{ route('employes') }}" class="nav-link {{ Request::is('employes') ? 'active' : '' }}">
    <i class=" nav-icon fas fa-users"></i>
        <p>Employés</p>
    </a>
    <a href="{{ route('parametres') }}" class="nav-link {{ Request::is('parametres') ? 'active' : '' }}">
        <i class="nav-icon fas fa-wrench"></i>
        <p>Paramétres</p>
        </a>
        <a href="{{ route('demandes') }}" class="nav-link {{ Request::is('demandes') ? 'active' : '' }}">
        <i class="nav-icon fas fa-clipboard-check"></i>
        <p>Demandes </p>
        </a>
</li>
