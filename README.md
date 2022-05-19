# FIFA Women's World Cup 2019

Assignment

Create an application in PHP:

Create functionality for importing data from the 2019 World Cup.
from the following two links:
http://worldcup.sfg.io/matches and http://worldcup.sfg.io/teams/

Note that the import can be performed more than once, so it is necessary to do
functionality for both import and eventual data updates.

Based on the imported data, create a functionality that will return the ion with the following data
and in the same format: http://worldcup.sfg.io/matches but sorted by temperature (warmest to coldest).

Based on the imported data, create a functionality that will return json with the following data and u
in the same format: http://worldcup.sfg.io/teams/results

Pay attention to scalability - a significant increase in the amount of data (million times), adding
new data types and the like.

The project can be done using pure php or using libraries and frameworks.

What will be evaluated is:
-optimization and clarity of SKL queries
-optimization and clarity of PHP code (OOP)
-base design


returned Json data:

http: //127.0.0.1: 8000 / matches-json
http: //127.0.0.1: 8000 / teams-json




## Installation

### I assume you already have Laravel installed <p>[Official Documentation](https://laravel.com/docs/8.x/installation#installation)</p>


### Clone the repository 

   <p> git clone https://github.com/Nenadsavkic/FIFA-World-Cup-2019-Womens.git </p>

   ### Switch to the repository cloned folder

   <p> example path:  PS C:\Users> cd FIFA-World-Cup-2019-Womens  </p>

### Install all the dependencies using composer

   ``` bash
   composer install
   ```

### Copy the '.env.example' file in the '.env' file
    
   ```bash
   cp .env.example .env
   ```

### Generate a new application key
    
   ```bash
   php artisan key:generate
   ```

### Create database 'world_cup' in your local server (xamp), then run migration
### Check the database connection in .env before migrating

   ```bash
   php artisan migrate
   ```

### Start your server

   ```bash
   php artisan serve
   ```

<p> You can now access the server at http://localhost:8000</p>
