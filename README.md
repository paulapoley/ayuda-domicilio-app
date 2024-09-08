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


