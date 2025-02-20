# Magento 2 - Guía de Desarrollo de Módulos Personalizados

Bienvenido a este repositorio personal, creado con el propósito de documentar y organizar de manera clara y accesible los conocimientos adquiridos en el desarrollo de módulos personalizados en **Magento 2**. Este espacio está diseñado como una **guía de consulta rápida** y como un **recurso educativo** para afianzar conceptos clave y resolver dudas durante el proceso de desarrollo.

---

### 📌 ¿Por qué en español?

Este material está en **español**, ya que durante mi aprendizaje he notado la limitada documentación disponible en este idioma. Mi objetivo es facilitar el acceso a información relevante para quienes prefieren aprender y trabajar en español.

---

### 📖 ¿Qué encontrarás aquí?

En este repositorio, se recopilan los temas más relevantes relacionados con la personalización de Magento 2, incluyendo:

- Creación de módulos básicos.
- Manejo de datos, **Model, ResourceModel y Collection**.
- Uso de **ViewModels y Repositorios**.
- Gestión de **Eventos e Interceptores**.
- Implementación de **REST APIs**.
- Personalización de **temas y estilos**.
- Etc...

Estos temas abarcan desde los fundamentos del desarrollo hasta la implementación de funcionalidades avanzadas.

---

### ✨ ¿Cuál es el objetivo?

Espero que este repositorio sirva como un punto de referencia **confiable y eficiente** para quienes deseen adentrarse en el fascinante mundo del desarrollo en Magento 2.

¡Gracias por visitar este espacio y compartir la pasión por aprender y mejorar constantemente! 😊

## Índice

1. **Fundamentos de Creación de Módulos e Introducción a las Plantillas en Magento 2** 
    - 1.1. [Creación de módulo](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/d5b29129c1d3b8c9d0f1b15d2108bb834a0761b3)
    - 1.2. [Routers and Controller](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e0eff2e7841fa1ecb3770095c0084579dc61b646)
     - 1.3. [Fabricas e inyección de dependencias](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6a933d0fa9c00ff69f118cc2c45f740be0c11eee)
     - 1.4. [Implementación de redirect](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a9540be4399af82486667a35b494bf917d97a6d5)
     - 1.5. [Implementación de forward](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/0d935aa4598348a8e906131d22f7136664404948)
     - 1.6. [Layouts y Templates Personalizados](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2da2001a13ba7da07e8ec07e6f733aa553e37706)
     - 1.7. [Templates para contenido principal y barra lateral](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/553049b9c385f3675ecda12e7ce20958f031e63b)
     - - 1.7.1. [Resultado en el navegador](https://github.com/PerezContrerasLuis/magento2-dev-guide/blob/main/docs/screenshots/blog_post_detail.png)
     - 1.8. [Mover bloques de magento dentro de una vista](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/8b614fe2411149d271881f927e1d7ae529582150)
     - - 1.8.1. [Resultado en el navegador](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/48ec6a80a9c9d7a86c476b299060df1c5b4efaf6)
     - 1.9. [Traduccion de texto de plantillas con i18n](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ae06bf8bb95ab22e627783de494281216c14721c)
     - 1.10. [Sobrescribir una plantilla de bloque existente en Magento](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/afea5f72035db153719e1a388c163bd22de8c4ef)

2. **Gestión y Persistencia de Datos en (BDD)**
    - 2.1. [Creación de tabla con db_schema.xml](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a1c508792ca81858a2c928227db98f4e4f9e9d66)
    - 2.2. [Gestión de columnas de base de datos con db_schema_whitelist](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/91c4925131846bfc0e8721258475dfee075f73e9)
    - 2.3. [Implementación de Model, ResourceModel y Collection para gestión de datos](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/440412ef139f11ed8801bc413dcb93a438a013c7)
    - 2.4. [Contrato de servicios DTO, repositoryInterface y repositorio](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/f215e274daf245ce3cf0fe24a914d2bd776bdddb)
    - 2.5. [Implementación de DTO en el modelo Post](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/7ae3dbc18fe94a10716f70268be3d110c6a4d782)
    - 2.6. [Usando PostRepository para leer datos con ResourceModel](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ef86a7eab3c07b3aff6d40531f25bf7362a30a51)
    - 2.7. [Usando PostRepository para guardar datos con ResourceModel](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/5a3058e3c6fd18e7a44799adb9be4674b7030f38)
    - 2.8. [Usando PostRepository para eliminar datos con ResourceModel](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/15d2d013477b19237529adf9b447e8a1e31a10aa)
    - 2.9. [Insertando datos en la tabla de blog usando Data Patch](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/12e00bd910fe25d34898e3f629f810cca21927ff)
    - 2.10. [Exponiendo los métodos de PostRepositoryInterface como endpoints de una API REST](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/655e3f9c85661a6a1ff7b27615690c5a761699a5)

3. **View Models y Repositorios para Carga de Datos**
    - 3.1. [¿Qué es un ViewModel en Magento 2 y por qué usarlo?](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2791a7e28091dfb7b20a25aed056f45339a89808)
    - 3.2. [Pasando datos a template List mediante un ViewModel que usa Collection](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/b7a4bfc1b44eccb94c92e9d5ad4756ec575c57b8)
    - 3.3. [Pasando datos a template Sidebar mediante un ViewModel que usa Collection](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/60f0040833a62574960cbfc32247dcd7eb120a03)
    - 3.4. [Agregando función getCount al ViewModel Post](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e53307668af48c5cc4b8e56d11ea88342c85dfa8)
    - 3.5. [Pasando datos a template List mediante un ViewModel usando PostRepository](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e3e18f8535e9eaaddcd6561ff902859118a1609c)

4. **Manejo de Eventos e Interceptores en Magento 2**
    - 4.1. [Creación de evento personalizado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c27dfbd9a343df13d9029b7f82c95939dfe77ec7)
    - 4.2. [Creación de plugin before](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/95105cd8a7142b8ba3a41dadb26c7724a1d6b99c)
    - 4.3. [Creación de plugin after](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/0dc4774e5a25ca3059caa5f242aba1467a263a89)
    - 4.4. [Creación de plugin around](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/87de48b55f905c6fdd2942a16d43964205f604a8)
    - 4.5. [Sobrescribiendo una clase usando preferencia](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/fb16ce35651e351d99805e40025f3cfc9f771660)

5. **Fundamentals de JS para Magento 2**
    - 5.1. [Integración de JavaScript en plantillas PHTML con RequireJS](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/b465abf1acf22f55bc1310868508eaaac50ecb65)
    - 5.2. [Accediendo a un módulo JavaScript AMD mediante RequireJS](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/04806dc0c790046a5f73d5af7e099b2cb98dda17)
    - 5.3. [Usando map para crear un alias dentro de RequireJs](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/baa55e33d4ba7565c904a513317bbe8955bd7d37)
    - 5.4. [Usando PATHS para crear un alias dentro de RequireJs](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c962b134733554d28b0da92ad0a5bc128d42ae2f)
    - 5.5. [Implementación de CSP](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a14275e9cf68536930536fc3de8c0bb9fb9e1082)
    - 5.6. [Agregando un componente VueJs de forma imperativa](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/349e82a9c3f168ae2242c88899e72ce609eb9842)
    - 5.7. [Agregando un componente VueJs de forma Declarativa](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/8f0d27e81758811e5b61c075f68099ea557c7bf6)
    - 5.8. [Agregando un componente VueJs de forma Declarativa con x-magento-init](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6f7bcc3ef41e4a78935b8205ab3f10e29f290615)
    - 5.9. [Pasando datos desde un ViewModel a un componente JavaScript](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/92d44014ef9c0b589f67c3232da4fdfb07aa9f9d)
    - 5.10. [Empleando shim para definir la relación entre módulos](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/8cf877bfbace13a5c524cb07bdad19eb47ed5bfa)
    - 5.11. [Empleando deps para cargar un script global](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/33e74c424dd34109fe2b24c379e2606fd1f6203f)
    - 5.12. [Sobrescribir archivos o componentes JavaScript con map](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a7a122c917db4eca8f67c89f94ebd19368d2f2ff) 
    - 5.13. [Sobrescribir métodos de componentes JavaScript con mixins](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/d73d2f6e439c0683c3e6336d3ae51f57dbe76512)
6. **Personalización de Temas y Estilos** 
    - 6.1. [Configuración inicial para un tema personalizado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/f72c7ca68477b5d33adef35f3aafe31797fe93bd)
    - 6.2. [Configuración para subir módulo personalizado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/5ad98f8b95359b15eccdba9f658283b3f5f199aa)

7. **REST API**
    - 7.1. (.....)
    - 7.2. (Próximamente)
    - 7.3. []()

## Requerimientos para Magento 2.4.7

Para poder trabajar con esta versión de Magento, asegúrate de cumplir con los siguientes requisitos:

### Servidor
- **Sistema Operativo:** Linux (preferiblemente distribuciones basadas en Ubuntu) o macOS.
- **RAM:** 2 GB de RAM como mínimo para Magento sin Elasticsearch; 4 GB o más es recomendado.
- **Disco duro:** SSD para mejorar el rendimiento.

### Software
- **PHP:** Versión 8.1
- **MySQL:** 8.0 o MariaDB 10.4
- **Composer:** 2.x
- **Elasticsearch/OpenSearch:** 7.16+ (para búsqueda y catálogo)
- **Nginx:** 1.x o Apache 2.4.x
- **Node.js:** 14.x
- **npm:** 6.x
- **Redis:** 6.x (opcional para almacenamiento en caché)
- **Memcached:** Opcional
- **RabbitMQ:** 3.8.x (opcional para la gestión de colas)

### Extensiones PHP
- ext-bcmath
- ext-ctype
- ext-curl
- ext-dom
- ext-gd
- ext-iconv
- ext-intl
- ext-mbstring
- ext-openssl
- ext-pdo_mysql
- ext-simplexml
- ext-soap
- ext-xsl
- ext-zip
- ext-sockets (para Redis)

### Navegadores Compatibles
- Google Chrome
- Mozilla Firefox
- Safari
- Microsoft Edge

## Instalación

1. Clona el repositorio en tu entorno local:
    ```bash
    git clone https://github.com/PerezContrerasLuis/magento2-dev-guide.git
    ```

2. Asegúrate de cumplir con los requisitos anteriores y de tener instalado Composer:
    ```bash
    composer install
    ```

3. Configura tu archivo `.env` con los parámetros correctos de conexión a la base de datos, Redis, Elasticsearch, entre otros.

## Contribuciones

Este proyecto está diseñado para uso personal, pero se aceptan sugerencias y mejoras a través de pull requests.

---

**Autor:** Luis Pérez Contreras  
**Versión Magento:** 2.4.7  
**Licencia:** MIT  

