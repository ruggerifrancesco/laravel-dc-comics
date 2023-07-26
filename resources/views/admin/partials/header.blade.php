<header class="admin_header">
    <div class="wrapper wrapper-header">
        <div class="admin_brand">
            <div class="admin_page-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Main Logo">
            </div>
            <span>Admin Client</span>
        </div>
        <nav>
            <ul class="my_list-nav">
                <li>
                    <a href="{{ route('admin.comics.create') }}">
                        Control Panel
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.comics.index') }}">
                        Comics List
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.comics.create') }}">
                        <i class="fa-solid fa-plus"></i>
                        Crea un nuovo comic
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
