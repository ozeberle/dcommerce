image = dcommerce_apache2_php

all: docker

docker:
	docker build -t $(image) .

init:
	docker-compose exec -T apache2_php_commerce sh /docker-entrypoint.sh init

resetPassword:
	docker-compose exec apache2_php_commerce vendor/bin/drush user-password admin 123456
	@echo "New password: 123456"