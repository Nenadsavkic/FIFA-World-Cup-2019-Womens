# FIFA WorldCup for Women 2019.

Zadartak

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
