@extends('layouts.app')

@section('title')
    Teams
@endsection

@section('content')
<div class="container mb-5">
    <div class="text-center mt-5 mb-5">
        <h2>FIFA Women's World Cup 2019.</h2>
        <h2 class="mt-4">Groups</h2>
    </div>
    <div class="row">
        
            <div class="col-md-4 mt-4">                
            
                    <div class="card">
                        <div class="card-header text-center"> 
                            <h4 class="mt-2">Group A</h4>                 
                        </div>
                        <div class="card-body">
                            @foreach ($teamsA as $team)
                                <div class="row">
                                  <div class="col"><h4 class="mx-4">{{ $team->id }}. <span class="px-3">{{ $team->fifa_code  }} 
                                  </span></h4></div>
                                  <div class="col"><h4>{{ $team->country }}</h4></div>
                                </div>
                            @endforeach
                        </div>
                   
                    </div>

            </div>

            <div class="col-md-4 mt-4">                
            
                <div class="card">
                    <div class="card-header text-center"> 
                        <h4 class="mt-2">Group B</h4>                 
                    </div>
                    <div class="card-body">
                        @foreach ($teamsB as $team)
                             <div class="row">
                               <div class="col"><h4 class="mx-4">{{ $team->id-4 }}. <span class="px-3">{{ $team->fifa_code  }} 
                               </span></h4></div>
                               <div class="col"><h4>{{ $team->country }}</h4></div>
                            </div>
                        @endforeach
                    </div>
               
                </div>
            </div>

            <div class="col-md-4 mt-4">                
            
                <div class="card">
                    <div class="card-header text-center"> 
                        <h4 class="mt-2">Group C</h4>                 
                    </div>
                    <div class="card-body">
                        @foreach ($teamsC as $team)
                            <div class="row">
                                <div class="col"><h4 class="mx-4">{{ $team->id-8 }}. <span class="px-3">{{ $team->fifa_code  }} 
                                </span></h4></div>
                                <div class="col"><h4>{{ $team->country }}</h4></div>
                            </div>
                        @endforeach
                    </div>
               
                </div>
            </div>

            <div class="col-md-4 mt-4">                
            
                <div class="card">
                    <div class="card-header text-center"> 
                        <h4 class="mt-2">Group D</h4>                 
                    </div>
                    <div class="card-body">
                        @foreach ($teamsD as $team)
                            <div class="row">
                                <div class="col"><h4 class="mx-4">{{ $team->id-12 }}. <span class="px-3">{{ $team->fifa_code  }} 
                                </span></h4></div>
                                <div class="col"><h4>{{ $team->country }}</h4></div>
                            </div>
                        @endforeach
                    </div>
               
                </div>
            </div>

            <div class="col-md-4 mt-4">                
            
                <div class="card">
                    <div class="card-header text-center"> 
                        <h4 class="mt-2">Group E</h4>                 
                    </div>
                    <div class="card-body">
                        @foreach ($teamsE as $team)
                            <div class="row">
                                <div class="col"><h4 class="mx-4">{{ $team->id-16 }}. <span class="px-3">{{ $team->fifa_code  }} 
                                </span></h4></div>
                                <div class="col"><h4>{{ $team->country }}</h4></div>
                            </div>
                        @endforeach
                    </div>
               
                </div>
            </div>

            <div class="col-md-4 mt-4">                
            
                <div class="card">
                    <div class="card-header text-center"> 
                        <h4 class="mt-2">Group F</h4>                 
                    </div>
                    <div class="card-body">
                        @foreach ($teamsF as $team)
                            <div class="row">
                                <div class="col"><h4 class="mx-4">{{ $team->id-20 }}. <span class="px-3">{{ $team->fifa_code  }} 
                                </span></h4></div>
                                <div class="col"><h4>{{ $team->country }}</h4></div>
                            </div>
                        @endforeach
                    </div>
               
                </div>
            </div>
    </div>
</div>
@endsection
