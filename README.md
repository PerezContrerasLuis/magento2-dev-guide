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
1. **Fundamentos de Creación de Módulos** 
    - 1.1. [Creación de módulo](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/d5b29129c1d3b8c9d0f1b15d2108bb834a0761b3)
    - 1.2. [Routers and Controller](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e0eff2e7841fa1ecb3770095c0084579dc61b646)
     - 1.3. [Fabricas e inyección de dependencias](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6a933d0fa9c00ff69f118cc2c45f740be0c11eee)
     - 1.4. [Implementación de redirect](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a9540be4399af82486667a35b494bf917d97a6d5)
     - 1.5. [Implementación de forward](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/0d935aa4598348a8e906131d22f7136664404948)

2. **Fundamentos de Creación de Layouts y Templates en Magento 2** 
     - 2.1. [Layouts y Templates Personalizados](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2da2001a13ba7da07e8ec07e6f733aa553e37706)
     - 2.2. [Templates para contenido principal y barra lateral](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/553049b9c385f3675ecda12e7ce20958f031e63b)
     - - 2.2.1. [Resultado en el navegador](https://github.com/PerezContrerasLuis/magento2-dev-guide/blob/main/docs/screenshots/blog_post_detail.png)
     - 2.3. [Mover bloques de magento dentro de una vista](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/8b614fe2411149d271881f927e1d7ae529582150)
     - - 2.3.1. [Resultado en el navegador](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/48ec6a80a9c9d7a86c476b299060df1c5b4efaf6)
     - 2.4. [Traduccion de texto de plantillas con i18n](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ae06bf8bb95ab22e627783de494281216c14721c)
     - 2.5. [Sobrescribir una plantilla de bloque existente en Magento](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/afea5f72035db153719e1a388c163bd22de8c4ef)

3. **Gestión y Persistencia de Datos en (BDD)**
    - 3.1. [Creación de tabla con db_schema.xml](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a1c508792ca81858a2c928227db98f4e4f9e9d66)
    - 3.2. [Gestión de columnas de base de datos con db_schema_whitelist](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/91c4925131846bfc0e8721258475dfee075f73e9)
    - 3.3. [Implementación de Model, ResourceModel y Collection para gestión de datos](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/440412ef139f11ed8801bc413dcb93a438a013c7)
    - 3.4. [Contrato de servicios DTO, repositoryInterface y repositorio](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/f215e274daf245ce3cf0fe24a914d2bd776bdddb)
    - 3.5. [Implementación de DTO en el modelo Post](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/7ae3dbc18fe94a10716f70268be3d110c6a4d782)
    - 3.6. [Usando PostRepository para leer datos con ResourceModel](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ef86a7eab3c07b3aff6d40531f25bf7362a30a51)
    - 3.7. [Usando PostRepository para guardar datos con ResourceModel](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/5a3058e3c6fd18e7a44799adb9be4674b7030f38)
    - 3.8. [Usando PostRepository para eliminar datos con ResourceModel](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/15d2d013477b19237529adf9b447e8a1e31a10aa)
    - 3.9. [Insertando datos en la tabla de blog usando Data Patch](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/12e00bd910fe25d34898e3f629f810cca21927ff)
    - 3.10. [Exponiendo los métodos de PostRepositoryInterface como endpoints de una API REST](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/655e3f9c85661a6a1ff7b27615690c5a761699a5)

4. **View Models y Repositorios para Carga de Datos**
    - 4.1. [¿Qué es un ViewModel en Magento 2 y por qué usarlo?](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2791a7e28091dfb7b20a25aed056f45339a89808)
    - 4.2. [Pasando datos a template List mediante un ViewModel que usa Collection](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/b7a4bfc1b44eccb94c92e9d5ad4756ec575c57b8)
    - 4.3. [Pasando datos a template Sidebar mediante un ViewModel que usa Collection](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/60f0040833a62574960cbfc32247dcd7eb120a03)
    - 4.4. [Agregando función getCount al ViewModel Post](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e53307668af48c5cc4b8e56d11ea88342c85dfa8)
    - 4.5. [Pasando datos a template List mediante un ViewModel usando PostRepository](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e3e18f8535e9eaaddcd6561ff902859118a1609c)

5. **Manejo de Eventos e Interceptores en Magento 2**
    - 5.1. [Creación de evento personalizado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c27dfbd9a343df13d9029b7f82c95939dfe77ec7)
    - 5.2. [Creación de plugin before](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/95105cd8a7142b8ba3a41dadb26c7724a1d6b99c)
    - 5.3. [Creación de plugin after](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/0dc4774e5a25ca3059caa5f242aba1467a263a89)
    - 5.4. [Creación de plugin around](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/87de48b55f905c6fdd2942a16d43964205f604a8)
    - 5.5. [Sobrescribiendo una clase usando preferencia](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/fb16ce35651e351d99805e40025f3cfc9f771660)

6. **Fundamentals de JS para Magento 2**
    - 6.1. [Integración de JavaScript en plantillas PHTML con RequireJS](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/b465abf1acf22f55bc1310868508eaaac50ecb65)
    - 6.2. [Accediendo a un módulo JavaScript AMD mediante RequireJS](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/04806dc0c790046a5f73d5af7e099b2cb98dda17)
    - 6.3. [Usando map para crear un alias dentro de RequireJs](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/baa55e33d4ba7565c904a513317bbe8955bd7d37)
    - 6.4. [Usando PATHS para crear un alias dentro de RequireJs](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c962b134733554d28b0da92ad0a5bc128d42ae2f)
    - 6.5. [Implementación de CSP](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a14275e9cf68536930536fc3de8c0bb9fb9e1082)
    - 6.6. [Agregando un componente VueJs de forma imperativa](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/349e82a9c3f168ae2242c88899e72ce609eb9842)
    - 6.7. [Agregando un componente VueJs de forma Declarativa](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/8f0d27e81758811e5b61c075f68099ea557c7bf6)
    - 6.8. [Agregando un componente VueJs de forma Declarativa con x-magento-init](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6f7bcc3ef41e4a78935b8205ab3f10e29f290615)
    - 6.9. [Pasando datos desde un ViewModel a un componente JavaScript](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/92d44014ef9c0b589f67c3232da4fdfb07aa9f9d)
    - 6.10. [Empleando shim para definir la relación entre módulos](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/8cf877bfbace13a5c524cb07bdad19eb47ed5bfa)
    - 6.11. [Empleando deps para cargar un script global](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/33e74c424dd34109fe2b24c379e2606fd1f6203f)
    - 6.12. [Sobrescribir archivos o componentes JavaScript con map](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a7a122c917db4eca8f67c89f94ebd19368d2f2ff) 
    - 6.13. [Sobrescribir métodos de componentes JavaScript con mixins](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/d73d2f6e439c0683c3e6336d3ae51f57dbe76512)

7. **Creación de Temas Personalizados para Magento 2** 
    - 7.1. [Configuración inicial para un tema personalizado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/f72c7ca68477b5d33adef35f3aafe31797fe93bd)
    - 7.2. [Configuración para subir logo módulo personalizado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/5ad98f8b95359b15eccdba9f658283b3f5f199aa)
    - 7.3. [Definición de vista previsualización para el tema](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/22737be3b0a5fa7d105a6c87c8fe6453e3fa2842)
    - 7.4. [Creación y activación de un diseño de página personalizado en Magento](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/b9e47c10fd19e904a26fe6304dcee0aa5ea50f6e)
    - 7.5. [Extender layout para eliminar un block](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/f2505b416822906b22959a2d551963884e9d719d)
    - 7.6. [Sobrescribir un Layout](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/32655024168ad72b2894e330e6935872451a694f)
    - 7.7. [Activar un diseño de página (Page Layout) para un handle específico](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2f9dfb6aebe29752fdc7d3fcdfef547465996902)
    - 7.8. [Creación de Container, block y template para un footer](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a623dfc8930156fc1ac0173a89bf149aa251d739)
    - 7.9. [Módulo para agregar funcionalidad al tema personalizado de Ladi.](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c3d69c32f08cf3dd49034358637578ee94af8f99)
    - 7.10. [Implementación de ViewModel en un template](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c4b4026aac647be0353f58f5ca7e664f11f96a57)
    - 7.11. [Agregar información a la página del carrito de compras](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/3a64edfd247df08f5d7d4d90d66d331d7f6d4827)
    - 7.12. [Cargar un bloque mediante Layout sin usar Widgets](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/882eb7762f99357643ea81c0b648dd9ce72a9278)
    - 7.13. [Sobrescribiendo una plantilla (template) desde el tema](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/0fb57e864a9c36a0a54eab4feb77a4154c20463d)
    - 7.14. [Insertar imagen en un template](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/4097bb71d94a255a97f91de19e2ef8fa12068265)
    - 7.15. [Agregar librería EXTERNA (Animate on Scroll - AOS)](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6ef28b514474dc8a75a19d202886e21e962767c6)
    - 7.16. [Sobrescribir un archivo LESS en Magento 2](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e9caadb34c870b266c00d1c217e03cee6b015d5d)
    - 7.17. [Sobrescribir el archivo LESS de un módulo en Magento 2](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a29d50d7113fdda8a2392ba2d348992ce1a3e214)
    - 7.18. [Extender estilos de un módulo en Magento 2 con _extend.less](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/4ea6d05e3e944abe1267207ebf14423df77aaa2c)
    - 7.19. [Implementando librería UI para crear un tooltip con un mixin](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/7c9e06311e8cf188499e97cb81e9abad6cf9b79b)


8. **REST API**
    - 7.1. (.....)
    - 7.2. (Próximamente)
    - 7.3. []()

9. **Componentes UI**
    - 9.1. [¿Qué son los UI Components en Magento?](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/9bf8a232ad65229ba948a76e42fb95cd166baa5e)
    - 9.2. [Creación de módulo FreeShippingPromo](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/3590376241a1d0ce7dc19075d090be2df1a42eb4)
    - 9.3. [Agregando el bloque en el encabezado](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/eafa4cf8f696937732f232489261f934edddd845)
    - 9.4. [Agregando estilos al banner](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e8795004f73b24923b8f80c4428051242f8b0cd3)
    - 9.5. [Creación de Componente Básico](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ab8c304b67335977fde916fce24d5d7fb790291f)
    - 9.6. [Sintaxis alternativa para configuración del componente](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ecff38742d6157bb6e25c0b8db4072395fd55bf0)
    - 9.7. [Extendiendo la clase base uiComponent](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/375136d43a4c1735115eb6bf59a783085302f656)
    - 9.9. [Entendiendo las propiedades defaults](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/cb3c05520e29bb574ad235c95bb09b17f2b5e0e8)
    - 9.10. [Vinculación de datos en UI Components con data-bind](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/baa386ff67ae0f50dc3c93481a5a738d63ac219b)
    - 9.11. [Crear una plantilla KnockoutJS](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/59a2bf1db63aa6e85e41b88b508228487aa4471e)
    - 9.12. [Fallbacks y sobrescritura de propiedades en UI Components](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/db472b654585fe9846dd4fc2445978e8f5f435bc)
    - 9.13. [Vinculando propiedades con el DOM](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/61ce7fcff5dc1b0d7f6d2c7ec0d81fe6e002d74b)
    - 9.14. [Tracks en UI Components](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/d9b8f158909a8047d7581e0bdf333421e035b2eb) 
    - 9.15. [Obteniendo datos del subtotal del carrito](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/b088c6f8c42d0c93c76a36a651a2a36a5c1bafa5)
    - 9.16. [Suscripción a customerData.getCart](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a8f5f0a8d58a0030756e89296ccb34a1041ecc96)
    - 9.17. [Acceder a propiedades de UI Component con template literals](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2db948ae8a24d2d3122bf2d0fa938b30b1b4af94)
    - 9.18. [Crear propiedades computadas con Knockout](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/ddf1ad176c395adc53f8ba569c934270f334b0dc)
    - 9.19. **Extensión y sobrescritura de Componentes UI**
        - 9.19.1. [Sobrescribir métodos de UI Component](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6393c240435bc70ee2e21f4bda96f09ddbbfc6f4)
        - 9.19.2. [Sobrescribiendo el template de un UI Component](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/fd840d1b99471576efea0d85ba1ed71ae46bb3b4)
        - 9.19.3. [Sobrescribir un template de UI Component con Static Path Mapping](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/7dbe26696d7a762eadeb902c0b5795db00d802d0)

10. **Admin Grids en magento 2**
    - 10.1. [Creando (ACL) Lista de Control de Acceso](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2a3dc3c31fe86f84061f0bd06de3b30a8c1e6d60)
    - 10.2. [Creando el elemento menú en el admin](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/eb32c7ac2fabde7604c765e8a83c3d4ff5e4d4f8)
    - 10.3. [Creación de Controlador y Ruta Admin](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/679c6bf0f05bd79517c35c08794992d6fd3fd507)
    - 10.4. [Configuración del modelo de datos](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/3740eee1b19ecaac82e23426ad12eea251aec634)
    - 10.5. [Crear tabla en la base de datos con Declarative Schema](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/9bb4f2800b5ec9089e0b80d175cc21e3607bf757)
    - 10.6. [Insertando datos en una tabla](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/4240b85a34dfc1a29e822c6f29f7d5230eccd79e)
    - 10.7. [Creando clase virtual para el Grid Collection](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/50b699ee8502d5344814f1ab79209f033122595b)
    - 10.8. [Creacion del admin grid Simple](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/51e9859031485b96e4262c2e2f2baa3addf87fad)
    - 10.9. [ Personalizar columnas del grid del admin](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/1ffa19546f9d04a5097930b94249a9c0237b80a7)
    - 10.10. [Agregar una columna de acciones al grid del administrador](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/3eb241192e8f25251a934fddc9ad6c11d993bb67)
    - 10.11. [Creacion de la acción para editar un registro en el panel de Magento](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/2ec96a0490d464f4743595d39a063278359e87ae)
    - 10.12. [Controlador para Eliminar Registros en el Admin Grid](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/c2a1d6fd7bfe16e724205f09b19d78bd9f2dd295)
    - 10.13. []()
    - 10.14. []()
    - 10.15. []()
    - 10.16. []()
    - 10.17. []()
    - 10.18. []()
    - 10.19. []()
    - 10.20. []()
    - 10.21. []()
    - 10.22. []()
    - 10.23. []()
    - 10.24. []()
    - 10.25. []()
    - 10.26. []()
    - 10.27. []()
    - 10.28. []()
    - 10.29. []()
    - 10.30. []()
    - 10.31. []()
    - 10.32. []()
  

11. **Personalizando el Checkout en magento 2**
    - 11.1. (.....)
    - 11.2. (Próximamente)

12. **Entendiendo Knockout en magento 2**
    - 12.1. (.....)
    - 12.2. (Próximamente)

13. **Implementando GraphQL en magento 2**
    - 12.1. (.....)
    - 12.2. (Próximamente)

14. **Entendiendo las colas de mensajes en magento 2**
    - 14.1. (.....)
    - 14.2. (Próximamente)
   

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

