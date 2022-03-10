#Make database
php artisan migrate

#Seeder
php artisan db:seed

#Make storage
php artisan storage:link
mkdir public/storage/images
cp public/images/seeder/* public/storage/images