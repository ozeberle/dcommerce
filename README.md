# Drupal commerce

##### Asumptions
Docker, docker-compose, Make (build-essential), Composer and Drush should be installed as global in your local.

## Installation

In the project root folder run "make" command in order to build the image.
```cmd
$ make
```
Start the container. 
```cmd
$ docker-compose up
```
Note: Add _-d_ in order to start the container in background: `docker-compose up -d`.

Create the database.
```cmd
$ make init
```

Update the default user credentials.
```cmd
$ make resetPassword
```

## How to run it?

Start the containers.
```cmd
$ docker-compose up -d
```
Go to http://localhost:8080 or http://localhost:8080/user/login for login to the administration panel.
