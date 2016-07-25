# Welcome to the setup file of the webinterface-fedict project!



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
