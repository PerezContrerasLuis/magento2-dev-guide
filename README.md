# Magento 2.4.7 - Guía de Desarrollo de Módulos Personalizados

Este repositorio está dedicado a mis notas y apuntes personales para el desarrollo de módulos personalizados en Magento 2.4.7. Sirve como una guía de consulta rápida para mejorar mis conocimientos y asegurarme de no olvidar los detalles clave a lo largo del proceso de desarrollo.

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

5. **Fundamentals de JS para Magento 2**
    - 5.1. (.....)
    - 5.2. (Próximamente)

6. **Personalización de Temas y Estilos** 
    - 6.1. (.....)
    - 6.2. (Próximamente)

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

