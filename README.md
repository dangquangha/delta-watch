## About project 

This is a graduation project code by Dang Quang Ha who is student in Hanoi university of industry

## Install and run

To install and run the project please follow the steps below:

<b>Step 1: Clone project from github</b>
```
git clone https://github.com/dangquangha/delta-watch.git
cd delta-watch
```

<b>Step 2: Run composer and npm to install the necessary packages in the project</b>
```
composer install
npm install 
```

<b>Step 3: Build database and config database</b>
```
cp .env.example .env
```

Then you edit file .env
```
DB_CONNECTION=mysql          
DB_HOST=127.0.0.1            
DB_PORT=3306                 
DB_DATABASE=your_database       
DB_USERNAME=your_username             
DB_PASSWORD=your_password 
```

<b>Step 4: Generate key for project</b>
```
php artisan key:generate 
```

<b>Step 5: Run migrations and seeder to have data</b>
```
php artisan migrate
php artisan db:seed
```

