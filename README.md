# Magento 2.4.7 - Guía de Desarrollo de Módulos Personalizados

Este repositorio está dedicado a mis notas y apuntes personales para el desarrollo de módulos personalizados en Magento 2.4.7. Sirve como una guía de consulta rápida para mejorar mis conocimientos y asegurarme de no olvidar los detalles clave a lo largo del proceso de desarrollo.

## Índice

1. **Fundamentos de Módulos Personalizados**
    - 1.1. [Creación de módulo](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/d5b29129c1d3b8c9d0f1b15d2108bb834a0761b3)
    - 1.2. [Routers and Controller](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/e0eff2e7841fa1ecb3770095c0084579dc61b646)
     - 1.3. [Factories e inyección de dependencias](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/6a933d0fa9c00ff69f118cc2c45f740be0c11eee)
     - 1.4. [Implementación de redirect](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/a9540be4399af82486667a35b494bf917d97a6d5)
     - 1.5. [Implementación de forward](https://github.com/PerezContrerasLuis/magento2-dev-guide/commit/0d935aa4598348a8e906131d22f7136664404948)

2. **Estructura**
    - 2.1. (Próximamente)
    - 2.2. (Próximamente)

3. **Modelo de Base de Datos**
    - 3.1. (Próximamente)
    - 3.2. (Próximamente)

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

