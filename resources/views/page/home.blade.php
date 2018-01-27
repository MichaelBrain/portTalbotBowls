@extends('layout.master')

@section('head')
    @parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')
 
    <div class="home-header"> 
        <img src="images/PT-Logo.png" />

        <hr class="featurette-divider">

        <div class="home-header-heavy">WEBSITE COMING SOON!!</div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="social-link">
                <a href="https://www.facebook.com/PortTalbotIBC" target="_blank"> 
                    <img class="social-icon" src="images/social/facebook.png"> 
                </a>
            </div>
            <div class="social-link">
                <a href="https://www.twitter.com/PortTalbotIBC" target="_blank"> 
                    <img class="social-icon" src="images/social/twitter.png">
                </a>
            </div>
        </div>

    </div>
    
@stop