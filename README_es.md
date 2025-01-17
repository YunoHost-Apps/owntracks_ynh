<!--
Este archivo README esta generado automaticamente<https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
No se debe editar a mano.
-->

# OwnTracks para Yunohost

[![Nivel de integración](https://apps.yunohost.org/badge/integration/owntracks)](https://ci-apps.yunohost.org/ci/apps/owntracks/)
![Estado funcional](https://apps.yunohost.org/badge/state/owntracks)
![Estado En Mantención](https://apps.yunohost.org/badge/maintained/owntracks)

[![Instalar OwnTracks con Yunhost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[Leer este README en otros idiomas.](./ALL_README.md)*

> *Este paquete le permite instalarOwnTracks rapidamente y simplement en un servidor YunoHost.*  
> *Si no tiene YunoHost, visita [the guide](https://yunohost.org/install) para aprender como instalarla.*

## Descripción general

This is a web interface for OwnTracks built as a Vue.js single page application. The recorder itself already ships with some basic web pages, this is a more advanced interface with more functionality, all in one place.

### Features

- Last known (i.e. live) locations:
- Location history (data points, line or both)
- Location heatmap
- Quickly fit all shown objects on the map into view
- Display data in a specific date and time range
- Filter by user or specific device
- Calculation of distance travelled
- Download selected location data as JSON
- Highly customisable


**Versión actual:** 2.15.3~ynh1

## Capturas

![Captura de OwnTracks](./doc/screenshots/screenshot.png)

## Documentaciones y recursos

- Sitio web oficial: <https://owntracks.org/>
- Repositorio del código fuente oficial de la aplicación : <https://github.com/owntracks/frontend>
- Catálogo YunoHost: <https://apps.yunohost.org/app/owntracks>
- Reportar un error: <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## Información para desarrolladores

Por favor enviar sus correcciones a la [rama `testing`](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

Para probar la rama `testing`, sigue asÍ:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
o
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**Mas informaciones sobre el empaquetado de aplicaciones:** <https://yunohost.org/packaging_apps>
