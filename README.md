# PHP Sandbox
An easy to stand up Dockerized environment with PHP, Composer, PHPUnit, Mockery, and Xdebug.

The goal is to be able to run PHPUnit tests easily and debug them. 

## Getting Started
### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Start the Container
``` sh
docker compose up -d --build
```

### Install Composer Dependencies
``` sh
./bin/composer install
```

### Run the Tests
``` sh
./bin/phpunit
```

### Stop the Container
``` sh
docker compose down --remove-orphans
```

## GitHub Action Workflow
A GitHub Action Workflow is included that will run the tests when a pull request is opened or a push occurs to `master` or `develop`.

## Configuration
PHP
- The PHP image is configured using the `Dockerfile` with any additional configuration settings in the `docker/php/config` directory.

PHPUnit
- `src/phpunit.xml`

Xdebug
- `docker/php/config/xdebug.ini`

## Scripts
These are located in `/bin` and are intended to be shorthand for running commands within the PHP container.

Examples:
``` sh
./bin/phpunit --list-tests
``` 
``` sh
./bin/composer require --dev phpunit/phpunit
```
Reference Docs
- [PHPUnit CLI](https://docs.phpunit.de/en/10.5/textui.html#command-line-options)
- [Composer CLI](https://getcomposer.org/doc/03-cli.md)
