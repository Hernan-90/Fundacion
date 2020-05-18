Para hacer funcionar el proyecto, luego de realizar el pull hacer lo siguiente en el comando:

1 - composer install / para instalar las librerias

Luego duplicar el archivo ".env.example" de la raiz y renonmbrarlo a ".env" y poner lo siguiente:

2 - php artisan key:generate

Por ultimo corremos el siguiente comando:

3- php artisan migrate

Esto va a permitir migrar las tablas a la base de datos, para que ya puedan empezar a agregar informacion.

No hay seeds, ni factories.