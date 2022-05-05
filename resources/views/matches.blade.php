@extends('layouts.app')

@section('title')
    Matches
@endsection

@section('content')
    <div class="container">
        <div class="text-center mt-5 mb-5">
            <h2>FIFA Women's World Cup</h2>
            <h2 class="mt-4">Matches</h2>
        </div>

        <div class="row">
            <div class="col text-center">
                <h3>First stage</h3>
            </div>
        </div> 
        
        <div class="row">
            
            @foreach ($matches as $match)
    
                @if( $match->stage_name == "First Stage")
                <div class="col-md-3 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                        <h4>{{ $match->home_team_country }} : {{ $match->away_team_country }}</h4>
                        </div>
                        <div class="card-body">
                            <h4>Winner: {{ $match->winner }}</h4>
                            <br>
                            <h4>Result: {{ json_decode($match->home_team)->goals  }} : {{ json_decode($match->away_team)->goals  }}</h4>
                            
                        </div>
                        <div class="card-footer">
                            <h4>Stage: {{ $match->stage_name }}</h4>
                        </div>
                    </div>
                </div> 
                @endif              
              

            @endforeach

        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <h3>Round of 16</h3>
            </div>
        </div>
        
        <div class="row">
            
            @foreach ($matches as $match)
    
                @if( $match->stage_name == "Round of 16")
                <div class="col-md-5 mx-5 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                        <h4>{{ $match->home_team_country }} : {{ $match->away_team_country }}</h4>
                        </div>
                        <div class="card-body">
                            <h4>Winner: {{ $match->winner }}</h4>
                            <br>
                            <h4>Result: {{ json_decode($match->home_team)->goals  }} : {{ json_decode($match->away_team)->goals  }}</h4>
                            
                        </div>
                        <div class="card-footer">
                            <h4>Stage: {{ $match->stage_name }}</h4>
                        </div>
                    </div>
                </div> 
                @endif              
              

            @endforeach

        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <h3>Quarter final</h3>
            </div>
        </div> 


        <div class="row">
            
            @foreach ($matches as $match)
    
                @if( $match->stage_name == "Quarter-final")
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                        <h4>{{ $match->home_team_country }} : {{ $match->away_team_country }}</h4>
                        </div>
                        <div class="card-body">
                            <h4>Winner: {{ $match->winner }}</h4>
                            <br>
                            <h4>Result: {{ json_decode($match->home_team)->goals  }} : {{ json_decode($match->away_team)->goals  }}</h4>
                            
                        </div>
                        <div class="card-footer">
                            <h4>Stage: {{ $match->stage_name }}</h4>
                        </div>
                    </div>
                </div> 
                @endif              
              

            @endforeach

        </div>


        <div class="row mt-5">
            <div class="col text-center">
                <h3>Semi final</h3>
            </div>
        </div> 

        <div class="row">
            
            @foreach ($matches as $match)
    
                @if( $match->stage_name == "Semi-final")
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                        <h4>{{ $match->home_team_country }} : {{ $match->away_team_country }}</h4>
                        </div>
                        <div class="card-body">
                            <h4>Winner: {{ $match->winner }}</h4>
                            <br>
                            <h4>Result: {{ json_decode($match->home_team)->goals  }} : {{ json_decode($match->away_team)->goals  }}</h4>
                            
                        </div>
                        <div class="card-footer">
                            <h4>Stage: {{ $match->stage_name }}</h4>
                        </div>
                    </div>
                </div> 
                @endif              
              

            @endforeach

        </div>


        <div class="row mt-5">
            <div class="col text-center">
                <h3>Match for third place</h3>
            </div>
        </div> 

        <div class="row">
            
            @foreach ($matches as $match)
    
                @if( $match->stage_name == "Match for third place")
                <div class="col-md-6 offset-md-3 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                        <h4>{{ $match->home_team_country }} : {{ $match->away_team_country }}</h4>
                        </div>
                        <div class="card-body">
                            <h4>Winner: {{ $match->winner }}</h4>
                            <br>
                            <h4>Result: {{ json_decode($match->home_team)->goals  }} : {{ json_decode($match->away_team)->goals  }}</h4>
                            
                        </div>
                        <div class="card-footer">
                            <h4>Stage: {{ $match->stage_name }}</h4>
                        </div>
                    </div>
                </div> 
                @endif              
              

            @endforeach

        </div>


        <div class="row mt-5">
            <div class="col text-center">
                <h3>Final</h3>
            </div>
        </div> 

        <div class="row">
            
            @foreach ($matches as $match)
    
                @if( $match->stage_name == "Final")
                <div class="col-md-8 offset-md-2 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                        <h4>{{ $match->home_team_country }} : {{ $match->away_team_country }}</h4>
                        </div>
                        <div class="card-body">
                            <h4>Winner: {{ $match->winner }}</h4>
                            <br>
                            <h4>Result: {{ json_decode($match->home_team)->goals  }} : {{ json_decode($match->away_team)->goals  }}</h4>
                            
                        </div>
                        <div class="card-footer">
                            <h4>Stage: {{ $match->stage_name }}</h4>
                        </div>
                    </div>
                </div> 
                @endif              
              

            @endforeach

        </div>
        
        
    </div>
@endsection