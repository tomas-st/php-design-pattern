start:
	docker-compose up -d

stop:
	docker-compose down 

restart:
	docker-compose down 
	docker-compose up -d

bash:
	docker-compose exec patternstest bin/bash