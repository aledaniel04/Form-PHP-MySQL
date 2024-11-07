# formulario hecho con PHP y MySQL

Este proyecto es un formulario hecho para el Dane(Departamento Administrativo Nacional de Estadística) el cual fue desarrollado con HTML y CSS para el diseño visual. Utiliza PHP para 
conectarse a una base de datos MySQL, permitiendo almacenar y mantener la información ingresada. Esto garantiza la persistencia de los datos, que luego pueden visualizarse en un resumen 
de las respuestas obtenidas a través del formulario.

## Requisitos

1- Debes instalar un servidor local como XAMPP, WAMP o MAMP (para Mac) para ejecutar PHP y MySQL en tu máquina.

2- Asegúrate de que el servidor de MySQL esté activo en XAMPP u otro servidor local.

3- PHP debe estar instalado y habilitado en el servidor local, si estás usando XAMPP, PHP ya estará incluido.

4- Cualquier navegador web moderno (Chrome, Firefox, Edge) para acceder a la interfaz del proyecto.

5- Se recomienda utilizar un editor de texto como Visual Studio Code, Sublime Text o PHPStorm por si quieres personalizar el codigo.

## Uso

1- Clona el repositorio en la carpeta htdocs de XAMPP (o en la carpeta equivalente si usas otro servidor local).

2- Abre el archivo de configuraciones (enviar_datos.php) y actualiza las credenciales de la base de datos, incluyendo el nombre de la base de datos, el usuario y la contraseña.

3- Ingresa a MySQL desde el panel de control de XAMPP y crea la base de datos con el mismo nombre que especificaste en el archivo de configuraciones.


## Estructura del Proyecto

- `index.php`: Archivo principal que muestra el formulario en el navegador.
- `enviar_datos.php`: Este archivo gestiona la conexión con la base de datos y envía los datos del formulario a la base de datos tras la configuración correspondiente.
- `mostrar_datos.php`: Archivo que muestra todos los datos registrados en una tabla, permitiendo al usuario visualizar en tiempo real la información almacenada.
- `style.css`: Contiene todos los estilos necesarios para el diseño del proyecto.

## Capturas

| ![image](https://github.com/user-attachments/assets/2af2e859-f9b3-43e8-bce3-02e02af8d5c9)(index.php) |  ![image](https://github.com/user-attachments/assets/f07860f6-f34c-459b-ae2a-54c3025048a0)(index.php) |
| :---: | :---: |
| ![image](https://github.com/user-attachments/assets/9a9ebf6a-cd63-46e2-a157-c21e3d59e3f7)(index.php) | ![image](https://github.com/user-attachments/assets/57e91319-755f-4364-8185-557080920d09)(mostrar_datos.php) |


## Tecnologías utilizadas

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

![PHP](https://img.shields.io/badge/PHP-blue?style=for-the-badge&logo=php&logoColor=white)

![MySQL](https://img.shields.io/badge/MySQL-%234479A1?style=for-the-badge&logo=mysql&logoColor=white)
