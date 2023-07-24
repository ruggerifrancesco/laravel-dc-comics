<footer>
    <!-- Main Footer -->
    <section class="main-footer">
        <div class="wrapper">

            <div class="links-wrapper">
                <div class="footer-col">
                    <h4>Dc Comics</h4>
                    <ul class="list-container">
                        @foreach (config('footerlinks.dcComicsItemsList') as $item)
                            <li>
                                <a href="{{ $item['link'] }}">{{ $item['item'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h4>Shop</h4>
                    <ul class="list-container">
                        @foreach (config('footerlinks.shopItemsList') as $item)
                            <li>
                                <a href="{{ $item['link'] }}">{{ $item['item'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Dc</h4>
                    <ul class="list-container">
                        @foreach (config('footerlinks.dcItemsList') as $item)
                            <li>
                                <a href="{{ $item['link'] }}">{{ $item['item'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Sites</h4>
                    <ul class="list-container">
                        @foreach (config('footerlinks.siteItemsList') as $item)
                            <li>
                                <a href="{{ $item['link'] }}">{{ $item['item'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Logo Background -->
            <div class="background-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="background logo">
            </div>
        </div>
    </section>

    <!-- Second Footer -->
    <section class="miscellaneous-footer">
        <div class="wrapper">

            <div class="miscellaneous-wrapper">
                <div class="signUp-btn-container">
                    <button type="button" class="btn btn-outline-primary" id="signUp-btn">
                        Sign Up Now!
                    </button>
                </div>

                <div class="socials-container">
                    <span class="social-title">Follow Us</span>
                    <ul class="m-0 socials-list">
                        @foreach (config('socials') as $social)
                        <li>
                            <a href="{{ $social['link'] }}">
                                <img src="{{ Vite::asset('resources/img/' . $social['srcIcon']) }}" alt="{{ $social['socialName'] }}" class="socialImg-icon">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
