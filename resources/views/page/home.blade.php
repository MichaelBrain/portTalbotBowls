@extends('layout.master')

@section('head')
@parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
    }
    
    (document, 'script', 'facebook-jssdk'));
</script>

<script>
    window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
    }(document, "script", "twitter-wjs"));
</script>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <hr class="featurette-divider">

            <div class="image">
                <p> Est. 1996 </p>
                <img class="logo" src="images/PT-Logo.png" />
            </div>

            <h2>
                Welcome to Port Talbot IBC
            </h2>
            <div >
                Port Talbot Indoor Bowls Club is a popular 6 rink stadium with a bar, seating area and free parking on site.
            </div>
            <div>
                </br>
                Our bowls hall is only 5 minutes from J41 of the M4 and 10 minutes off J38 via Habour Way. 
                We are located in Aberavon, along The Princess Margeret Way, by Afan Lido Football Club. 
                The club is open to bowlers of all ages and ability, even those hoping to start in the game
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">           
        <hr class="featurette-divider">

        <div> 
            <h2>
                Club News
            </h2>

            <div>
                <h3>
                    WELSH UNDER 16 SINGLES CHAMPION #1<i class="fa fa-trophy"></i>
                </h3>
                <div class="image">
                    <img class="logo" src="images/RhysChampion.jpg"/>
                </div>
                <div> 
                    WELL DONE RHYS COLWILL!! </br> Welsh Champion on your first 'proper' season indoors.
                    Hopefully it's just the start of a fantastic bowls career. Everyone at the indoors is over the moon with your victory.
                </div>
            </div>

            <div>
                <h3>
                    <a href="{{ route('competitions') }}"> Club Competition Finals - Dates Annouced </a>
                </h3>
                <div> 
                    We have announced the dates for our club finals to take place over the next few weeks.
                    Come along and support those fighting to become club champions.
                </div>
            </div>
        </div>
    </div>

    

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom: 15px; text-align:center;">
        <hr class="featurette-divider">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;">
            <a class="twitter-timeline" data-width="300" data-height="550" href="https://twitter.com/PortTalbotIBC?ref_src=twsrc%5Etfw">Tweets by PortTalbotIBC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>            
            <hr class="featurette-divider">
        </div>
        <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FPortTalbotIBC&width=147&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId" width="147" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>        
        
        <a class="twitter-follow-button"
            href="https://twitter.com/PortTalbotIBC"
            data-size="large">
            Follow @PortTalbotIBC
        </a>
    </div>       
</div>
    
@stop