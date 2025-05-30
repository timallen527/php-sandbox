# PHP Sandbox
An easy to stand up Dockerized environment with PHP, PHPUnit, and Xdebug.

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
./bin/composer install
```

### Run the Tests
``` sh
./bin/phpunit
```

## Configuration
PHP
- The PHP image is configured using the `Dockerfile` with any additional configuration settings in the `docker/php/config` directory.

PHPUnit
- `src/phpunit.xml`

Xdebug
- `docker/php/config/xdebug.ini`
