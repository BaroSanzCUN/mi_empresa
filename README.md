# Mi Empresa - Tienda de Ropa Online

Proyecto backend enfocado en recrear una tienda de ropa en línea utilizando PHP y MySQL. Este proyecto incluye una API REST completa para gestión de productos, usuarios y pedidos, así como una interfaz web básica para demostración.

## Características

- **API REST** completa para gestión de productos
- **Base de datos MySQL** con esquema optimizado
- **Frontend responsive** con HTML, CSS y JavaScript
- **Arquitectura MVC** para mejor organización del código
- **Validación y sanitización** de datos
- **Manejo de errores** robusto
- **Diseño responsive** que funciona en móviles y escritorio

## Estructura del Proyecto

```
mi_empresa/
├── src/
│   ├── config/          # Configuración de base de datos
│   ├── models/          # Modelos de datos (Product, User)
│   └── controllers/     # Controladores de API
├── database/            # Esquemas y scripts SQL
├── public/              # Frontend web
│   ├── css/             # Estilos CSS
│   ├── js/              # JavaScript
│   └── index.html       # Página principal
└── README.md
```

## Instalación

### Prerrequisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache/Nginx) o PHP built-in server

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/BaroSanzCUN/mi_empresa.git
   cd mi_empresa
   ```

2. **Configurar la base de datos**
   ```bash
   # Ejecutar el script SQL para crear la base de datos y tablas
   mysql -u root -p < database/schema.sql
   ```

3. **Configurar la conexión a la base de datos**
   - Copiar `src/config/config.example.php` a `src/config/config.php`
   - Actualizar las credenciales de la base de datos en el archivo

4. **Iniciar el servidor**
   ```bash
   # Opción 1: Usando PHP built-in server
   cd public
   php -S localhost:8000
   
   # Opción 2: Configurar en Apache/Nginx
   # Apuntar el DocumentRoot a la carpeta 'public'
   ```

5. **Acceder a la aplicación**
   - Abrir el navegador en `http://localhost:8000`

## API Endpoints

### Productos

- **GET** `/src/controllers/ProductController.php` - Obtener todos los productos
- **GET** `/src/controllers/ProductController.php?id={id}` - Obtener un producto específico
- **POST** `/src/controllers/ProductController.php` - Crear nuevo producto
- **PUT** `/src/controllers/ProductController.php` - Actualizar producto
- **DELETE** `/src/controllers/ProductController.php` - Eliminar producto

### Ejemplo de uso de la API

```bash
# Obtener todos los productos
curl -X GET http://localhost:8000/src/controllers/ProductController.php

# Crear un nuevo producto
curl -X POST http://localhost:8000/src/controllers/ProductController.php \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Camiseta Nueva",
    "description": "Una camiseta muy cómoda",
    "price": 29.99,
    "stock_quantity": 20,
    "category_id": 1
  }'
```

## Base de Datos

El proyecto incluye las siguientes tablas:

- **users** - Información de usuarios
- **categories** - Categorías de productos
- **products** - Productos de la tienda
- **orders** - Pedidos de clientes
- **order_items** - Items individuales de cada pedido

## Tecnologías Utilizadas

- **Backend**: PHP 7.4+, PDO para base de datos
- **Base de datos**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Arquitectura**: MVC (Model-View-Controller)

## Desarrollo

### Agregar nuevos productos

Los productos se pueden agregar a través de la API o directamente en la base de datos. El sistema incluye datos de ejemplo para comenzar.

### Personalización

- Modificar `public/css/style.css` para cambiar el diseño
- Editar `public/js/main.js` para agregar funcionalidad
- Extender los modelos en `src/models/` para nuevas características

## Contribución

1. Fork el proyecto
2. Crear una rama para tu característica (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abrir un Pull Request

## Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## Contacto

- **Proyecto**: [https://github.com/BaroSanzCUN/mi_empresa](https://github.com/BaroSanzCUN/mi_empresa)
- **Issues**: [https://github.com/BaroSanzCUN/mi_empresa/issues](https://github.com/BaroSanzCUN/mi_empresa/issues)
