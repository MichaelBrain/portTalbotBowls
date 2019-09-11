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

            <div class="socials">
                <div class="social-link">
                    <a href="https://www.facebook.com/PortTalbotIBC/"> <i class="fa fa-facebook-f" aria-hidden="true"></i> </a>
                </div>

                <div class="social-link">
                    <a href="https://www.twitter.com/PortTalbotIBC/"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                </div>

                <div class="social-link">
                    <a href="https://www.google.co.uk/maps/place/Port+Talbot+Indoor+Bowls/@51.5919136,-3.8108657,15z/data=!4m5!3m4!1s0x0:0x41dd96e3672da899!8m2!3d51.5919136!4d-3.8108657"> <i class="fa fa-map-marker" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col">
                <div class="navbar-collapse collapse multi-collapse" id="navbar">
                    <div class="card card-body">
                        <ul class="nav navbar-nav">
                            <li><a style="font-size: 2.5rem; color: orange;" href="{{ route('/') }}">PT INDOORS</a></li>
                            <li class="nav-item dropdown disabled">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Championship <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu disabled" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('ChampionshipTeam') }}"> <div class="dropdown-item"> Team </div> </a>
                                    <a href="{{ route('ChampionshipFixturesAndResults') }}"> <div class="dropdown-item"> Fixtures & Results </div> </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown disabled">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Merit <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu disabled" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('MeritTeam') }}"> <div class="dropdown-item"> Team </div> </a>
                                    <a href="{{ route('MeritFixturesAndResults') }}"> <div class="dropdown-item"> Fixtures & Results </div> </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown disabled">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Competitions <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu disabled" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('Singles') }}"> <div class="dropdown-item"> Singles </div> </a>
                                    <a href="{{ route('Pairs') }}"> <div class="dropdown-item"> Paris </div> </a>
                                    <a href="{{ route('Triples') }}"> <div class="dropdown-item"> Triples </div> </a>
                                    <a href="{{ route('Fours') }}"> <div class="dropdown-item"> Fours </div> </a>
                                    <a href="{{ route('Over50Triples') }}"> <div class="dropdown-item"> Over 50 Triples </div> </a>
                                    <a href="{{ route('Over60s') }}"> <div class="dropdown-item"> Over 60s </div> </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown disabled">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Internal Leagues <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu disabled" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="{{ route('AfternoonLeagues') }}"> <div class="dropdown-item"> Afternoon Leagues </div> </a>
                                    <a href="{{ route('EveningLeagues') }}"> <div class="dropdown-item"> Evening Leagues </div> </a>
                                </div>
                            </li>
                            <li class="nav-item disabled">
                                <a href="{{ route('Honours') }}"> Honours </a>
                            </li>
                            <li class="nav-item disabled">
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