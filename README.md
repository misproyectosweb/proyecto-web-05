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
1. Un encabezado: donde se muestra el logotipo de la organización y el menú principal
2. Una sección principal: el cual consta de cuatro partes:
   - La primera parte consta de una presentación del negocio a través de imágenes
   - La segunda parte consta del menú de especialidades que ofrece el restaurante a sus clientes. Estos incluyen aperitivos, pizzas, pastas, hamburguesas, sándwiches, hotdogs, bebidas, postres, entre otros
   - La tercera parte consta de una sección donde el negocio cuenta la reseña histórica de su creación
   - La cuarta parte consta de un formulario donde el usuario puede realizar sus comentarios acerca de su visita al restaurante
3. Un pie de página: que muestra la información de contacto del negocio

En relación con el menú de especialidades, cada vez que el usuario ingresa a cada opción se encontrará con el detalle de los productos que el restaurante ofrece a sus clientes. Para efectos de este proyecto, se han creado diseños diferentes en cada página para no mostrar un patrón repetitivo

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript como validaciones del lado del servidor programadas con el lenguaje de programación PHP.

Para enviar la información del usuario a través del formulario de contacto se utiliza una herramienta llamada **PHPMailer.** Esta es una biblioteca de código abierto para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web. Además está basada en el componente active server ASPMail y permite de una forma sencilla tareas complejas como por ejemplo:
- Enviar mensajes de correo con ficheros adjuntos (attachments) 
- Enviar mensajes de correo en formato HTML 
- Enviar emails vía sendmail, PHP mail(), o con SMTP.

Finalmente, se utiliza una librería JavaScript llamada **SweetAlert2** para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente en el formulario fueron enviados al buzón de correo del restaurante de forma correcta o incorrecta.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![01  inicio_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/f3f3f14f-1085-427e-a8b0-3c3abc41c83e)
**==========================================================================**
![01  inicio_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/ff499f82-170d-4a4c-90b5-bf856e5a674a)
**==========================================================================**
![01  inicio_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/d7350467-e995-4f98-ab83-af0e603c6c39)
**==========================================================================**
![01  inicio_4](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/4dc002de-1fb2-417d-b184-d9678525c09b)
**==========================================================================**
![01  inicio_5](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/d3c3f19c-b94f-40eb-ab2d-9e344befdb00)
**==========================================================================**
![01  inicio_6](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/caa7210b-70a1-4673-832f-4944b1336099)
**==========================================================================**
![01  inicio_7](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/9a80198c-0326-4c06-a32d-723e59a2f0fa)
**==========================================================================**
![01  inicio_8](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/9ae7db0f-f4af-4452-98ba-d00613286e0f)
**==========================================================================**
![01  inicio_9](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/4474079d-19f2-4399-97b3-ffd292f9e064)
**==========================================================================**
![01  inicio_10](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/4acb60e9-89ad-42b6-9a27-5e34ff440b7c)
**==========================================================================**
![01  inicio_11](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/1c692399-fe98-4f6d-aa8e-5b69cc3acf8d)
**==========================================================================**
![02  aperitivos_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/ac5d2505-6dbf-4a49-ba46-0af5e621c855)
**==========================================================================**
![02  aperitivos_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/4dfedfd7-4aa1-4f81-9f64-3c253c7cbe08)
**==========================================================================**
![03  pizzas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/58b9ed02-dc2e-4c27-b786-6d4012088f9b)
**==========================================================================**
![03  pizzas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/25bf4262-b03d-42e7-8385-650cdff99ff2)
**==========================================================================**
![03  pizzas_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/53deff93-c028-4755-97c8-be31e5cbfbed)
**==========================================================================**
![04  pastas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/83870b31-7799-4144-8b86-80907543663c)
**==========================================================================**
![04  pastas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/bfcc58dc-fce1-4612-9c41-e21291a5d25f)
**==========================================================================**
![05  hamburguesas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/4df3980d-e7dc-4391-9cbc-227ee50c879a)
**==========================================================================**
![05  hamburguesas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/3267b506-0187-4f9a-8781-c128680c43dc)
**==========================================================================**
![05  hamburguesas_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/0225cb91-66ff-49dc-98e6-5fe81b419fa1)
**==========================================================================**
![05  hamburguesas_4](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/211387c8-5062-4cc5-becf-af3b5cac24ac)
**==========================================================================**
![05  hamburguesas_5](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/1fa7ab47-604a-4eac-8702-033a706bff80)
**==========================================================================**
![05  hamburguesas_6](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/67d7b798-d411-45d0-a787-5cbbfe7b3313)
**==========================================================================**
![06  bebidas_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/9e46a6d7-01a6-4c1e-a9a3-2d4d618dc7ab)
**==========================================================================**
![06  bebidas_2](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/fea6ef9b-789d-46d7-9a5d-bf403b47a77c)
**==========================================================================**
![07  postres_1](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/260cab84-e1a9-4db1-8c9e-79f8645f89ae)
**==========================================================================**
![07  postres_3](https://github.com/misproyectosweb/proyecto-web-05/assets/98922137/d7fd5ae4-f759-403e-af0d-8b0bfaf50b6a)
**==========================================================================**
