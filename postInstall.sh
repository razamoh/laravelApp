
./vendor/bin/sail artisan migrate:fresh
./vendor/bin/sail artisan db:seed
./vendor/bin/sail composer dump-autoload
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan queue:work