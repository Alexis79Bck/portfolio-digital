<nav class="navbar navbar-default" role="navigation" aria-label="Main navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" 
                    data-toggle="collapse" 
                    data-target="#bs-example-navbar-collapse-1" 
                    aria-expanded="false" 
                    aria-controls="bs-example-navbar-collapse-1" 
                    aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img src="{{ asset('images/logo.png') }}" alt="Treviso theme logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ route('projects') }}">Projects</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ route('blog') }}">Blog</a>
                </li>

                {{-- Temporalmente comentado hasta su implementacion
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
