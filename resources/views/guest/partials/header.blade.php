<header>
    <div class="wrapper wrapper-header">
        <div class="my_page-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Main Logo">
        </div>
        <nav>
            <ul class="my_list-nav">
                <li>
                    <a href="{{ route('guest.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('guest.comics.index') }}">
                        Comics Display
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.home') }}">
                        Admin Panel
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <section class="my_hero-section"></section>
</header>
