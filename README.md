

## Running the app using laravel sail

I have used laravel sailed to bring up mysql,redis, mailhog containers for development purpose only:

## steps to setup laravel app locally

- Clone the repository
- Run composer install 
-  Copy .env.example to .env if required
-  Bring up laravel app by using laravel sail using ./vendor/bin/sail up
-  Run chmod +x postInstall.sh 
-  Run ./postInstall.sh
-  Send an POST request using POSTMAN to  http://localhost/api/v1/inquiry
-  POST request body should contain subject,message  
-  Go to mailhog locally -  http://localhost:8025/  to see the emails.

