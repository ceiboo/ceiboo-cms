# Ceiboo cms
Skeleton base

### Instalación ###
* `docker-compose build ceiboo-cms`
* `docker-compose up -d`
* `docker-compose exec ceiboo-cms composer update`
* `docker-compose exec ceiboo-cms php artisan key generate`

### Para tener acceso al endpoint del docker a la app ###
En tu archivo /etc/hosts incluir las siguientes lineas
* `127.0.0.1 api.ceiboo.jla`

- Test de instalación en navegador:
* `http://api.ceiboo.jla/api/status`

### Importar datos de correo ###
* `docker-compose exec ceiboo-cms php artisan migrate:fresh`


### Otros comandos ###
Para bajar los dockers
* `docker-compose down`
