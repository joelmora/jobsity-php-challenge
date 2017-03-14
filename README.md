## Installation Instructions ##

Project was made with **Symfony2** framework, you should follow this instructions in order to run the project.

### 1. Clone repository ###

You may want to clone this github repository by using:
`git clone https://github.com/joelmora/jobsity-php-challenge.git`

After this you should run:

`#chown -R www-data:www-data /var/www/joel_mora` to give permission to apache user

_(NOTE: This instructions are made to be used on an apache server, any other method to install a symfony project it should work)_

### 2. Run SQL ###
Run SQL file located in **sql/joel_mora.sql**, it will create database and some test data.


### 3. Configure Database Credentials ###
Modify file **/var/www/joel_mora/app/config/parameters.yml** and set the MySQL parameters:

    database_user: YOUR_DB_USER
    database_password: YOUR_DB_PASSWORD

You may want to configure `database_host` and `database_port` depending of your needs.

### 4. Configure virtual host (optional) ###

**4.1.** Modify **/etc/hosts** file:

Run: `# nano /etc/hosts` and add the following line:

    127.0.0.1  joel_mora.jobsitychallenge.com  

**4.2.** Create virtual host file:

Run `# nano /etc/apache2/sites-enabled/001-joel-mora` and add the following lines:

	<VirtualHost *:80>
	    ServerName      joel_mora.jobsitychallenge.com
	    ServerAlias     www.joel_mora.jobsitychallenge.com
	
	    DocumentRoot    "/var/www/joel_mora/web"
	
	    <Directory "/var/www/joel_mora/web">
	        DirectoryIndex  app.php
	        Options -Indexes FollowSymLinks SymLinksifOwnerMatch
	        AllowOverride All
	        Allow from All
	    </Directory>
	
	    ErrorLog ${APACHE_LOG_DIR}/error-joelmora.log
	</VirtualHost>


**4.3.** Restart apache:

Run `# services apache2 restart`


### 5. Clear cache for production enviroment ###
Inside the project folder, run:

`# php app/console cache:clear –-env=prod`



### 6. Access the project url ###

Open a browser and access to `http://joel_mora.jobsitychallenge.com/` (if you followed the 4th step) otherwise access to `http://localhost/joel_mora/web/`.

If everything is correct you should see the project up and running!

![Image Project Running](https://s3-us-west-2.amazonaws.com/joelmora/ProjectRunning.PNG)

### 7. Test data ###

Test data has been provided, some of the registered users are `joelmora`, `albani` and `andres`, all this users has password= `123456`.

*NOTE:* `joelmora` and `albani` have valid twitter users, `andres` has an invalid one.
