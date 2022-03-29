<ol>
    <li>Installare Composer</li>
    <li>git clone https://github.com/N0TICS00/full-stack.git</li>
    <li>composer install</li>
    <li>npm install</li>
    <li>rinomina il file .env.example in .env</li>
    <li>Rimpiazza le credenziali del file .env con queste
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE= yourDatabaseName
    DB_USERNAME= yourRootUsername
    DB_PASSWORD= yourPassword</li>
    <li>php artisan migrate:fresh</li>
    <li>php artisan -serve</li>
</ol>