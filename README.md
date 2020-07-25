Instrucciones de Instalación

1.	Clonar el repositorio
2.	En la carpeta de la aplicación “apiAlmacen” corremos el comando:
a.	composer update
3.	Creamos el archivo .env copiando los datos de .env.example, y luego editamos los datos correspondientes a la BD; DB_DATABASE, DB_USERNAME, DB_PASSWORD.
4.	En la carpeta de la aplicación “apiAlmacen” corremos los siguientes comandos:
a.	php artisan key:generate
b.	php artisan migrate
c.	php artisan db:seed
d.	php artisan passport:keys
e.	php artisan passport:client --personal


