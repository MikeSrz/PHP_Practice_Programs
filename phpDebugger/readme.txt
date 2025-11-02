INSTRUCCIONES PARA EJECUTAR CONTENEDOR PHP CON DEBUGGER:

Requerimientos:
1. Tener un directorio con código php.
2. Tener instaladas las herramientas docker y docker-compose Link=> https://github.com/docker
3. Navegador

Paso a paso:
1. Clonar o descargar esta carpeta del repositorio.
2. Ejecutar los comandos 
	docker-compose build . #Construye la imagen del Dockerfile
	docker-compose up #Levanta el conteneddor
	#El puerto 80 del contenedor estará mapeado en el puerto 9999[Editable]

Ahora, utilizando la extensión de depuración PHP de VSCode puedes depurar el fichero de código php que elijas, con vscode ábrelo, pincha en la pestaña de depuración de vscode, abre a su vez, el navegador buscando por http://localhost:9999/fichero.php

Tendrás que configurar launch.json para VsCode con el contenido de launch.json de esta misma carpeta.
