<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**

# 🚀 Sistema de Ventas - Laravel MVC

## 📋 Descripción del Proyecto

Sistema completo de gestión de ventas y usuarios desarrollado en Laravel (PHP), implementando el patrón MVC, Eloquent ORM y autenticación robusta. El proyecto incluye módulos para administración de usuarios, productos, ventas, reportes y perfil.

## ✨ Funcionalidades Implementadas

### 🔐 Sistema de Autenticación
- ✅ Registro y login de usuarios con encriptación de contraseñas
- ✅ Recuperación de contraseña vía email
- ✅ Gestión de sesiones seguras
- ✅ Validación de emails únicos
- ✅ Roles y permisos (Admin, Usuario)

### 🛠️ Sistema CRUD
- ✅ CRUD de usuarios, productos y ventas
- ✅ Búsqueda y filtrado en tiempo real
- ✅ Actualización de datos de perfil y foto de perfil
- ✅ Eliminación de registros con confirmación
- ✅ Exportación de datos

### 🏗️ Arquitectura Técnica
- ✅ Patrón **Modelo-Vista-Controlador (MVC)**
- ✅ **Laravel 10+** con Eloquent ORM
- ✅ **Consultas preparadas** para prevenir inyección SQL
- ✅ **Validación y sanitización** de datos
- ✅ Respuestas **API RESTful**
- ✅ **JavaScript moderno** para frontend dinámico
- ✅ Diseño **responsive** con Bootstrap

## 🔧 Stack Técnico

| Tecnología | Versión | Propósito |
|------------|---------|-----------|
| PHP | 8+ | Backend con Laravel |
| MySQL | 5.7+ | Base de datos |
| JavaScript | ES6+ | Frontend dinámico |
| HTML5/CSS3 | - | Interfaz de usuario |
| Laravel | 10+ | Framework MVC |
| Bootstrap | 4/5 | Diseño responsive |

## 📁 Estructura del Proyecto

```
Sistema_Ventas/
├── app/
│   ├── Http/Controllers/         # Controladores
│   ├── Models/                   # Modelos Eloquent
│   ├── Mail/                     # Emails
│   └── Providers/                # Servicios
├── config/                      # Configuración
├── database/                    # Migraciones y seeders
├── public/                      # Archivos públicos (CSS, JS, imágenes)
├── resources/views/             # Vistas Blade
├── routes/                      # Rutas web y API
├── storage/                     # Archivos y logs
├── tests/                       # Pruebas unitarias y funcionales
└── vendor/                      # Dependencias Composer
```

## 🔐 Seguridad Implementada

- **Encriptación de contraseñas** con bcrypt
- **Recuperación de contraseña** por email
- **Consultas preparadas** para prevenir SQL injection
- **Validación de datos** en backend y frontend
- **Sesiones seguras**
- **Roles y permisos**

## 🚀 Funcionalidades por Implementar

- [ ] Reportes avanzados de ventas
- [ ] Dashboard con estadísticas
- [ ] Integración de pagos
- [ ] Notificaciones en tiempo real

## 💻 Instalación y Configuración

### Prerequisitos
- XAMPP (Apache + MySQL + PHP)
- Composer
- Navegador web moderno
- Git

### Pasos de Instalación
1. Clonar el repositorio en la carpeta `htdocs` de XAMPP
2. Instalar dependencias con `composer install`
3. Configurar `.env` para la conexión a la base de datos
4. Ejecutar migraciones: `php artisan migrate`
5. Iniciar Apache y MySQL desde XAMPP
6. Acceder a `http://localhost/Sistema_Ventas/public/`

## 🧪 Testing

- ✅ Registro y login probados
- ✅ CRUD de usuarios, productos y ventas operativo
- ✅ Validaciones frontend y backend verificadas
- ✅ Seguridad de contraseñas confirmada
- ✅ Recuperación de contraseña funcional

## 📝 Notas de Desarrollo

Este proyecto forma parte de un portafolio profesional, desarrollado con:
- Buenas prácticas de programación
- Seguridad en aplicaciones web
- Arquitectura escalable y mantenible
- Experiencia de usuario profesional

---

**Desarrollado con ❤️ en Laravel y PHP**

*Última actualización: Marzo 2026*




