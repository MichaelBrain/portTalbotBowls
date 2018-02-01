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
        <div class="col-sm-12 col-md-4 col-lg-4" style="text-align:center;"> 

            <div class="col-sm-12 col-md-12 col-lg-12">
                <hr class="featurette-divider">

                <p> Est. 1996 </p>
                <img class="logo" src="images/PT-Logo.png" />

                <div class="header"> 
                    Welcome to Port Talbot IBC
                </div>
                <div class="overview-text">
                    Port Talbot Indoor Bowls Club is a popular 6 rink stadium with a comfortable seating area, bar and free parking on site.
                </div>
                <div class="overview-text">
                    We were established in 1996 and opened by our very own John Price. 
                    As memebers of the WIBA with our members taking part in the Championship and Merit Leagues along with the respected Welsh compeitions.
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">           
            <hr class="featurette-divider">

            <div id="clubUpdates" style="text-align:center;"> 
                <div class="header"> 
                    Club News
                </div>

                <div class="subHeader">
                    <div class="homeLabel">
                        Welsh Singles - Open and Under 16 <i class="fa fa-trophy" aria-hidden="true"></i>
                    </div>
                    <div class="homeText"> 
                        On Saturday 3rd Feburary Rhys Colwill and Shane Hill will play in the semi-finals of their
                        respected Singles competitions. 
                        </br>
                        Good luck in lads, we're all behind you!!
                    </div>
                </div>
                <div class="subHeader">
                    <div class="homeLabel">
                        Comptition Finals Dates
                    </div>
                    <div class="homeText"> 
                        We have announced the dates for our club finals to take place over the next few weeks.
                        Come along and support those fighting to become club champions
                        </br>To find out the dates please select the relevant competition.
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="header"> 
                    Recent Results
                </div>

                <div class="subHeader" >
                    <div class="homeLabel">
                        Championship Team
                        </br>
                        RESULT: Port Talbot 18 - 4 Bro Myddin, +61 shots 
                    </div>
                    <div class="homeText" style="margin-top: 2px;"> 
                        <a href""> Click here to view the rink scores. </a> </br>
                        <a href""> TEAM SELECTED to face Bro Myddin on Saturday 27th January </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="col-sm-12 col-md-4 col-lg-4" style="text-align:center; margin-bottom: 15px;">

            <div class="hidden-xs hidden-sm-down col-md-12 col-lg-12" style="text-align:center;">
                <a class="twitter-timeline" data-width="300" data-height="400" href="https://twitter.com/PortTalbotIBC?ref_src=twsrc%5Etfw">Tweets by PortTalbotIBC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>            
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