<?php

namespace App\Http\Controllers;

use App\Models\Duel;
use App\Models\Team;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
   


    public function welcome()
    {  
        $response = json_decode(Http::get("http://worldcup.sfg.io/teams/"));
        $counter = collect($response)->count();


            foreach ($response as $key => $value) {
                $teams = new Team();
                $teams->id = $value->id;
                $teams->country = $value->country;
                $teams->alternate_name = isset($value->alternate_name)? $value->alternate_name : null;
                $teams->fifa_code = $value->fifa_code;
                $teams->group_id = $value->group_id;
                $teams->group_letter = $value->group_letter;
                 if ($teams->count() != $counter) {

                      $teams->save(); 
    
                }

               
            }      
           
        
            

      $teamsA = Team::all()->where('group_letter', 'A');  
      $teamsB = Team::all()->where('group_letter', 'B');  
      $teamsC = Team::all()->where('group_letter', 'C');  
      $teamsD = Team::all()->where('group_letter', 'D');  
      $teamsE = Team::all()->where('group_letter', 'E');  
      $teamsF = Team::all()->where('group_letter', 'F');  

      return view('welcome')->with([
          'teamsA' => $teamsA, 
          'teamsB' => $teamsB, 
          'teamsC' => $teamsC, 
          'teamsD' => $teamsD, 
          'teamsE' => $teamsE, 
          'teamsF' => $teamsF, 
        ]);



    }

    

     public function matches()
     {
        $response = json_decode(Http::get("http://worldcup.sfg.io/matches/"),true);
        $counter = collect($response)->count();




        foreach ($response as $key => $value) {

             $duels = new Duel();

             $duels->venue = $value['venue'];
             $duels->location = $value['location'];
             $duels->status = $value['status'];
             $duels->time = $value['time'];
             $duels->fifa_id = $value['fifa_id'];
             $duels->weather = json_encode($value['weather']);
             $duels->attendance = $value['attendance'];
             $duels->officials = json_encode($value['officials']);
             $duels->stage_name = $value['stage_name'];
             $duels->home_team_country = $value['home_team_country'];
             $duels->away_team_country = $value['away_team_country'];
             $duels->datetime = $value['datetime'];
             $duels->winner = $value['winner'];
             $duels->winner_code = $value['winner_code'];
             $duels->home_team = json_encode($value['home_team']);
             $duels->away_team = json_encode($value['away_team']);
             $duels->home_team_events = json_encode($value['home_team_events']);
             $duels->away_team_events = json_encode($value['away_team_events']);
             $duels->home_team_statistics = json_encode($value['home_team_statistics']);
             $duels->away_team_statistics = json_encode($value['away_team_statistics']);
             $duels->last_event_update_at = $value['last_event_update_at'];
             $duels->last_score_update_at = $value['last_score_update_at']; 

             if ($duels->count() != $counter) {

                  $duels->save(); 
             } 
                 
              

 
        } 
        
        $matches = Duel::all();
       

        
        return view('matches')->with(['matches'=>$matches]);
              
          
     }


     public function jsonMatches()
     {
         $all_matches = json_decode(Http::get('http://worldcup.sfg.io/matches'));

         $sorted_data = collect($all_matches)->sortByDesc('weather.temp_celsius')->toArray();
 
         $matches = json_encode($sorted_data);
        

         return view('jsonMatches')->with(['matches'=> collect($matches)]);
     }

     public function jsonTeams()
     {
        $teams = Team::all();   $matches = Duel::all();

        $stat = json_decode($matches[0]->home_team_events);

        // $wins;
        // $draws;
        // $losses;
        // $games_played;
        // $points;
        // $goals_for;
        // $goals_against;
        // $goal_differential;





        dd($stat);
         return view('jsonTeams')->with(['result']);
     }
     


}
