@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/teams.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1> Championship </h1>
    </div>

    <div id="team" class="col-xs-12 col-sm-12 col-md-8 col-lg-8"> 
        <hr class="featurette-divider">
        <h2> Port Talbot vs Bro Myddin </h2>
        <h3> Saturday 27th January, 2pm start </h3>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 1 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Rhys Colwill </p>
                <p> <span>2nd:</span> Mark Jones </p>
                <p> <span>3rd:</span> Alun Morris </p>
                <p> <span>Skip:</span> Dai Parkhouse </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 2 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Tony Evans </p>
                <p> <span>2nd:</span> Ellis Thomas </p>
                <p> <span>3rd:</span> Mal Goss </p>
                <p> <span>Skip:</span> Martin Johnson </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 3 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Rhys Roberts </p>
                <p> <span>2nd:</span> Glan Evans </p>
                <p> <span>3rd:</span> Ceri Jones </p>
                <p> <span>Skip:</span> Mike Brain </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 4 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Paul Champion </p>
                <p> <span>2nd:</span> Dai Wilkins </p>
                <p> <span>3rd:</span> Alan Gibbs </p>
                <p> <span>Skip:</span> Eiron Thomas </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 5 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Dennis Haines </p>
                <p> <span>2nd:</span> Paul Jones </p>
                <p> <span>3rd:</span> Steve Hill </p>
                <p> <span>Skip:</span> Dale McCarthy </p>
            </div>
        </div>

        <div id="rink" class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <h4> Rinks 6 </h4>
            <div class="rink-players"> 
                <p> <span>Lead:</span> Neil Edwards </p>
                <p> <span>2nd:</span> Marshall Cox </p>
                <p> <span>3rd:</span> Craig Latham </p>
                <p> <span>Skip:</span> Shane Hill </p>
            </div>
        </div>

        <div id="rink" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="rink-players"> 
                <p> <span> Reserves: </span> J Colwill, K Jones, K Egan, J Kenifick </p>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <hr class="featurette-divider">
        <h2> West Division </h2>

        <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <tr>
                <th>Team</th>
                <th>Played</th>
                <th>Shots +/-</th>
                <th>Points</th>
            </tr>
            @foreach ($championship as $team)
                @if ($team->team == 'Port Talbot')
                    <tr>
                        <td style="color: orange; font-weight: bold;">{{ $team->team }}</td>
                        <td style="color: orange; font-weight: bold;">{{ $team->gamesPlayed }}</td>
                        <td style="color: orange; font-weight: bold;">{{ $team->shotDifference }}</td>
                        <td style="color: orange; font-weight: bold;">{{ $team->points }}</td>
                    </tr>
                @else
                    <tr>
                        <td>{{ $team->team }}</td>
                        <td>{{ $team->gamesPlayed }}</td>
                        <td>{{ $team->shotDifference }}</td>
                        <td>{{ $team->points }}</td>
                    </tr>
                @endif
            @endforeach
        </table>

    <div class="row"></div>
    
        <h2>
        Previous Result
        </h2>

        <h3>
            Port Talbot 18 - 4 Bro Myddin, +61 shots 
        </h3>

        <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <tr> <th>M Brain</th> <td> 20 - 24 </td> <td> C Griffthis </td> </tr>
            <tr> <th>S Hill</th> <td> 32 - 14 </td> <td> H Morgan </td> </tr>
            <tr> <th>E Thomas</th> <td> 38 - 7 </td> <td> A Collinge </td> </tr>
            <tr> <th>D Parkhouse</th> <td>  13 -26 </td> <td> J Rees </td> </tr>
            <tr> <th>D McCarthy</th> <td> 19 - 17 </td> <td> T West </td> </tr>
            <tr> <th>M Johnson</th> <td> 26 - 9  </td> <td> D Docherty </td> </tr>
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
                    7th: Pembroke vs Port Talbot </br>
                    21st: Port Talbot vs Pontardawe </br>
                    28th: Port Talbot vs Earlswood 
                </td>
            </tr>
        </table>

        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>November</th>
            <tr>
                <td> 
                    11th: Dinefwr vs Port Talbot </br>
                    18th: Bro Myddin vs Port Talbot </br>
                    25th: Port Talbot vs Pembroke 
                </td>
            </tr>
        </table>

        <table class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <th>December</th>
            <tr>
                <td> 
                    2nd: Pontardawe vs Port Talbot </br>
                    16th: Earlswood vs Port Talbot </br>
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
                    13th: Port Talbot vs Dinefwr </br>
                    27th: Port Talbot vs Bro Myddin 
                </td>
            </tr>
        </table>
    </div>
</div>
@stop