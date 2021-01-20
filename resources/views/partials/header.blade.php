    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class=" {{Request::route()->getName() == 'home'? 'nav-link activenav' : 'nav-link' }} " href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class=" {{Request::route()->getName() == 'products.index'? 'nav-link activenav' : 'nav-link' }}" href="{{route('products.index')}}">Prodotti</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
