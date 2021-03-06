# fish
### A basic phishing app implemented in laravel for spreading awareness on how easy it is.
### Inspired by https://github.com/Rohitms/easyphishfb
### Requirements
* [Composer](https://getcomposer.org/download/)
* A VM environment like 'homestead' to host it on (I ended up using [xampp](https://www.apachefriends.org/index.html) cause of homestead's stupidly slow server download bandwidth)
* [VC++ redist 2015](https://www.microsoft.com/en-in/download/details.aspx?id=48145)
* A good Text Editor ([Atom](https://atom.io)/[VSCode](https://code.visualstudio.com)/[Sublime](https://www.sublimetext.com))


## Setting up a laravel project/app from github
* clone from git using `$ git clone https://github.com/spell1612/fish.git <foldername>` (Foldername optional. Defaults to repo name)
* cd into folder with `$ cd <foldername>` or `$ cd fish` by default
* create new env file by using `$ cp .env.example .env`
* Setup your local environment (create a database etc...)
* Enter your environment details in the .env file
* grab the dependancies with `$ composer update`
  - dependancies can be defined in the composer.json file
* migrate the db changes using `$ php artisan migrate`
* `$ php artisan serve` to run the app at localhost:8000

## Routes
`/dbshow` to access database view (you have to manually type in that route in the browser)

**I suggest removing the register feature by overriding the respective route functions in the auth/RegisterController after 1 or 2 accounts have been made.
As shown [here](https://stackoverflow.com/questions/29183348/how-to-disable-registration-new-user-in-laravel-5)**
