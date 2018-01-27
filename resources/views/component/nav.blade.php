@section('nav') 
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">PORT TALBOT IBC</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="#">Internal Leagues</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Competitions</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Championship Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Team</a>
            <a class="dropdown-item" href="#">Fixtures and Results</a>
            <a class="dropdown-item" href="#">Standings</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Merit Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Team</a>
            <a class="dropdown-item" href="#">Fixtures and Results</a>
            <a class="dropdown-item" href="#">Standings</a>
        </div>
        </li>
    </ul>
    </div>
</nav>
@show