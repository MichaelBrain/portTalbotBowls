@extends('layout.master')

@section('head')
@parent
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:center;"> 

            <div class="header-logo">
                <p style="font-size: 2rem;"> Est. 1996 </p>
                <img class="logo" src="images/PT-Logo.png" />
            </div>

        </div>

        <div class="col-sm-12 col-md-6 col-lg-6" style="text-align:center;"> 
            <h1> 
                About our club 
            </h1>
            <p class="overview-text"> We were established in 1996 and opened by our very own John Price. We have 2 teams who play our of the Stadium, Championship and Merit side who play most Saturdays between September and Mid-April.</p> 
            <p class="overview-text"> The club is located by Afan Lido Football Club, accessible via Princess Margaret Way. </p>
        </div>
    </div>
    
@stop