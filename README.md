# PHP Sandbox
An easy to stand up Dockerized environment with PHP, PHPUnit, and XDebug.

## Getting Started
### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Start the Container
``` sh
docker compose up -d --build
```

### Stop the Container
``` sh
docker compose down --remove-orphans
```

### Install Composer Dependencies
``` sh
docker compose run composer install
```

### Update Composer Dependencies
``` sh
docker compose run composer update
```

### Create the autoload file
``` sh
docker compose run composer dump-autoload
```

### Run the Tests
This script runs the PHPUnit tests within the PHP container and accepts parameters.
``` sh
./bin/phpunit
```

## Configuration

- PHP
  - The PHP image is configured using the `Dockerfile` with any additional configuration settings in the `config` directory.
- PHPUnit
  - `phpunit.xml`
- Xdebug
  - `docker/php/config/xdebug.ini`
