<header>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">LESD Agency</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleMainNav" aria-controls="collapsibleMainNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleMainNav">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 bg_transparent_dark rounded-3 p-2">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'welcome' ? 'bg-dark text-white' : '' }}"
                            href="{{ route('welcome') }}" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'bg-dark text-white' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-dark text-white' : '' }}"
                            href="{{ route('contacts') }}">Contacts</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</header>