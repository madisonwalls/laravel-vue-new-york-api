## New York Crime Reporter API

New York is a big city, and many people are worried about certain areas and their level of safety. With this crime reporter, citizens can report crimes and update current ones if it has occurred multiple times. The crimes can also be deleted if needed. Users can also see data about crime in NYC and see the trend of decreased crimes.

Using Laravel as a framework, I created this application using Vue.js and PHP and users can access the required database through AJAX requests.

## Documentation

https://madisonwalls.gitbooks.io/new-york-city-crime/content/

## Required Programs


- Terminal
- Composer https://getcomposer.org/download/
- MAMP https://www.mamp.info/
- Laravel https://laravel.com/docs/5.4#installing-laravel

## How to Set Up the Website

1. Clone this repository
2. Using MAMP, change the 'Web Server' option under 'Preferences' to the public folder of 'laravel-vue-new-york-api'.
3. Change the port 8888
4. Start the Server
5. Open the WebStart page and navigate to http://localhost:8888/phpMyAdmin
6. Create a new database called 'app'
<img src="/public/img/database.png">
7. Using terminal, cd into the location of the downloaded repository
8. Run: php artisan migrate
9. Run: npm install
10. Run: npm run dev
11. Start using the site at http://localhost:8888!

<img src="/public/img/homepage.png">

## Credits

Creator:

 Madison Walls:
 http://www.madisonwalls.org
