# TraineeBee
This is the repository for our project TraineeBee


## Made by:
* Abbey
* Racheal
* Niels
* Jorden
* Liam
* Joshua
* Josh
* Thom
* Parsa
* Eefje
* Nathan
* Kadir
* Dave

## Supported by:
* MBORijnland
* Plymouth City College

## To install
You need to have a local server with a database.
Change the values in the env. file to your local variables.



You need to open powershell (or cmd) in the main folder of the app.
Then you do:
```  
php artisan migrate:install
```  
to install the migrate tables in your database.

Then you do:
```
php artisan migrate
```
to install the tables in your database.

You are now finally setup and you can put in:
```
php artisan serve
```
If you now go to:
```
localhost:8000 or 127.0.0.1:8000
```
You can now see your app.
