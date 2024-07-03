# Proyecto Web 05
Sitio web que muestra y describe información de los servicios de un restaurante

Sitio web creado con las siguientes herramientas a nivel de front-end y back-end:

- **HTML:**	Permite crear la estructura del sitio web mediante etiquetas
- **CSS:**	Para definir y crear la presentación del sitio web
- **JavaScript:**	Añade características que permite agregar e implementar acciones interactivas al sitio web
- **Bootstrap:**	Herramienta utilizada para complementar las hojas de estilo CSS y personalizar la apariencia del sitio web
- **PHP:**	Favorece la conexión entre los servidores y la interfaz de usuario

Este sitio web fue creado y desarrollado usando la plataforma **NetBeans 12.0.** Además está adaptado para ejecutarse en dispositivos móviles, como teléfonos, tablets, portátiles y computadoras de escritorio.

El archivo **index.php** es el que contiene la página de inicio o página principal del sitio web

El sitio web en su totalidad consta de tres secciones: 
- **Un encabezado:** donde se muestra el logotipo de la organización y el menú principal
- **Una sección principal:** el cual consta de cuatro partes:
   - La primera parte consta de una presentación del negocio a través de imágenes
   - La segunda parte consta del menú de especialidades que ofrece el restaurante a sus clientes. Estos incluyen aperitivos, pizzas, pastas, hamburguesas, sándwiches, hotdogs, bebidas, postres, entre otros
   - La tercera parte consta de una sección donde el negocio cuenta la reseña histórica de su creación
   - La cuarta parte consta de un formulario donde el usuario puede realizar sus comentarios acerca de su visita al restaurante
- **Un pie de página:** que muestra la información de contacto del negocio

En relación con el menú de especialidades, cada vez que el usuario ingresa a cada opción se encontrará con el detalle de los productos que el restaurante ofrece a sus clientes. Para efectos de este proyecto, se han creado diseños diferentes en cada página para no mostrar un patrón repetitivo

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript como validaciones del lado del servidor programadas con el lenguaje de programación PHP.

Para enviar la información del usuario a través del formulario de contacto se utiliza una herramienta llamada **PHPMailer.** Esta es una biblioteca de código abierto para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web. Además está basada en el componente active server ASPMail y permite de una forma sencilla tareas complejas como por ejemplo:
- Enviar mensajes de correo con ficheros adjuntos (attachments) 
- Enviar mensajes de correo en formato HTML 
- Enviar emails vía sendmail, PHP mail(), o con SMTP.

Finalmente, se utiliza una librería JavaScript llamada **SweetAlert2** para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente en el formulario fueron enviados al buzón de correo del restaurante de forma correcta o incorrecta.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![01  inicio_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/b5d08eac-155b-4861-a32b-40b25a2d73a9)
**==========================================================================**
![01  inicio_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/72b7bd6b-6c88-4fcf-b90b-4ff3d865c348)
**==========================================================================**
![01  inicio_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/e72cc75d-ff4a-4e67-8c82-2ba0a6ef0a9b)
**==========================================================================**
![01  inicio_4](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/605f3e2d-50d6-49c2-a1ad-8e65b7e84463)
**==========================================================================**
![01  inicio_5](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/bd59be9a-8f15-4998-b09d-98e0bfe7eac4)
**==========================================================================**
![01  inicio_6](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/29c56df9-50fc-4a16-8140-17aa8bbd15f2)
**==========================================================================**
![01  inicio_08](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/0813ed6c-e44c-42ac-8e0a-3e0f08941019)
**==========================================================================**
![01  inicio_7](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/0b7ab795-3ee3-4680-b366-7a385b68a576)
**==========================================================================**
![01  inicio_09](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/60e2fae4-af7c-4628-8d4b-aa2b8f686eb6)
**==========================================================================**
![02  aperitivos_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/3e1050e7-c8f3-4db3-8ad6-766cf34cc26a)
**==========================================================================**
![02  aperitivos_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/125c9942-a2d6-451b-816b-cc78310e584d)
**==========================================================================**
![03  pizzas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/1dd62774-7e78-42fb-9f07-3db9b88a7b8e)
**==========================================================================**
![03  pizzas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/ca94b9e3-974d-41c7-8e53-fce073dd5c1d)
**==========================================================================**
![04  pastas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/b895cdbe-c0a1-408e-9d58-35f8e26add14)
**==========================================================================**
![04  pastas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/2ee025b9-f5d2-478f-868a-a36b546159cb)
**==========================================================================**
![05  hamburguesas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/2d049034-a98c-447a-a2a7-8f6ae94c004c)
**==========================================================================**
![05  hamburguesas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/c9d22df6-2b0b-4e0e-a39e-44ef42e149c5)
**==========================================================================**
![05  hamburguesas_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/6b12711d-30f3-447b-b964-c5f8cf441c72)
**==========================================================================**
![05  hamburguesas_4](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/75743a30-a263-4226-a648-9d033b808a58)
**==========================================================================**
![05  hamburguesas_5](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/70655e19-8183-47b4-b1ac-53a46fa36dff)
**==========================================================================**
![05  hamburguesas_6](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/6adb6d9d-0b6c-42c5-8ef6-8422aa319193)
**==========================================================================**
![06  bebidas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/48049fe5-f3c8-4322-a4be-66221e4c3695)
**==========================================================================**
![06  bebidas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/7304541e-5065-4a94-8587-7e88328cb36f)
**==========================================================================**
![07  postres_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/915659d8-7b9d-4119-970e-d5998bc8ed77)
**==========================================================================**
![07  postres_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/06c1c43b-15d5-442c-b075-91d53b1edc20)
**==========================================================================**
![07  postres_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/cd2e8b99-d3f3-4a6f-a473-5b5320476525)
**==========================================================================**
