<p align="center"><a href="https://github.com/theHocineSaad/linatabra3" target="_blank"><img src="https://i.imgur.com/9Kv6TtZ.png"></a></p>


------------


[![Linatabara3 home page in Arabic](https://i.imgur.com/2wONroz.jpg "Linatabara3 home page in Arabic")](https://github.com/theHocineSaad/linatabra3 "Linatabara3 home page in Arabic")


------------


[![Linatabra3 home page in French](https://i.imgur.com/c0cm8pK.jpg "Linatabra3 home page in French")](https://github.com/theHocineSaad/linatabra3 "Linatabra3 home page in French")

## What is Linatabara3?
Linatabara3 is "**لنتبرع**" written with latin alphabets, which is an Arabic word that means "**let's donate**".

Linatabara3 is an open source blood donation platform that connects blood seekers with blood donors in their region.

**I used Laravel 9 and Bootstrap.**

## How it works?
- **For blood donors:** they register using their phone number, blood group, address...
- **For blood seekers:** they do a quick search where they choose the blood group and the region, then they will get a list of donors with their phone number.

## Just Arabic and French?
I created this platform to launch it first in Algeria (My country ❤) that's why I used Arabic and French (they are the most used languages in Algeria).
I also used Algerian Provinces and Districts.

**We welcome every contribution to make this platform dynamic and multinational.**

## Installation
#### Step1 - Clone the project
`git clone https://github.com/theHocineSaad/linatabra3.git`

#### Step 2: Configure the Environment
Rename .env.example to .env and fill it.
- Database info.
- noCaptcha SITEKEY and SECRET, for the reCaptcha in register page, get them from: https://www.google.com/recaptcha/admin.
- Mail info, for forgot password feature.

#### Step 3: Run the following commands
    composer install
    php artisan migrate
    php artisan db:seed
    php artisan key:generate
    npm install

#### Step 4: Run the server
`php artisan serve`

#### Factories
The project has a User factorie.


    php artisan tinker
    \App\Models\User::factory(1999)->create();
Change **1999** to the number of users you want.

#### Contributing
Thank you for considering contributing to Linatabara3 project! Feel free to contribute in any way, we welcome every contribution.

#### License
Linatabara3 project is open-sourced software licensed under the [MIT license.](https://github.com/theHocineSaad/linatabra3/blob/main/LICENSE "MIT license.")
