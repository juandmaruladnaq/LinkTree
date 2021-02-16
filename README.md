# PROGRAMA LINKTREE

esta pagina permite que compartas tus redes sociales y sitios de interes de manera rapida,
ya que puedes agrupar todo en una misma parte

## INSTALACIÓN

el repositorio de este programa se puede encontrar en mi pagina de [GITHUB](https://github.com/juandmaruladnaq/LinkTree) 

luego de descargar el programa del repositorio debes instalar los paquetes necesarios con los siguientes comandos

```bash
$ composer require laravel/ui # Instalar el módulo laravel/ui en el proyecto.
$ php artisan ui bootstrap --auth # Generar el scaffolding (formularios) basado en Bootstrap.
$ npm install && npm run dev # Instalar y compilar las dependencias del módulo.

```

tambien es necesario que cambies los datos de la database en el archivo .env en los siguientes campos:

```bash
…
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<NOMBREDB>
DB_USERNAME=<NOMBREUSR>
DB_PASSWORD=<CONSTRASEÑA>
…


```


## USAR

para usar este proyecto debes correr el siguiente  comando
```bash
php artisan service --host=0.0.0.0
```
luego entras a tu navegador a la siguiente [ruta](http://localhost:8000/)

por ultimo enciende tu base de datos mysql que previamente configuraste con el siguiente comando:
```bash
sudo service mysql start
```

## Colaboradores
este software fue creado bajo el modelo y usandose como plantilla un proyecto base de el repostorio de [GITHUB](https://github.com/jimezam/linktree/commits/master) del maestro Jorge Ivan Meza.
## Licencia
[doc](http://simplesolutions.com.co/wp-content/uploads/2018/05/Licencia-de-Uso-de-Software-Focuss-SCM.pdf)