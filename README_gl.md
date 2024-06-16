<!--
NOTA: Este README foi creado automáticamente por <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
NON debe editarse manualmente.
-->

# OwnTracks para YunoHost

[![Nivel de integración](https://dash.yunohost.org/integration/owntracks.svg)](https://dash.yunohost.org/appci/app/owntracks) ![Estado de funcionamento](https://ci-apps.yunohost.org/ci/badges/owntracks.status.svg) ![Estado de mantemento](https://ci-apps.yunohost.org/ci/badges/owntracks.maintain.svg)

[![Instalar OwnTracks con YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[Le este README en outros idiomas.](./ALL_README.md)*

> *Este paquete permíteche instalar OwnTracks de xeito rápido e doado nun servidor YunoHost.*  
> *Se non usas YunoHost, le a [documentación](https://yunohost.org/install) para saber como instalalo.*

## Vista xeral

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


**Versión proporcionada:** 2.15.3~ynh1

## Capturas de pantalla

![Captura de pantalla de OwnTracks](./doc/screenshots/screenshot.png)

## Documentación e recursos

- Web oficial da app: <https://owntracks.org/>
- Repositorio de orixe do código: <https://github.com/owntracks/frontend>
- Tenda YunoHost: <https://apps.yunohost.org/app/owntracks>
- Informar dun problema: <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## Info de desenvolvemento

Envía a túa colaboración á [rama `testing`](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

Para probar a rama `testing`, procede deste xeito:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
ou
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**Máis info sobre o empaquetado da app:** <https://yunohost.org/packaging_apps>
