<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
            <img class="logo-home" src="http://doulacristina.it/img/1640562992772.dd45c549.jpg" alt="Logo">
            </a>
            <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-black fs-4" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fs-4" href="{{ route('services.index') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fs-4" href="{{ route('services.create') }}">Aggiungi Servizi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>