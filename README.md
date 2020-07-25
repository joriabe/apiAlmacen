<h4>Instrucciones de Instalación</h4>

<p>1.	Clonar el repositorio</p>
<p>2.	En la carpeta de la aplicación “apiAlmacen” corremos el comando:</p>
	<li>a.	composer update</li>
<p>3.	Creamos el archivo .env copiando los datos de .env.example, y luego editamos los datos correspondientes a la BD; DB_DATABASE, DB_USERNAME, DB_PASSWORD.</p>
<p>4.	En la carpeta de la aplicación “apiAlmacen” corremos los siguientes comandos:</p>
<ul>
	<li>a.	php artisan key:generate</li>
	<li>b.	php artisan migrate</li>
	<li>c.	php artisan db:seed</li>
	<li>d.	php artisan passport:keys</li>
	<li>e.	php artisan passport:client --personal</li>
</ul>



