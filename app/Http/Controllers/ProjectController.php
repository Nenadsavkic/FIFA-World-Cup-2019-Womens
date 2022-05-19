<?php

namespace App\Http\Controllers;

use App\Models\Duel;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
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

         $sorted_data = collect($all_matches)->sortByDesc('weather.temp_celsius');


        return response(view('jsonMatches',array('matches'=>$sorted_data)),200, ['Content-TYpe' => 'application/json']);
    }



    public function jsonTeams()
    {
        $teams = Team::all();

        $matches = Duel::all();

        // I have problem with retreiving some data from database (goals), so I try this way.
        $duels = json_decode(Http::get("http://worldcup.sfg.io/matches/"));




            for($i = 0; $i < $teams->count(); $i++){

                foreach($teams as $key => $team){




                    $home_team = $matches->where('home_team_country',  $team->country)->count();
                    $away_team = $matches->where('away_team_country',  $team->country)->count();



                    // Ukupan broj meceva
                    $games_played = $home_team + $away_team;

                    // Pobede
                    $wins = $matches->where('winner', $team->country)->count();

                    //Nereseni
                    $draws = DB::table('duels')
                    ->where('home_team_country',$team->country)
                    ->where('away_team_country',$team->country)
                    ->where('winner','Draw')
                    ->count();

                    // Porazi
                    $losses = $games_played - $wins - $draws;


                    // Poeni

                    $points = $wins*3 + $draws;

                    //goals for

                    $goals_for_home = collect($duels)
                    ->where('home_team.country', $team->country)
                    ->sum('home_team.goals');

                    $goals_for_away = collect($duels)
                    ->where('away_team.country', $team->country)
                    ->sum('away_team.goals');

                    $goals_for = $goals_for_home + $goals_for_away;

                    // goals against

                    $goals_against_home = collect($duels)
                    ->where('home_team.country', $team->country)
                    ->sum('away_team.goals');

                    $goals_against_away = collect($duels)
                    ->where('away_team.country', $team->country)
                    ->sum('home_team.goals');

                    $goals_against = $goals_against_home + $goals_against_away;

                    // goals diferentials

                    $goals_diferentials = $goals_for - $goals_against;



                    $team_data[$key] = [

                            'id' => $team->id,
                            'country' => $team->country,
                            'alternare_name' => $team->alternate_name,
                            'fifa_code' => $team->fifa_code,
                            'group_id' => $team->group_id,
                            'group_letter' => $team->group_letter,
                            'wins' => $wins,
                            'draws' => $draws,
                            'losses' => $losses,
                            'games_played' => $games_played,
                            'points' => $points,
                            'goals_for' => $goals_for,
                            'goals_against' => $goals_against,
                            'goals_diferentials' => $goals_diferentials,

                    ];


                }


            }

        return response(view('jsonTeams',array('result'=>$team_data)),200, ['Content-TYpe' => 'application/json']);


    }








}
