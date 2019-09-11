@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/teams.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1> Merit League </h1>
    </div>
    <div id="team" class="col-xs-12 col-sm-12 col-md-8 col-lg-8"> 
        <hr class="featurette-divider">
        <h2> Port Talbot  vs Merthyr Tydfil </h2>
        <h3> Saturday 20th January, 2pm start </h3>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 1 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> R David </p>
                <p> <span>2nd:</span> K Svenson </p>
                <p> <span>3rd:</span> K Stanford </p>
                <p> <span>Skip:</span> K Egan </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 2 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Rob 'Chef' Edwards </p>
                <p> <span>2nd:</span> M Amor </p>
                <p> <span>3rd:</span> G Nicholas </p>
                <p> <span>Skip:</span> G Goodridge </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 3 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> A Edwards </p>
                <p> <span>2nd:</span> R Lewis </p>
                <p> <span>3rd:</span> J Griffthis </p>
                <p> <span>Skip:</span> B Rendall </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 4 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> K Hoare </p>
                <p> <span>2nd:</span> T Saunders </p>
                <p> <span>3rd:</span> R Bevis </p>
                <p> <span>Skip:</span> K Jones </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 5 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> L Jones </p>
                <p> <span>2nd:</span> R Smythe </p>
                <p> <span>3rd:</span> C Davies </p>
                <p> <span>Skip:</span> C Thomas </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 6 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> D Hankes </p>
                <p> <span>2nd:</span> J Egan </p>
                <p> <span>3rd:</span> A Sheldon </p>
                <p> <span>Skip:</span> G Williams (Capt) </p>
            </div>
        </div>

        <div id="rink" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="rink-players">
                <p> <span>Reserves: </span> D Seal, V Williams, D Haines </p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <hr class="featurette-divider">
        <h2> West Division </h2>

        <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <tr>
                <th> Team </th>
                <th> Played </th>
                <th> Shots +/- </th>
                <th> Points </th>
            </tr>
            @foreach ($merit as $team)
                @if ($team->team == 'Port Talbot')
                    <tr>
                        <td style="color: orange; font-weight: bold;"> {{ $team->team }} </td>
                        <td style="color: orange; font-weight: bold;"> {{ $team->gamesPlayed }} </td>
                        <td style="color: orange; font-weight: bold;"> {{ $team->shotDifference }} </td>
                        <td style="color: orange; font-weight: bold;"> {{ $team->points }} </td>
                    </tr>
                @else
                    <tr>
                        <td> {{ $team->team }} </td>
                        <td> {{ $team->gamesPlayed }} </td>
                        <td> {{ $team->shotDifference }} </td>
                        <td> {{ $team->points }} </td>
                    </tr>
                @endif
            @endforeach
        </table>

    <div class="row"></div>
    
        <h2>
        Previous Result
        </h2>

        <h3>
            Port Talbot 16 - 6 Merthyr, 3.25 shots
        </h3>

        <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <tr> <th> </th> <td>  </td> <td>  </td> </tr>
            <tr> <th> </th> <td>  </td> <td>  </td> </tr>
            <tr> <th> </th> <td>  </td> <td>  </td> </tr>
            <tr> <th> </th> <td>  </td> <td>  </td> </tr>
            <tr> <th> </th> <td>  </td> <td>  </td> </tr>
            <tr> <th> </th> <td>  </td> <td>  </td> </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <hr class="featurette-divider">
        <h2> Fixtures </h2>


        <h3> 2017 </h3>
        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>October</th>
            <tr>
                <td> 
                    14th: Dinefwr vs Port Talbot </br>
                    28th: Earlswood vs Port Talbot 
                </td>
            </tr>
        </table>

        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>November</th>
            <tr>
                <td> 
                    11th: Port Talbot vs Swansea </br>
                    18th: Port Talbot vs Llanelli
                </td>
            </tr>
        </table>

        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>December</th>
            <tr>
                <td> 
                    9th: Port Talbot vs Dinefwr </br>
                    16th: Port Talbot vs Earlswood </br>
                </td>
            </tr>
        </table>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3> 2018 </h3>
        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>January</th>
            <tr>
                <td> 
                    6th: Ogwr vs Port Talbot </br>
                    20th: Port Talbot vs Bro Merthyr Tydfil 
                </td>
            </tr>
        </table>
        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>Febuary</th>
            <tr>
                <td> 
                    17th: Llanelli vs Port Talbot </br>
                    24th: Swansea vs Port Talbot
                </td>
            </tr>
        </table>

        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>March</th>
            <tr>
                <td> 
                    3rd: Port Talbot vs Ogwr </br>
                    24th: Merthyr Tydfil vs Port Talbot </br>
                </td>
            </tr>
        </table>
    </div>
</div>
@stop