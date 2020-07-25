<h4>Instrucciones de Instalación</h4>

<p>1.	Clonar el repositorio</p>
<p>2.	En la carpeta de la aplicación “apiAlmacen” corremos el comando:</p>
	<ul>
		<li> composer update</li>
	</ul>
<p>3.	Creamos el archivo .env copiando los datos de .env.example, y luego editamos los datos correspondientes a la BD; DB_DATABASE, DB_USERNAME, DB_PASSWORD.</p>
<p>4.	En la carpeta de la aplicación “apiAlmacen” corremos los siguientes comandos:</p>
	<ul>
		<li> php artisan key:generate</li>
		<li> php artisan migrate</li>
		<li> php artisan db:seed</li>
		<li> php artisan passport:install</li>
	</ul>

<p>5. Usuarios predefinidos por el sistema, todos con la contraseña: 123456</p>
	<ul>
		<li>proveedor@gmail.com</li>
		<li>almacen@gmail.com</li>
		<li>cliente@gmail.com</li>
	</ul>

<p>6. Rutas del sistema</p>
<table>
	<tr>
		<th>Ruta</th>
		<th>Tipo</th>
		<th>Parametros</th>
	</tr>
	<tr>
		<td>/api/auth/login</td>
		<td>post</td>
		<td>email, password, remember_me</td>
	</tr>
	<tr>
		<td>/api/packages/proveedor</td>
		<td>post</td>
		<td>id_cliente, address</td>
	</tr>
	<tr>
		<td>/api/packages/almacen/index</td>
		<td>get</td>
		<td>--</td>
	</tr>
	<tr>
		<td>/api/packages/almacen/{code}</td>
		<td>put</td>
		<td>sent (0 ó 1)</td>
	</tr>
	<tr>
		<td>/api/packages/cliente/{code}</td>
		<td>get</td>
		<td>--</td>
	</tr>
	<tr>
		<td>/api/packages/cliente/{code}</td>
		<td>put</td>
		<td>delivered (0 ó 1)</td>
	</tr>

</table>


