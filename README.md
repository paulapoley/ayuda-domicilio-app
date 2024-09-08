## Título: Sistema Integral de Gestión de Cuidado Domiciliario Usando Laravel y Docker
Este repositorio contiene el código, la documentación y los recursos relacionados con el proyecto del Sistema de Cuidado Domiciliario, diseñado para gestionar y coordinar el cuidado de personas mayores y dependientes

## 1. Objetivo del Estudio
Este proyecto tiene como objetivo desarrollar una aplicación web para gestionar servicios de cuidado domiciliario, permitiendo a los profesionales de la salud programar citas, gestionar historiales médicos y coordinar el cuidado de manera más eficiente.

Los objetivos principales son:

- **Programación de Citas**: Permitir a los cuidadores programar, actualizar y gestionar citas de manera sencilla.
- **Gestión de Historias Clínicas**: Almacenar y recuperar de manera segura los historiales médicos de los pacientes, incluyendo antecedentes médicos y medicación actual.
- **Comunicación Eficiente**: Facilitar la comunicación entre cuidadores, médicos y familiares.

## 2. Metodología
El sistema está construido utilizando el framework Laravel y Docker para un desarrollo en contenedores.

Se utilizan las siguientes tecnologías y enfoques:
- **Laravel Sail**: Para configurar y gestionar el entorno de desarrollo basado en Docker.
- **Eloquent ORM**: Para manejar las operaciones CRUD de las entidades del sistema, incluyendo pacientes, médicos, citas, y más.
- **Relaciones entre Modelos**: Implementación de relaciones 1 a 1, 1 a N, y N a N para gestionar de manera eficiente las interacciones entre las diferentes entidades del sistema.

## 3. Contenidos del Repositorio
El repositorio está organizado en varias carpetas principales que contienen los diferentes componentes del proyecto.

### 3.1. Documentos 
La carpeta `/docs` incluye toda la documentación relacionada con el proyecto:

- **Documentación del Proyecto**: [Documentacion-Sistema-Cuidado.pdf](docs/Documentacion-Sistema-Cuidado.pdf)  - Documento detallado que describe el desarrollo y los resultados del proyecto.
  
### 3.2. Código Fuente
La carpeta /src contiene el código fuente del proyecto:

- **Aplicación Web**: app/ - Directorio principal de la aplicación Laravel.
- **Controladores y Modelos**: app/Http/Controllers/ y app/Models/ - Código responsable de la lógica del negocio y la interacción con la base de datos.

### 3.3. Archivos Adicionales
Además, el repositorio incluye otros archivos relevantes:

-**Descripción del Proyecto**: [README.md](README.md) - Este archivo, que ofrece una descripción general del proyecto y sus componentes.

## 4. Entorno de Desarrollo
### 4.1. Laravel Sail
El entorno de desarrollo elegido para la implementación del sistema es Laravel Sail, que permite una configuración fácil y rápida del entorno basado en Docker.

### 4.2. Visual Studio Code (VS Code)
Para el desarrollo de la aplicación se utilizó Visual Studio Code (VS Code), que proporciona una integración fluida con las herramientas de desarrollo de Laravel y Docker.

-----------------------------------------------------------------------------------------------------------------------
![d](https://user-images.githubusercontent.com/99399775/155562465-76c5841f-da7c-43f3-b0e2-fa70b086382a.JPG)


**¿Para qué sirve la app web que voy a crear?** :   La aplicación web va sobre la gestión de ayuda a domicilio.

**¿Cuál es el contexto?** : España se encuentra entre los países que encabezan el envejecimiento de la población, el cual va en aumento descomunal . Por lo tanto es notable que la proporción demográfica de personas dependientes y de personas de avanzada edad que necesitan ayuda, atención y cuidados van de la mano . Es por ello que hay una sensibilización de la población antes este problema, esto se puede ver en la Ley de Dependencia que asegura ayudas económicas y de mecanismo para ayudar al cuidado de estas personas dependientes. También los cheques de dependencia para ayudar a aquellos que les resulte difícil pagar la ayuda a domicilio. En 2021, se calcularon que 9 millones de personas eran mayores de 65 años . Esto se interpreta en que cerca del 19% de la población española son personas mayores.

**Gráficos**: Indagando en el Instituto Nacional de Estadística encontramos gráficos (%) con índices de envejecimiento por comunidad autónoma en España.
En el siguiente gráfico se justifica lo argumentado anteriormente ya que podemos ver claramente como desde el 2009 al 2021 la línea ha ido creciendo notoriamente. 


![Imagen1](https://user-images.githubusercontent.com/99399775/155559724-1c1320ed-162c-48b9-a421-8ebae485b43b.png)
![Imagen3](https://user-images.githubusercontent.com/99399775/155559760-a990467e-4de0-40a4-9410-abccacde1d57.png)
![Imagen2](https://user-images.githubusercontent.com/99399775/155559770-e610d185-fcf9-43b0-bfc0-c62a9e022be8.png)


**¿Quién es el auxiliar de ayuda a domicilio?** : Es el profesional que se encarga de los cuidados de una persona dependiente en su propio hogar para atender sus necesidades de la vida diaria. Su objetivo es mejorar y mantener la autonomía de la persona y su relación con el entorno. Atendiendo sus necesidades de salud físicas, psicológicas y sociales.  

**¿Qué funciones tiene el auxiliar de ayuda a domicilio?:** Las funciones que lleva a cabo este profesional son muy diversas y se van a ver afectadas por las necesidades y posibilidades que tenga el paciente. Pero algunas de ellas podrían ser:
        •	Colaborar en la planificación y coordinación de las tareas
        •	Atención personal
        •	Aseo personal y/o ayudarle a vestirse y a comer
        •	Administrarle la medicación correspondiente, acompañamiento al médico y recogida de recetas
        •	Ayuda para trasladarse dentro del hogar
        •	Hacer la compra de los productos y alimentos necesarios para el día a día,
        •	Cocinar 
        •	Fomentar hábitos de higiene 
        •	Necesidades domésticas y mantenimiento general de la vivienda
        •	Actividades de la vida diaria
        •	Ayudar a trasladarse fuera de la vivienda para realizar gestiones
        •	Acompañarle al médico
        •	Realizar actividades de ocio
        •	Reforzar su autoestima y fomentar una vida saludable y activa

**¿Qué pide el cliente y que expectativas hay? :**  FPL (iniciales del cliente) pese a valorar el ingreso de su familiar en una residencia decide buscar otra alternativa siendo esta la ayuda a domicilio. Pide una app web para que haya un mejor entendimiento (y cercanía familiar/tutor -paciente) entre su familiar (persona que necesita la ayuda), el profesional y él (familiar o tutor de dicha persona). Se recogerán y quedará constancia de todos los datos, incidencias, observaciones, dietas, ayuda y mas… gestionado todo de una manera intuitiva.  Esto es muy importante porque para una persona que viva sola, que tengan los familiares lejos, o que no se puedan hacer cargo 100% de ella , un auxiliar de ayuda a domicilio se convierte no solo en su cuidador sino en algo más, en una persona que le ayuda a sus tareas diarias, que le escucha y le presta atención, que le da fuerzas para que no decaigan sus capacidades y estas aumenten, le ayude a mitigar la soledad. Todo esto ocurriendo en la propia casa de la persona con necesidades dándole mayor tranquilidad y seguridad. 

**Dato curioso:**  La ayuda a domicilio mejora la esperanza de vida de los mayores, y así lo demuestra un estudio llevado a cabo. Según sus investigaciones, las personas mayores de 65 años que disponen en casa de ayuda a domicilio, tienen una esperanza de vida más alta que aquellas que residen en residencias de tercera edad. (Tesis de la investigadora Susana Pizón).

Según esta tesis doctoral: “la atención residencial incrementa el riesgo de morir un 52 por ciento frente a la atención domiciliaria”. Pero, es más, el riesgo aumenta por año un 5,5% en mujeres y un 4,3% en hombres.

Además el 84% de los mayores dependientes precisa atención en domicilio para tener una higiene correcta y un 80% de personas necesita ayuda domiciliaria para vestirse y calzarse (datos facilitados por la Sociedad Española de Geriatría y Gerontología y Lindor).

Es por todo lo descrito anteriormente que veo necesaria e útil desarrollar esta aplicación web que iré haciendo progresivamente. 


## REQUISITOS DE INFORMACIÓN

- **RI1 – USUARIOS**
El sistema debe almacenar la siguiente información de los usuarios: email, contraseña, género (masculino, femenino, no binario) , nombre y apellidos, dni, teléfono. 
Los usuarios serán los profesionales y familiares. 
- **RI2 – FAMILIAR**
El sistema debe almacenar la siguiente información del familiar: dirección. 
Un familiar solo puede tener asociado un paciente pero puede tener asociado muchas incidencias.
- **RI3 – PROFESIONAL** 
El sistema debe almacenar la siguiente información de los profesionales: fecha de nacimiento, tipo (Enfermera o Auxiliar). 
Un profesional puede tener asociado muchos pacientes, muchas citas, muchos servicios y muchas incidencias.


**RI4 – PACIENTE** 
El sistema debe almacenar la siguiente información de los pacientes: nombre y apellidos, fecha de nacimiento, teléfono, dirección, estado civil (soltero/a, casado/a, divorciado/a, viudo/a), dni, género (masculino, femenino, no binario) , peso en kilogramos, altura en centímetros, observaciones.   
El paciente deberá tener un familiar. De la misma manera el paciente podrá tener asociadas una serie de tratamientos. 
Los pacientes reciben múltiples servicios. De cada servicio recibido se almacenará: fecha de inicio, fecha de fin, coste total. El sistema computará la duración del servicio con la fecha de inicio y la fecha de fin. 
Un paciente puede tener asociado muchas citas , muchas incidencias y muchos tratamientos.  En cambio el paciente solo puede tener un profesional. 
En las observaciones se podrá ver si tiene alguna enfermedad, alergia o algo a tener en cuenta. 


**RI5 – MEDICAMENTO**
El sistema debe almacenar la siguiente información de los medicamentos: nombre, dosis por toma. 
Un medicamento puede estar asociado a muchos tratamientos.


**RI6 – CITAS**  
El sistema debe almacenar la siguiente información de las citas de enfermería: fecha- hora inicio, fecha-hora fin, profesional, descripción de tareas a realizar, paciente, observaciones clínicas, id cita.
Una cita solo puede tener asociado un profesional y un paciente. 


**RI7 – SERVICIOS**  
El sistema debe almacenar la siguiente información de los servicios :  nombre del servicio.
Un servicio podrá tener asociado muchas citas. 


**RI8 – INCIDENCIAS**  
El sistema debe almacenar la siguiente información de las incidencias: fecha de incidencia, descripción de la incidencia, tipo de incidencia (mensaje , incidente),  nivel de gravedad (0,1,2,3,4,5,6,7,8,9,10).
Una incidencia solo puede pertenecer a un familiar, a un profesional y a un paciente. 


**RI9 – TRATAMIENTO**
El sistema debe almacenar la siguiente información de los tratamientos: fecha de prescripción, observación, nombre.  El tratamiento tiene líneas de tratamientos que constan de la siguiente información: fecha inicio, fecha fin, observaciones , duración del tratamiento ( en días, meses o años), nombre medicamento. 
Un tratamiento puede contener muchos medicamentos y permenecer a un solo paciente.
Cada línea de tratamiento representa un medicamento.  Tendrá derivadas, la fecha fin del tratamiento se calculará con la última fecha fin de las líneas de tratamiento, la duración de la línea de tratamiento se calculará con la fecha de inicio y la fecha de fin. 



## REQUISITOS FUNCIONALES



### HU1- Gestión de usuarios

**RF-1.1. Registro de usuarios**
En el momento que la persona se meta en la aplicación y está no sea usuario de ella aparecerá “Registrarse” y “Registrarse como profesional” al darle a la elegida rellenará un formulario para darse de alta en la aplicación.  

**RF-1.2. Login de usuarios**
Una vez que la persona ya es usuario de la aplicación este hará iniciará sesión para poder acceder a la aplicación web. 

**RF-1.3. Editar el perfil del usuario**
Cuando la persona esté dada de alta en la aplicación, es decir, tenga un usuario el sistema le tiene que permitir y le ofrecerá la opción de modificar la información del usuario. 




### HU2- Gestión de citas

**RF-2.1. Crear citas.**
El sistema permite a los usuarios añadir nuevas citas en la aplicación. 

**RF-2.2. Listado de citas.**
El sistema muestra a los usuarios una lista de todas las citas ordenadas por fecha y hora ascendente. En la parte superior quedan las citas mas cercanas a la fecha actual. 

**RF-2.3. Mostrar detalles de citas**
El sistema muestra a los usuarios la cita completa, es decir con todos los detalles. 

**RF-2.4. Edición de citas**
El sistema da la función de modificar las citas. 

**RF-2.5. Eliminar citas**
El sistema permite a los usuarios cancelar la cita que ya tenían y por lo tanto eliminarla. 




### HU3- Gestión de servicios

**RF-3.1. Crear servicio.** 
El sistema les permite a los profesionales introducir nuevos servicios en la aplicación. 

**RF-3.2. Listado de servicios.**
El sistema permite a los profesionales y a los familiares mostrarle el listado con todos los servicios. 

**RF-3.3. Mostrar detalles de servicios.**
El sistema permite a los profesionales mostrarle los detalles de los servicios.

**RF-4.4. Editar datos de los servicios.**
El sistema permite a los profesionales modificar los servicios que sea necesario. 

**RF-4.5. Eliminar servicios.**
El sistema permite a los profesionales eliminar los servicios.




### HU4- Gestión de incidencias

**RF-4.1. Crear incidencia.**
El sistema les permite a los usuarios crear nuevas incidencias en la aplicación. 

**RF-4.2. Listado de incidencias.**
El sistema permite a los usuarios mostrarle el listado con todos las incidencias. 

**RF-4.3. Mostrar detalles de incidencias.**
El sistema permite a los usuarios mostrarle todos los detalles de las incidencias.

**RF-5.4. Editar datos incidencias.**
El sistema permite a los usuarios modificar las incidencias que sean necesarias. 

**RF-5.5. Eliminar incidencias.**
El sistema permite a los usuarios  eliminar incidencias.

## REGLAS DE NEGOCIO

**RN-1. Fecha hora inicio**
La fecha hora de inicio de la cita tiene el formato dd/mm/aaaa y HH:mm. No puede seleccionarse el día de ayer. 

**RN-2 Fecha hora fin**
La fecha hora final de la cita tiene el formato dd/mm/aaaa y HH:mm. No puede seleccionarse antes que la fecha hora inicio de la cita. 

**RN-3 Fecha**
La fecha hora de la incidencia tiene el formato dd/mm/aaaa y HH:mm. 

**RN-4 Descripción**
La descripción tiene que ser rellenada, no puede dejarse en blanco sin contestar. 

**RN-5 Observaciones**
Las observaciones tienen que ser rellenadas, no pueden dejarse en blanco sin contestar.
 
**RN- 6 Email** 
El email de usuario que decida la persona no puede haber dos iguales, es decir, debe ser único en el sistema. No puede contener espacios ni dejarse en blanco. Puede incluir hasta 32 caracteres. Debe contener el símbolo @ y al final .com o .es o . algo.

**RN- 7 Contraseña**
La contraseña estará en el campo de contraseña y en la confirmación de esta coincidiendo las dos.Debe tener como mínimo 8 caracteres.

**RN- 8  Nivel gravedad**
El nivel de gravedad de la incidencia oscilará entre 0 y 9. No se pueden poner otros números ni letras o símbolos que no sean esos. Tiene que ser rellenado. 

**RN- 9  Tipo  Incidencia**
El tipo de incidencia tiene que ser seleccionado entre las opciones que da la aplicación. No se puede dejar sin seleccionar.

**RN- 10  Género**
El género tiene que ser seleccionado entre las opciones que da la aplicación. No se puede dejar sin seleccionar.

**RN- 11 Tipo profesional**
El tipo profesional tiene que ser seleccionado entre las opciones que da la aplicación. No se puede dejar sin seleccionar.

**RN- 12  Dirección**
La dirección tiene como máximo 255 caracteres.  



## DIAGRAMA DE CLASE EN UML 
![uml codifi drawio](https://user-images.githubusercontent.com/99399775/171507506-44fc8df4-9b28-420d-9bf7-f9cfcfa422b7.png)


## MANUAL DE USO

### En cuanto a familiar
Nos registramos como familiar llamado Elena. 
![image](https://user-images.githubusercontent.com/99399775/171509334-1fb5b130-cbe5-42bd-9ba4-a1a30be6e250.png)

Pantalla principal que nos sale nada más registrarnos o iniciando sesión desde la que podremos ir a las distintas secciones ubicadas en la parte superior llamadas Citas e Incidencias. Si le damos al símbolo de laravel siempre nos llevará a esta página principal.
![image](https://user-images.githubusercontent.com/99399775/171513497-f3c7e071-af96-427d-a6f4-9e28ba04e6d6.png)

Le damos a Citas situado en la barra superior porque el familiar(Elena) quiere tener una cita con el profesional Dolores para que le mire la tensión a su madre. Le damos al botón de pedir cita y rellenamos la información que se nos pide y le damos a guardar. 
![image](https://user-images.githubusercontent.com/99399775/171509963-73db082d-c96c-409b-b09a-2f7b76222b2e.png)
![image](https://user-images.githubusercontent.com/99399775/171511143-68009569-f4eb-4113-a9fe-c32904518de1.png)

De manera que una vez que se ha guardado la cita podemos verla. 
![image](https://user-images.githubusercontent.com/99399775/171511210-96b2ca9d-ac41-4c60-8732-e1b4aef2810c.png)

Al crear otra cita esta se nos ordena por fecha de la cita de forma ascendente.
![image](https://user-images.githubusercontent.com/99399775/171511872-ba3477fb-7d0b-4e80-a64c-1d2ebf3ea91b.png)

En el símbolo del ojo si le damos podemos ver la información, si le damos a la papelera se elimina la cita y si le damos al lápiz de al lado podemos editar la cita. Si se quiere puede añadir un servicio a la cita rellenando estos campos. Una vez hechos.
![image](https://user-images.githubusercontent.com/99399775/171512069-9b3e31b0-f205-47fb-8479-32601d520da8.png)

Si queremos crear un incidencia, le damos a esta y a crear incidencia. Rellenamos los datos.
![image](https://user-images.githubusercontent.com/99399775/171512232-e759d0ed-9f8a-4a09-acd2-a83ac86e43e8.png)
![image](https://user-images.githubusercontent.com/99399775/171512352-4d650730-8603-4450-ad3c-5abfb13806ad.png)
Si queremos editar la incidencia le damos al símbolo del lápiz y si queremos borrarla a la papelera. 
![image](https://user-images.githubusercontent.com/99399775/171512390-fd2b55b7-4d93-4f83-bff3-68d24a203307.png)

Para cerrar sesión o ver el perfil en la esquina superior derecha le damos a nuestro nombre y nos saldrá lo siguiente.
![image](https://user-images.githubusercontent.com/99399775/171514650-a3ca6196-29c3-4f73-88f0-9e80e81aded6.png)

### En cuanto a profesionales 

Vamos a registrar a un profesional, en este caso a Dolores que es enfermera y a Victor que es auxiliar. También vamos a iniciar sesión.
![image](https://user-images.githubusercontent.com/99399775/171510207-cf71933f-5105-4597-936a-5fb0f61dec14.png)
![image](https://user-images.githubusercontent.com/99399775/171513610-0928a082-010a-4c15-841e-73c1fd53b81e.png)
Pantalla principal que nos sale nada más registrarnos o iniciando sesión desde la que podremos ir a las distintas secciones ubicadas en la parte superior llamadas Citas, Incidencias y Servicios. Si le damos al símbolo de laravel siempre nos llevará a esta página principal.
![image](https://user-images.githubusercontent.com/99399775/171514444-e4cf4164-392f-4e97-88c4-6de883f1d274.png)

Al entrar en el perfil de Dolores podemos ver que si le damos a citas nos sale las dos citas que nos ha pedido Elena. Podemos hacer las mismas funciones ver (símbolo del ojo), editar(simbolo del lápiz) y eliminar (simbolo de la papelera). 
![image](https://user-images.githubusercontent.com/99399775/171513739-94ae5653-3392-42cc-a473-63686a5048ff.png)
Tambien podemos darle a crear cita y deberemos rellenar la información que nos pide y le daremos a guardar. 
![image](https://user-images.githubusercontent.com/99399775/171513944-c1eb0bc7-e896-4899-8090-3f3486746b5f.png)

Para crear servicios le damos a servicios y a crear servicio.Ponemos el nombre y le damos a guardar. 
![image](https://user-images.githubusercontent.com/99399775/171514014-e7617e72-5d23-41e5-8ad9-2a452ca9d9a5.png)
He creado unos cuantos servicios más y como podemos ver podremos editarlos una vez creados o eliminarlos. 
![image](https://user-images.githubusercontent.com/99399775/171514090-1c5683c0-ad60-43fa-93df-9f1048d40721.png)

Si le damos a incidencia vemos que nos sale la incidencia ya creada. Tambien se podrá crear una incidencia para algun familiar rellenando la información mostrada a continuación. 
![image](https://user-images.githubusercontent.com/99399775/171514154-bfbd8a48-4ebd-4179-86a4-d2c91762e291.png)
![image](https://user-images.githubusercontent.com/99399775/171514234-1497454b-66ba-4222-b902-e0d96fab2b19.png)
Si entramos con el perfil de Víctor y le damos a citas no tenemos ninguna porque Elena no le ha pedido citas ni él tampoco ha creado ninguna. 
![image](https://user-images.githubusercontent.com/99399775/171514322-2b7a790c-6e53-4397-aa4f-bb6b94c69fa0.png)


### 4.2. Visual Studio Code (VS Code)
Para el desarrollo de la aplicación se utilizó Visual Studio Code (VS Code), que proporciona una integración fluida con las herramientas de desarrollo de Laravel y Docker.


