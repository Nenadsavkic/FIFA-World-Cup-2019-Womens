<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duels', function (Blueprint $table) {
            $table->id();
            $table->string('venue');
            $table->text('location');
            $table->string('status');
            $table->string('time');
            $table->string('fifa_id');
            $table->longText('weather', array(
                'humidity', 
                'temp_celsius',
                'temp_farenheit',
                'wind_speed',
                'description',
            ));
            $table->string('attendance');
            $table->longText('officials', array(1,2,3,4,5,6,7,8));
            $table->string('stage_name');
            $table->string('home_team_country');
            $table->string('away_team_country');
            $table->string('datetime');
            $table->string('winner');
            $table->string('winner_code');
            $table->longText('home_team', array('country','code', 'goals', 'penalties'));
            $table->longText('away_team', array('country','code', 'goals', 'penalties'));
            $table->longText('home_team_events',array('id', 'type_of_event','player', 'time'));
            $table->longText('away_team_events',array('id', 'type_of_event','player', 'time'));
            $table->longText('home_team_statistics', array(
                'country', 'attempts_on_goal', 'on_target', 'off_target', 'blocked', 'corners',
                'offsides', 'ball_possession', 'pass_accuracy', 'num_passes', 'passes_completed',
                'distance_covered', 'tackles', 'clearances', 'yellow_cards', 'red_cards',
                'fouls_committed', 'tactics', 'starting_eleven', 'substitutes' 
            ));
            $table->longText('away_team_statistics', array(
                'country', 'attempts_on_goal', 'on_target', 'off_target', 'blocked', 'corners',
                'offsides', 'ball_possession', 'pass_accuracy', 'num_passes', 'passes_completed',
                'distance_covered', 'tackles', 'clearances', 'yellow_cards', 'red_cards',
                'fouls_committed', 'tactics', 'starting_eleven', 'substitutes' 
            ));

            $table->string('last_event_update_at');
            $table->string('last_score_update_at');

            
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duels');
    }
}
