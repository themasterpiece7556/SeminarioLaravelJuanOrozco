# 1. Suba este repositorio a tu cuenta de GitHub (público, agregando al docente
como colaborador).
# 2. Toma una captura de pantalla donde se vea:
o La terminal mostrando docker-compose up -d exitoso.
![alt text](image.png)
o El navegador en http://localhost:8080 mostrando el phpinfo().
![alt text](image-3.png)
o El navegador en http://localhost:8081 mostrando el login de
phpMyAdmin.
![alt text](image-1.png)
# 3. Agregar las capturas al informe del seminario (proyecto de grado) en la sección
# Actividad 1
## Pagina http://localhost:8080/sintaxis-variables/

![alt text](image-6.png)
# Actividad 2
![alt text](image-5.png)
# Actividad 3
![alt text](image-7.png)
# Axtividad 4
![alt text](image-8.png)
# Actividad 5
![alt text](image-9.png)
# Actividad 6
![alt text](image-11.png)
# Actividad 7
![alt text](image-10.png)
# Actividad 8
![alt text](image-12.png)
# Actividad 9
![alt text](image-13.png)
## Estructura del Proyecto

La arquitectura del proyecto está organizada de la siguiente manera:

* **`index.php` (Enrutador Frontal):** Actúa como el punto de entrada único de la aplicación. Captura los parámetros `$_GET['action']` y redirige el flujo al controlador correspondiente.
* **Modelos (`/models`):** Contiene la lógica de negocio y las consultas a la base de datos (por ejemplo, `UserModel.php`). Se encarga de las operaciones CRUD (Select, Insert, Delete).
* **Controladores (`/controllers`):** Intermediario entre el Modelo y la Vista (por ejemplo, `UserController.php`). Recibe las peticiones del usuario, interactúa con el modelo para obtener o modificar datos y carga la vista final.
* **Vistas (`/views`):** Archivos que contienen el código HTML y Bootstrap encargado de mostrar la interfaz al usuario final (ej. la lista de usuarios y el formulario de creación).