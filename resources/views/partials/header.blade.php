<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LARAVEL FILM</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link {{Route::currentRouteName() === 'film' ? 'active' : ''}} " href="{{route('film')}}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
                </li>

            </ul>

        </div>
    </nav>
</header>