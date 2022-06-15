<aside id="sidebar" class="sidebar">

    @if (session('level') == "Operation Head")
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('data-user') }}">
                <i class="bi bi-person"></i>
                <span>Data User</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('data-unit') }}">
                <i class="bi bi-list-stars"></i>
                <span>Data Reffuler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('data-ceklis') }}">
                <i class="bi bi-file-earmark-pdf"></i>
                <span>Laporan Ceklis Reffuler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('lap-kerusakan') }}">
                <i class="bi bi-file-earmark-pdf"></i>
                <span>Laporan Kerusakan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Sign Out</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

    </ul>
    @endif

    @if (session('level') == "Supervisor")
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('data-user') }}">
                <i class="bi bi-person"></i>
                <span>Data User</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('data-unit') }}">
                <i class="bi bi-list-stars"></i>
                <span>Data Reffuler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('data-ceklis') }}">
                <i class="bi bi-file-earmark-pdf"></i>
                <span>Laporan Ceklis Reffuler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('lap-kerusakan') }}">
                <i class="bi bi-file-earmark-pdf"></i>
                <span>Laporan Kerusakan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Sign Out</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

    </ul>
    @endif

</aside>
