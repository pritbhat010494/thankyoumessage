<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
        <a class="navbar-brand" href="/">ThankYou Message</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>