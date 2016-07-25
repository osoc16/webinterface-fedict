# Welcome to the setup file of webinterface-fedict!

## Pre-requirements

The following software should be installed: 
* [Node.js (NPM)](https://nodejs.org/en/)
* [Composer](https://www.npmjs.com/package/composer) which can be installed after NPM has been installed
inside a CMD/Terminal run: ``npm install composer`` .
* [PHP 7.0](http://php.net/)
* For development: [XAMPP](https://www.apachefriends.org/index.html) / [WAMPP](http://www.wampserver.com/en/) or any other web development environment.

## Install commands
* sudo apt-get install nodejs
* npm install composer


After cloning this web application, you still have to configure and install dependencies.
For using it locally it should be placed in C:\xampp\htdocs

Inside the root folder eg. **C:\..\webinterface-fedict** use the following commands:
* npm install
* composer install

If you run the webinterface locally you can browse to: 
[http://localhost/webinterface-fedict/dist/index.php](http://localhost/webinterface-fedict/dist/index.php)

Important note: When trying to run on unix environment chmod -R 777 might be needed.

## Hosting own ldf-server (optional)

# Install the server

You can install your own Node.js ldf-server with this command ``npm install -g ldf-server``.
 
# Configure the data sources

``Config.json`` is used to configure the data sources.
This is an example of our configuration file.
We have one concatenated DCAT file in turtle syntax.  
![](https://s31.postimg.org/oh8clpfwb/screenshot_datasource.png)

The important changes we've made in the config.json are the type and settings of the datasource.  

More information on: https://www.npmjs.com/package/ldf-server.

# Configure the ldf-client

Don't forget to change the reference to our ldf-server to yours inside the index.twig.   
`var fragmentsClient = new ldf.FragmentsClient('http://185.14.185.158:5000/triplestore');`   
Should become: `var fragmentsClient = new ldf.FragmentsClient('http://**yourldfservershomepage**');`


