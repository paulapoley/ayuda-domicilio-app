# Plantilla de proyecto CGIS Paula Poley Ceballos

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

**RI1 – Paciente**
El sistema debe almacenar la siguiente información de los pacientes: nombre y apellidos, fecha de nacimiento, teléfono, dirección de casa, estado civil, teléfono de la persona de contacto, nombre de la persona de contacto, alergias, dni, género, enfermedades, peso, altura, identificador.  

**RI2 – Familiar**
El sistema debe almacenar la siguiente información del familiar: nombre de usuario, teléfono, contraseña, nombre del paciente a cargo, dni del paciente a cargo, identificador del paciente a cargo. 

**RI3 – Profesional** 
El sistema debe almacenar la siguiente información de los profesionales: nombre y apellidos, género, teléfono, fecha de nacimiento, nombre de usuario, contraseña, tipo (Enfermera o Auxiliar), identificador.  

**RI4 – Medicación** 
El sistema debe almacenar la siguiente información de los medicamentos: Identificador paciente, nombre medicación, nombre de la enfermedad, indicaciones(como tomarlo), información breve de la enfermedad.  

**RI5 – Citas Enfermería**
El sistema debe almacenar la siguiente información de las citas de enfermería: fecha de la cita, hora de la cita, profesional, descripción, paciente, identificador paciente.  

**RI6 – Horas de trabajo**  
El sistema debe almacenar la siguiente información de los horarios de trabajo: días de la semana de trabajo, días del mes de trabajo, años de trabajo, identificador profesional. 

**RI7 – Servicio de carácter doméstico**  
El sistema debe almacenar la siguiente información de los servicios de carácter domestico: relacionados con la alimentación, relacionados con el vestido, relacionados con el mantenimiento de la vivienda.  

    Actuaciones de carácter domestico 
       > Relacionadas con la alimentación  
            -Preparación de alimentos en el domicilio. 
            -Servicios de comida a domicilio 
            -Compra de alimentos con cargo a la persona usuaria 
       > Relacionadas con el vestido 
            -Lavado de ropa en el domicilio y fuera del mismo (con cargo a la persona usuaria
            -Repaso y ordenación de ropa 
            -Planchado de ropa en el domicilio y fuera del mismo (con cargo a la persona usuaria) 
            -Compra de ropa con cargo a la persona usuaria. 
       > Relacionadas con el mantenimiento de la vivienda 
            -Limpieza cotidiana y general de la vivienda, salvo casos específicos de necesidad en los que dicha tarea será determinada por el profesional responsable
            -Pequeñas reparaciones domésticas, que engloban aquellas tareas que la persona realizaría por si misma en condiciones normales y que no son objeto de otra
             profesiones. 

**RI8 – Servicio de carácter personal**  
El sistema debe almacenar la siguiente información de los servicios de carácter personal: relacionados con la higiene personal, relacionados con la alimentación, relacionados con la movilidad, relacionados con cuidados especiales, de ayuda en la vida familiar y social. 

   Actuaciones de carácter personal  
   
       > Relacionadas con la higiene personal 
            -Planificación y educación en hábitos de higiene. 
            -Aseo e higiene personal. 
            -Ayuda en el vestir. 
            
       > Relacionadas con la alimentación 
            -Ayuda o dar de comer o beber. 
            -Control de la alimentación y educación sobre hábitos alimenticios. 
            
       > Relacionadas con la movilidad 
            -Ayuda para levantarse y acostarse. 
            -Ayuda para realizar cambios posturales. 
            -Apoyo para la movilidad dentro del hogar. 
            
       > Relacionadas con cuidados especiales 
            -Apoyo en situaciones de incontinencia. 
            -Orientación temporo-espacial.
            -Control de la administración del tratamiento médico en coordinación con los equipos de salud. 
            -De ayuda en la vida familiar y social  
            -Acompañamiento dentro y fuera del domicilio. 
            -Apoyo a su organización doméstica. 
            -Actividades de ocio dentro del domicilio. 
            -Actividades dirigidas a fomentar la participación en su comunidad y en actividades de ocio y tiempo libre. 
            -Ayuda a la adquisición y desarrollo de habilidades, capacidades y hábitos personales y de convivencia. 

**RI9 – Incidencias**
El sistema debe almacenar la siguiente información de las incidencias: nombre del profesional, identificador del profesional, nombre del paciente, identificador del paciente, identificador familiar, fecha de incidencia, motivo de la incidencia.  

**RI10 – Mensajes**  
El sistema debe almacenar la siguiente información de los mensajes: nombre del profesional, identificador del personal, nombre del paciente, identificador del paciente, usuario, fecha de envío del mensaje, mensaje. 






## REQUISITOS FUNCIONALES

**HU1- Gestión de usuarios**

**RF-1.1. Registro de usuarios** 
En el momento que la persona se meta en la aplicación y está no sea usuario de ella aparecerá un formulario a rellenar para dar de alta en la aplicación.  

**RN- 1.1.1 Nombre de usuario** 
El nombre de usuario que decida la persona no puede haber dos iguales, es decir, debe ser único en el sistema. No puede contener signos de interrogación, dos puntos ni espacios. Tampoco puede dejarse en blanco. Puede incluir hasta 32 caracteres. 

**RN- 1.1.2 Contraseña** 
La contraseña estará en el campo de contraseña y en la confirmación de esta coincidiendo las dos. No hay restricciones con respecto a los tipos de caracteres que pueden usarse para la contraseña. Por seguridad se recomienda crear contraseñas que abarquen caracteres en mayúsculas y minúsculas, números y símbolos. Es más complicado que otros puedan adivinar una contraseña que contenga un gran número de caracteres. 

**RN- 1.1.3 Número de teléfono**
El número de teléfono que ponga el usuario solo contará con dígitos para ser más exactos tiene que tener solo y exclusivamente 9 dígitos comprendidos del 0 al 9. 

**RN- 1.1.4 Correo electrónico**
El correo electrónico debe contener el símbolo @ y al final .com ó .es este debe ser único.  

**RF-1.2. Login de usuarios** 
Una vez que la persona ya es usuario de la aplicación o administrador del sistema, este preguntará si inicia sesión para poder acceder a la aplicación web. En qué modo si como usuario o como administrador  

**RF-1.3. Editar el perfil del usuario**
Cuando la persona esté dada de alta en la aplicación, es decir, tenga un usuario el sistema le tiene que permitir y le ofrecerá la opción de modificar los datos personales del usuario.  

**RN- 1.3.1 Nombre de usuario**
El nombre de usuario que decida la persona no puede haber dos iguales, es decir, debe ser único en el sistema. No puede contener signos de interrogación, dos puntos ni espacios. Tampoco puede dejarse en blanco. Puede incluir hasta 32 caracteres.  

**RN- 1.3.2 Contraseña** 
La contraseña estará en el campo de contraseña y en la confirmación de esta coincidiendo las dos. No hay restricciones con respecto a los tipos de caracteres que pueden usarse para la contraseña. Por seguridad se recomienda crear contraseñas que abarquen caracteres en mayúsculas y minúsculas, números y símbolos. Es más complicado que otros puedan adivinar una contraseña que contenga un gran número de caracteres. 

**RN- 1.3.3 Número de teléfono** 
El número de teléfono que ponga el usuario solo contará con dígitos para ser más exactos tiene que tener solo y exclusivamente 9 dígitos comprendidos del 0 al 9. 

**RF-1.4. Consultar perfil**  
De manera que el sistema deja al usuario/administrador editar su perfil este también permitirá que se consulte los datos del perfil.   

**RN- 1.4.1 Vista del perfil** 
El sistema permitirá que los usuarios vean el perfil del auxiliar a cargo del paciente menos su número de teléfono y el auxiliar si podrá ver el perfil completo del usuario del paciente.  Además de dar acceso al perfil del usuario actual.  

**RN- 1.4.2 Eliminar usuario**
De la misma manera que el sistema ofrece un formulario para crear el usuario permitirá la eliminación del usuario de la aplicación web.  

 

**HU2- Gestión de citas**

**RF-2.1. Crear citas.** 
El sistema permite a los usuarios añadir nuevas citas en la aplicación.  

**RN- 2.1.1 Fecha cita**  
La fecha de la cita tiene el formato dd/MM/aaaa 

**RN- 2.2.1 Hora cita** 
La hora de la cita tiene el formato HH:mm 

**RF-2.2. Listado de cita.** 
El sistema muestra a los profesionales una lista de todas las citas ordenadas por fecha y hora.  

**RF-2.3. Mostrar detalles de cita**
El sistema muestra a los usuarios la cita completa, es decir con todos los detalles.  

**RF-2.4. Edición de cita** 
El sistema deberá dar la función de modificar las citas.  

**RN- 2.4.1 Fecha cita**  
La fecha de la cita tiene el formato dd/MM/aaaa 

**RN- 2.4.1 Hora cita** 
La hora de la cita tiene el formato HH:mm 

**RF-2.5. Eliminar cita** 
El sistema permite a los usuarios cancelar la cita que ya tenían.  

**RF-2.6. Listado de citas del paciente visto en el usuario(familiar)** 
El sistema muestra a los usuarios una lista de todas las citas ordenadas por fecha y hora. 

 

 

**HU3- Gestión del paciente**

**RF-3.1. Crear paciente**
El sistema permite a los profesionales de añadir un nuevo paciente en la aplicación. 

**RN- 3.1.1 Identificador**  
El identificador del paciente es único.Esta formado por una cadena de longitud 7, formado por letras y números.  

**RN- 3.1.2 DNI**
El DNI es único y contiene letra y números  

**RN- 1.3.3 Número de teléfono** 
El número de teléfono que ponga el usuario solo contará con dígitos para ser más exactos tiene que tener solo y exclusivamente 9 dígitos comprendidos del 0 al 9. 

**RF-3.2. Listado de pacientes.** 
El sistema muestra a los profesionales una lista de todas los pacientes. 

**RF-3.3. Mostrar detalles de pacientes.** 
El sistema muestra a los profesionales todos los detalles del paciente.  

**RF-3.4. Editar datos pacientes.** 
El sistema deberá dar la función a los profesionales de modificar las citas. 

**RN- 3.4.1 Identificador**  
El identificador del paciente es único.Esta formado por una cadena de longitud 7, formado por letras y números.   

**RN- 3.4.2 DNI**
El DNI es único y contiene letra y números  

**RN- 1.3.3 Número de teléfono** 
El número de teléfono que ponga el usuario solo contará con dígitos para ser más exactos tiene que tener solo y exclusivamente 9 dígitos comprendidos del 0 al 9. 

**RF-3.5. Eliminar paciente.** 
El sistema deberá dar la función a los usuarios de eliminar al paciente.  

 

**HU4- Gestión de medicamentos**

**RF-4.1. Crear medicación.**  
El sistema les permite a los profesionales introducir nuevos medicamentos en la aplicaicón.  

**RF-4.2. Listado de medicamentos.** 
El sistema permite a los profesionales mostrarle el listado con todos los medicamentos.  

**RF-4.3. Mostrar detalles de medicamentos.** 
El sistema permite a los profesionales mostrarle todos los detalles de los medicamentos. 

**RF-4.4. Editar datos medicamentos.**
El sistema permite a los profesionales modificar el/los medicamentos que sea necesario.  

**RF-4.5. Eliminar medicamentos.** 
El sistema permite a los profesionales eliminar los medicamentos. 

## Captura de aplicación web

![captura de pantalla](https://user-images.githubusercontent.com/99399775/158872323-9154ad7d-16a0-4902-88bf-2bd148851ef2.JPG)



## QUIÉN PUEDE HACER QUÉ

**Detalles del paciente**  
    -Enfermera (ve todo de todos los pacientes) 
    -Auxiliar (ve todo de todos los pacientes)  
    -Familiar a cargo (ve todo lo relacionado con su familiar. Ve quien le cuida, el horario, que servicios tiene su familiar ….)  
    
**¿Quiénes son los usuarios?** 
    -Auxiliar y enfermera  
    -Familiar  
    
**Citas**
    -El familiar puede añadir, modificar, mostrar, eliminar y ver las citas de su familiar  
    -La enfermera y la auxiliar también pondrán hacer lo mismo además de ver una lista con todos los pacientes.  
   
**Paciente**  
    -Solo el personal (auxiliar y enfermera) pueden añadir, modificar, mostrar, eliminar y ver la lista de pacientes.  

**Medicación**  
    -Solo el personal (auxiliar y enfermera) pueden añadir, modificar, mostrar, eliminar y ver la lista de medicación. 

**Prestación del servicio**
    -Los usuarios (todos) podrán seleccionar el tipo de prestaciones de servicios que quieren para el paciente.  

**Horas de trabajo**  
    -Los usuarios(todos) podrán elegir la cantidad de horas a la semana/mes/año que quiere para el paciente. 






## Instrucciones para su uso
1. Clone desde Visual Studio Code (o cualquier IDE de su preferencia) este repositorio.
2. Necesitamos un archivo de entorno `.env` para que nuestra aplicación sepa cómo conectarse a la base de datos y otros parámetros de configuración. Sin embargo, como el archivo `.env` contiene información sensible, como contraseñas, y la configuración depende del equipo, no se suele subir al repositorio (poniendo en `.gitignore` el archivo para que Git no lo considere). En su lugar, hemos subido un ejemplo `.env.example` con valores de ejemplo para los diferentes parámetros. En este caso, los valores de ejemplo son exactamente los mismos que necesitamos para trabajar con sail, así que tendremos que duplicar el archivo `.env.example`, copiándolo y pegándolo en el mismo directorio, y llamándolo `.env`
3. Arrancamos el contenedor de Sail por primera vez `docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v $(pwd):/var/www/html \
   -w /var/www/html \
   laravelsail/php81-composer:latest \
   composer install --ignore-platform-reqs`. Más info: https://laravel.com/docs/master/sail#installing-composer-dependencies-for-existing-projects.
4. Ahora que tenemos disponible la carpeta de vendor, levante Laravel Sail desde Window Terminal (el terminal de la máquina Host, no la asociada con el contenedor Docker de Sail) `./vendor/bin/sail up -d`
5. Asocie un terminal a la imagen de Docker que está corriendo el servidor web:![](https://i.ibb.co/m46S95z/Ejemplo-VSCode-Docker.png "VSCode Docker")
6. Abre en el navegador `http://localhost`

**IMPORTANTE** Tendrá dos terminales: 1 ataca a la máquina física y otro al contenedor. Los comandos como `php artisan xxx`, `composer xxx`, siempre serán ejecutados sobre el contenedor, ya que necesitan el entorno de desarrollo con MySQL, PHP, etc. (contenedor), mientras que la gestión del contenedor, como `./vendor/bin/sail up -d` o `./vendor/bin/sail down`, desde la máquina física.

## Herramienta para escribir lenguaje de marcado
https://www.markdownguide.org/basic-syntax/ describe cómo se utiliza el markdown.

[StackEdit](https://stackedit.io/app#) puede ayudaros a trabajar con lenguajes de marca (markdown) para escribir este README.md
> Prueba las posibilidades antes de **Subir** cambios al repositorio.




