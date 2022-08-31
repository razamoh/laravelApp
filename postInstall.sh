./vendor/bin/sail artisan migrate:fresh
./vendor/bin/sail artisan db:seed
clear
./vendor/bin/sail artisan queue:work