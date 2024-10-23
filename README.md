# LAMP stack built with Docker Compose
## A basic LAMP stack environment built using Docker Compose. It consists of the following:
* PHP
* MySQL
* PhpMyAdmin
* Redis

## Installation

- Clone this repository on your local computer
- configure .env as needed
- Run the `docker compose up -d`.

```shell
git clone https://github.com/sprintcube/docker-compose-lamp.git
cd docker-compose-lamp/
cp sample.env .env
// modify sample.env as needed
docker compose up -d
// visit localhost
```

## Configuration and Usage
### General Information

This Docker Stack is build for local development and not for production usage.

### Configuration

This package comes with default configuration options. You can modify them by creating `.env` file in your root directory.
To make it easy, just copy the content from `sample.env` file and update the environment variable values as per your need.

### Configuration Variables

There are following configuration variables available and you can customize them by overwritting in your own `.env` file.

---

#### PHP

---

_**PHPVERSION**_
Is used to specify which PHP Version you want to use. Defaults always to latest PHP Version.

_**PHP_INI**_
Define your custom `php.ini` modification to meet your requirments.

---

#### Apache

---

_**DOCUMENT_ROOT**_

It is a document root for Apache server. The default value for this is `./www`. All your sites will go here and will be synced automatically.

_**APACHE_DOCUMENT_ROOT**_

Apache config file value. The default value for this is /var/www/html.

_**VHOSTS_DIR**_

This is for virtual hosts. The default value for this is `./config/vhosts`. You can place your virtual hosts conf files here.

> Make sure you add an entry to your system's `hosts` file for each virtual host.

_**APACHE_LOG_DIR**_

This will be used to store Apache logs. The default value for this is `./logs/apache2`.

---

#### Database

---

> For Apple Silicon Users:
> Please select Mariadb as Database. Oracle doesn't build their SQL Containers for the arm Architecture

_**DATABASE**_

Define which MySQL or MariaDB Version you would like to use.

_**MYSQL_INITDB_DIR**_

When a container is started for the first time files in this directory with the extensions `.sh`, `.sql`, `.sql.gz` and
`.sql.xz` will be executed in alphabetical order. `.sh` files without file execute permission are sourced rather than executed.
The default value for this is `./config/initdb`.

_**MYSQL_DATA_DIR**_

This is MySQL data directory. The default value for this is `./data/mysql`. All your MySQL data files will be stored here.

_**MYSQL_LOG_DIR**_

This will be used to store Apache logs. The default value for this is `./logs/mysql`.

## Web Server

Apache is configured to run on port 80. So, you can access it via `http://localhost`.

#### Apache Modules

By default following modules are enabled.

- rewrite
- headers

> If you want to enable more modules, just update `./bin/phpX/Dockerfile`. You can also generate a PR and we will merge if seems good for general purpose.
> You have to rebuild the docker image by running `docker compose build` and restart the docker containers.

#### Connect via SSH

You can connect to web server using `docker compose exec` command to perform various operation on it. Use below command to login to container via ssh.

```shell
docker compose exec webserver bash
```

## PHP

The installed version of php depends on your `.env`file.

#### Extensions

By default following extensions are installed.
May differ for PHP Versions <7.x.x

- mysqli
- pdo_sqlite
- pdo_mysql
- mbstring
- zip
- intl
- mcrypt
- curl
- json
- iconv
- xml
- xmlrpc
- gd

> If you want to install more extension, just update `./bin/webserver/Dockerfile`. You can also generate a PR and we will merge if it seems good for general purpose.
> You have to rebuild the docker image by running `docker compose build` and restart the docker containers.

## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.

http://localhost:8080/  
username: root  
password: tiger

## Xdebug

Xdebug comes installed by default and it's version depends on the PHP version chosen in the `".env"` file.

**Xdebug versions:**

PHP <= 7.3: Xdebug 2.X.X

PHP >= 7.4: Xdebug 3.X.X

To use Xdebug you need to enable the settings in the `./config/php/php.ini` file according to the chosen version PHP.

Example:

```
# Xdebug 2
#xdebug.remote_enable=1
#xdebug.remote_autostart=1
#xdebug.remote_connect_back=1
#xdebug.remote_host = host.docker.internal
#xdebug.remote_port=9000

# Xdebug 3
#xdebug.mode=debug
#xdebug.start_with_request=yes
#xdebug.client_host=host.docker.internal
#xdebug.client_port=9003
#xdebug.idekey=VSCODE
