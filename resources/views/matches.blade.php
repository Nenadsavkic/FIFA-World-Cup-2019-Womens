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
            
            @foreach ($matches as $match)
                
                <div class="col-4 mt-5">
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

            @endforeach

        </div>
    </div>
@endsection