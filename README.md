# LightSlim PHP micro framework

[![StyleCI](https://styleci.io/repos/100354885/shield?branch=master)](https://styleci.io/repos/100354885)
[![Maintainability](https://api.codeclimate.com/v1/badges/d315b097cae7f4d0ca0f/maintainability)](https://codeclimate.com/github/twn39/lightslim/maintainability)

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application with Eloquent ORM. 
## Install the Application

Run this command from the directory in which you want to install your new LightSlim Framework application.

    php composer.phar create-project lightslim/lightslim [app-name]

Replace `[app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start

That's it! Now go build something cool.
