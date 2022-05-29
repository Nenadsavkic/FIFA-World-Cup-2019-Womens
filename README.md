# FIFA Women's World Cup 2019

Zadatak

Napraviti aplikaciju u php-u:

Kreirati funkcionalnost za import podataka svetskog prvenstva u fudbalu 2019. god.
Sa sledeća dva linka:
http://worldcup.sfg.io/matches i http://worldcup.sfg.io/teams/

Obratiti pažnju na to da se import može izvršavati više puta, tako da je neophodno uraditi 
funkcionalnost i za import i za eventualni update podataka.

Na osnovu importovanih podataka, kreirati funkcionalnost koja će vratiti json sa sledećim podacima 
i u istom formatu: http://worldcup.sfg.io/matches ali poređanih po temperaturi (najtoplije ka najhladnije).

Na osnovu importovanih podataka, kreirati funkcionalnost koja će vratiti json sa sledećim podacima i u
istom formatu: http://worldcup.sfg.io/teams/results

Obratiti pažnju na skalabilnost - značajno povećanje količine podataka (milion puta), dodavanje 
novih tipova podataka i slično.

Projekat može da se uradi pomoću čistog php-a ili korišćenjem biblioteka i framework-a.

Ono što će se ocenjivati je:
-optimizovanost i jasnoća SQL upita
-optimizovanost i jasnoća PHP koda (OOP)
-dizajn baze

Vraceni JSON podaci:

http://127.0.0.1:8000/matches-json 
<br>
http://127.0.0.1:8000/teams-json


________________________________________________________________________________________________________________________________________________


Task

Create an application in PHP:

Create functionality for importing data from the 2019 World Cup.
from the following two links:
http://worldcup.sfg.io/matches and http://worldcup.sfg.io/teams/

Note that the import can be performed more than once, so it is necessary to do
functionality for both import and eventual data updates.

Based on the imported data, create a functionality that will return the JSON with the following data
and in the same format: http://worldcup.sfg.io/matches but sorted by temperature (warmest to coldest).

Based on the imported data, create a functionality that will return JSON with the following data and 
in the same format: http://worldcup.sfg.io/teams/results

Pay attention to scalability - a significant increase in the amount of data (million times), adding
new data types and the like.

The project can be done using pure php or using libraries and frameworks.

What will be evaluated is:
-optimization and clarity of SQL queries
-optimization and clarity of PHP code (OOP)
-base design


returned JSON data:

http://127.0.0.1:8000/matches-json
http://127.0.0.1:8000/teams-json




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


<p> You can see returned JSON data on foloving links:
    http://127.0.0.1:8000/matches-json
    http://127.0.0.1:8000/teams-json
</p>





