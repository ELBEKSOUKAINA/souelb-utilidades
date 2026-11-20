# Changelog

## [1.1.0] - 2026-11-20
### Añadido
- Oculta la versión de WordPress también en el feed RSS con el filtro `the_generator` (ampliación de la petición 5). Verificado en CP-06.
- README.md y CHANGELOG.md.

## [1.0.0] - 2026-11-20
### Añadido
- Cabecera del plugin y protección contra el acceso directo.
- Caja de contacto al final de las entradas con el filtro `the_content` (petición 3). Verificado en CP-01, CP-08, CP-09 y CP-10.
- Código corto `[anio]` (petición 4). Verificado en CP-05.
- Elimina la meta generator del `<head>` (petición 5). Verificado en CP-06.
- Pantalla de acceso propia con `login_headerurl`, `login_headertext` y `login_message` (petición 6). Verificado en CP-07.
### Corregido
- Error de sintaxis provocado a propósito en la actividad 5 (falta de `;`), localizado con `debug.log` y corregido.
