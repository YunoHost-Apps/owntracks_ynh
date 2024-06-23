<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# OwnTracks YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/owntracks.svg)](https://dash.yunohost.org/appci/app/owntracks) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/owntracks.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/owntracks.maintain.svg)

[![Instalatu OwnTracks YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek OwnTracks YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

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


**Paketatutako bertsioa:** 2.15.3~ynh1

## Pantaila-argazkiak

![OwnTracks(r)en pantaila-argazkia](./doc/screenshots/screenshot.png)

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://owntracks.org/>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/owntracks/frontend>
- YunoHost Denda: <https://apps.yunohost.org/app/owntracks>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
edo
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
