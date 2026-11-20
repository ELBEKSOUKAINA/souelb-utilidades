# souelb-utilidades

Plugin propio del blog *Flag Hunters* con las funcionalidades del encargo de personalización.

## Qué hace
- Añade una caja «¿Te ha gustado? Escríbeme desde Contacto» al final de las entradas (no en las páginas).
- Registra el código corto `[anio]`, que muestra el año actual.
- Oculta la versión de WordPress en el `<head>` de las páginas y en el feed RSS.
- Personaliza la pantalla de acceso: el logotipo enlaza a la portada y aparece el aviso «Acceso restringido al equipo de Flag Hunters».

## Instalación
1. Copiar la carpeta `souelb-utilidades` en `wp-content/plugins/`.
2. Activarlo en *Plugins*.

## Dependencias
- WordPress 6.x o superior (probado en 7.1.5) y PHP 8.
- Una página con el slug `contacto` para el enlace de la caja.
- Los estilos de la caja (`.souelb-caja-contacto`) están en el tema hijo `souelb-hijo`. Sin él, la caja funciona pero sin formato.

## Autora
Soukaina El Bekbachi · IAW 2º ASIR · Curso 2026/2027
