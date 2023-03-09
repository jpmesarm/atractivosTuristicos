# APLICACIÓN WEB PARA LA GESTIÓN DE FICHAS INFORMATIVAS DE ATRACTIVOS TURISTICOS 
## Indice de la documentación
1. Tecnología de desarrollo
2. Proceso de implementación
3. Estructura de directorios de la aplicación
4. Módulos de la aplicación


**TECNOLOGÍAS DE DESARROLLO**
> Para el desarrollo de esta aplicación se utilizaron la siguiente tecnología:
- Lenguaje de programación PHP Version 8.1.12
- Base  de datos Mysql, mysqli
- Servidor Web Apache

> Front-End:
- HTML 5
- CSS 3
- JavaScript


**PROCESO DE IMPLEMENTACIÓN**
> Para el proceso de implementación en un servidor de producción se necesita el siguiente proceso:

- Crear el usuario de la base de datos y asignación de permisos correspondientes
- Crear la base de datos en el servidor de producción
- Ejecular el .sql que se encuentra en el repositorio de github en la base de datos creada en el paso anterior
- Edicar el archivo config.php ubicado en el directorio  **_dll/config.php_** con los nuevos datos de la base de datos
- Cargar los archivos de la aplicación en el servidor web de producción 

**ESTRUCTURA DE DIRECTORIOS DE LA APLICACIÓN**
> La aplicación web esta compuesta con los siguientes directorios:

- **administrator/** Directorio conde se encuentra los archivos de la administración
- **dll/** Directorio con los archivos de configuración y gestión de la DB.
- **internas/** Directorio de los archivos del portal web que es accedido por todos los internautas
-  **images/** Directorio con los archivos multimedia del portal 
-  **css/** Directorio con las hojas de estilo del portal 
-  **index.html** Es el archivo principal que carga la aplicación web por parte del servidor web apache

**MÓDULOS DE LA APLICACIÓN**
> La aplicación web consta con los siguientes módulos:

- Portal web 
- Módulo de acceso a travez de lores
- Gestión de usuarios 
- Módulo de catalogos, Parroquias, Cantones y Provincias
- Módulo de la Ficha del atractivo tirístico 
- Módulo del perfil de usuario
- Cerrar sesión
