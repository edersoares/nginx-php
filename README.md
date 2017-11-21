# Nginx + PHP using Docker containers
A docker-compose structure for using a PHP application served by Nginx.

## Requirements
Before use, you need:

- Git https://git-scm.com/
- Docker https://www.docker.com/get-docker
- Docker Compose https://docs.docker.com/compose/install/

## Usage

Just run in terminal:

```bash
# clone the repository
git clone https://github.com/edersoares/nginx-php.git
cd nginx-php

# execute the container
docker-compose up
```
And access http://localhost to see the PHP Version x.x.x installed.

## Application

To use your PHP application, replace the code in `application` folder. By default, the `application/public` is the root path for the server.