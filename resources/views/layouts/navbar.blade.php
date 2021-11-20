<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://www.chiboost.net/images/logo.svg?ver=2.3.0" alt="ChiBoost">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Boosting
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <small>League of Legends</small>
                        <a class="dropdown-item" href="{{url('divisions')}}">Divisions</a>
                        <a class="dropdown-item" href="{{url('netwins')}}">Netwins</a>
                        <a class="dropdown-item" href="{{url('placements')}}">Placements</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Marketplace</a>
                </li>

            </ul>
            <div class="log">
                <a href="{{url('login')}}" target="_blank" class="btn">Login</a>
                <a href="{{url('register')}}" target="_blank" class="btn ">Register</a>
            </div>
        </div>
    </div>
</nav>
