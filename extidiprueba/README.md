# Extidi




Extidi usa composer para controlar sus dependencias y temas.

## Uso

### Instalación desde composer

Para empezar un nuevo proyecto asegurese de que su equipo tenga [composer (global)](https://getcomposer.org/download/)
y github instalados y adem&aacute;s
[su contrase&ntilde;a est&eacute; cacheada en el sistema](https://help.github.com/articles/caching-your-github-password-in-git/).

Dir&iacute;gase a su [COMPOSER_HOME](https://getcomposer.org/doc/03-cli.md#composer-home) (cree la carpeta si no está en su sistema) y cree un archivo config.json con el siguiente contenido:
	
	{
	    "repositories": [
	        {
	            "type": "git",
	            "url":  "https://github.com/FundacionIDI/Extidi.git"
	        }
	    ]
	}

	
En su Document-Root local abra una consola y ejecute:

	composer create-project fundacionidi/extidi nombre-projecto dev-master

### Instalación descargando `master.zip`

Descomprima el archivo descargado, abra una terminal o consola en la carpeta y ejecute

        composer install

## Migraciones

Para instalar la base de datos b&aacute;sica de Extidi:

	php index.php cli/extidicmd migrate

Con esto queda configurado el superusuario con usuario `super` y contraseña `12345678`

[Intrucciones para migraciones con CodeIgniter](http://www.codeigniter.com/userguide2/libraries/migration.html)

## Agregando librerias.

Si se requiere incorporar una libreria solo es necesario agregarla a composer.json.

#### Ejemplo con PHPExcel 1.8.0

En composer.json 
	
    "require": {
        "fundacionidi/extjs": "dev-master",
        
        "phpoffice/phpexcel": "1.8.0"

    }

Luego ejecute `composer update` para descargar la libreria (que se ubicar&aacute; bajo la carpeta vendor).
Desde cualquier parte de la aplicaci&oacute;n puede utilizar la libreria, siempre que tenga encuenta el namespace.

	$phpexcel = PHPExcel_IOFactory::createReader('Excel2007');


### TODO
- Explicacion dependencias composer.json
