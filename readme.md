# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

SNTMedia Challenger. 
 
<p>Using Laravel Framework to build this project. 
In this project, I use sqlite for database. </p>
<p>First,</p>
  <p>php artisan migrate   -- to migrate the tables into sqlite. There are 4 tables in this project that i created. "Address", "Lisintg", "Photo", and "MLS"
  If, to check that you have sqlite installed, type "sqlite3". 
  If your laptop dont have sqlite installed. type "homebrew install sqli" to install. </p>
<p>Second,</p> 
  <p>To import the data into database (sqlite). I already have 4 import files for each individual tables. I use the feature which already have in laravel package Database Seeder. </p>
  Type  "composer dump-autoload" </br>
  then, "php artisan db:seed" </br>
  After this you will have all the database environment setting up for you. 
<p>Third, </p>
to make you that you have the right version. Do "composer update". It will get the latest version of composer for you to run this project.</br>
<p>Fourth, </p>
to check the result. </br>
  Type, php artisan serve </br>
  Then, access by this link. 
  
      http://localhost:8000/all  -- show all listing.
      
      http://localhost:8000/price?priceSort=1  -- 1-DESC
      http://localhost:8000/price?priceSort=2  -- 2-ASC
      
      http://localhost:8000/updateListing -- To show all listing updates. 
                --update Listing No.1 with 'PropertyType' => 'Commercial','Bathrooms' => 10
                --update Listing No.2 with Bedrooms' => 5,'Bathrooms' => 3
                --update Listing No.3 with 'ListPrice' => '300000'
                --update Listing No.4 with 'PropertyType' => 'Residential'
                --update Listing No.5 with 'PropertyType' => 'Commercial','Bedrooms' => 4
      
      http://localhost:8000/photo -- show all Photo
      
<p>Fifth, </p> 
to check the schedule that you will every 2AM in the morning, </br>
  I added, </br>
    "* * * * * php /Users/bao/Documents/Challenger/artisan schedule:run 1>> /dev/null 2>&1" in crontab file. </br>
    so every minites it will run "php artisan schedule:run" in my localmachine to run all the command that i scheduled. </br>
  Then, added </br>
    "$schedule->command('db:seed')->dailyAt('2:00');" --in app/Console,Kernal.php </br>
  This is new things in laravel 5.2 It will help us schedule our job. So with that commmand, in every day at 2AM. It will run the command "php artisan db:seed" for me to seed all the data into sqlite database that i have.  </br>
      

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

You can send me an email at bao.luu@sntmedia.com if you have any question.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
Copyright Bao-SNTmedia
