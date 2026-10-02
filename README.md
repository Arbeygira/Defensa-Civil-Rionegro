# Gestión Operativa · Defensa Civil Colombiana

Aplicación web local para gestionar voluntariado, certificaciones, asistencia, dotación, inventario y emergencias de una unidad operativa.

## Uso

Abre `index.html` en un navegador moderno. No requiere instalación ni conexión a un servidor. La primera vista incluye registros de demostración editables.

- **Resumen:** indicadores de la unidad, asistencia del día, agenda y alertas de existencias.
- **Personal:** directorio, búsqueda, filtros, alta y edición de voluntarios; exportación CSV.
- **Asistencia:** registro por fecha con estados presente, ausente y excusa; exportación CSV.
- **Dotación:** entrega y devolución de elementos con actualización automática del inventario.
- **Inventario:** control de existencias, mínimos, categorías, ubicación y movimientos.
- **Certificaciones:** estado local de vinculación, cursos y carné; accesos a los trámites oficiales de certificación de capacitaciones, vinculación y carné digital.
- **Emergencias:** selección de ubicación en el mapa, registro de tipo, prioridad, responsable y novedades; seguimiento del estado de atención.
- **Identidad visual:** configuración del logo de navegación y del favicon desde Configuración; los cambios se guardan localmente y se incluyen en el respaldo.
- **Reportes:** indicadores de gestión y exportación del resumen.
- **Configuración:** datos de la unidad, respaldo JSON y restauración.

Los cambios se guardan automáticamente en el almacenamiento local del navegador. El respaldo JSON está disponible en Configuración. CSV utiliza separador punto y coma y codificación compatible con hojas de cálculo en español.

El mapa usa Leaflet y teselas de OpenStreetMap, por lo que requiere conexión a internet. Selecciona un punto en el mapa antes de crear un reporte y completa la dirección de referencia manualmente.

Los reportes de emergencia pueden cambiar de estado o eliminarse con confirmación. Para la marca de la unidad, sube imágenes PNG, JPG o WebP de hasta 500 KB desde Configuración; puedes restaurar la identidad azul, blanca y anaranjada en cualquier momento.

## Privacidad y alcance

Esta versión es una herramienta local de demostración: los datos no se sincronizan entre equipos, no tienen control de acceso y no se envían a un servidor. Los cursos, el estado del carné y la vinculación mostrados en la aplicación son registros locales y no una consulta en vivo al SIM. Los trámites oficiales se abren en el portal de la Defensa Civil Colombiana. El carné digital se envía al correo registrado en el SIM; las novedades se tramitan con la Dirección Seccional.

El navegador y el perfil de usuario son responsables de proteger los datos. No se recomienda almacenar documentos, teléfonos, datos de salud ni detalles sensibles de emergencias en equipos compartidos. Para uso institucional se requiere definir autenticación, autorización por roles, alojamiento seguro, copias de seguridad y políticas de tratamiento de datos antes de registrar información real. Los reportes locales no sustituyen canales oficiales de atención ni despacho; la línea de emergencia nacional de la entidad es el 144.
