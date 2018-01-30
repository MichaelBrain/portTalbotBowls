@section('nav') 
<nav class="navbar sticky-top navbar-inverse bg-inverse">
    <div style="margin-left: 5%; margin-right: 5%;">
        <div>
            <button class="btn btn-primary navbar-toggle collapsed" type="button" style="float: left; margin-left: 5px;" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
            
        <div class="row">
            <div class="col">
                <div class="navbar-collapse collapse multi-collapse" id="navbar">
                    <div class="card card-body">
                        <ul class="nav navbar-nav">
                            <li><a style="font-size: 2.5rem; color: orange;" href="{{ route('/') }}">PORT TALBOT IBC</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Championship <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('ChampionshipTeam') }}"> <div class="dropdown-item"> Team </div> </a>
                                    <a href="{{ route('ChampionshipFixturesAndResults') }}"> <div class="dropdown-item"> Fixtures & Results </div> </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Merit <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('MeritTeam') }}"> <div class="dropdown-item"> Team </div> </a>
                                    <a href="{{ route('MeritFixturesAndResults') }}"> <div class="dropdown-item"> Fixtures & Results </div> </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Competitions <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('Singles') }}"> <div class="dropdown-item"> Singles </div> </a>
                                    <a href="{{ route('Pairs') }}"> <div class="dropdown-item"> Paris </div> </a>
                                    <a href="{{ route('Triples') }}"> <div class="dropdown-item"> Triples </div> </a>
                                    <a href="{{ route('Fours') }}"> <div class="dropdown-item"> Fours </div> </a>
                                    <a href="{{ route('Over50Triples') }}"> <div class="dropdown-item"> Over 50 Triples </div> </a>
                                    <a href="{{ route('Over60s') }}"> <div class="dropdown-item"> Over 60s </div> </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Internal Leagues <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('AfternoonLeagues') }}"> <div class="dropdown-item"> Afternoon Leagues </div> </a>
                                    <a href="{{ route('EveningLeagues') }}"> <div class="dropdown-item"> Evening Leagues </div> </a>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('Honours') }}"> Honours </a>
                            </li>
                            <li>
                                <a href="{{ route('Contact') }}"> Contact Us </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@show