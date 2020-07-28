# INSTRUCTIONS TO FOLLOW AFTER CLONING THIS REPO

# ASSUMING THAT YOU ALREADY HAVE PHP INSTALLED OR FULL STACK WEB DEVELOPMENT ENVIRONTMENT RUNNING ON YOUR LOCAL MACHINE

1. Create a new .env file
2. Copy .env.example content into newly created .env file
3. Change Database Credentials, etc.. inside .env file that match your local database credentials
4. Create you database name in your mysql server
5. Run `$ componer install`
6. Run `$ npm install`
7. Run the database migration `$ php artisan migrate`
8. Run `$ php artisan serve`
9. navigate to the browser and type in address bar `localhost:8000`