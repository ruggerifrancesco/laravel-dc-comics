<header>
    <div class="wrapper wrapper-header">
        <div class="my_page-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Main Logo">
        </div>
        <nav>
            <ul class="my_list-nav">
                @foreach (config('navlinks') as $item)
                    <li>
                        <a href="{{ $item['href'] }}">{{ $item['item'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

    <section class="my_hero-section"></section>
</header>
