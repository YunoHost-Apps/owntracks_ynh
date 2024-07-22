<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# OwnTracks untuk YunoHost

[![Tingkat integrasi](https://dash.yunohost.org/integration/owntracks.svg)](https://ci-apps.yunohost.org/ci/apps/owntracks/) ![Status kerja](https://ci-apps.yunohost.org/ci/badges/owntracks.status.svg) ![Status pemeliharaan](https://ci-apps.yunohost.org/ci/badges/owntracks.maintain.svg)

[![Pasang OwnTracks dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang OwnTracks secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

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


**Versi terkirim:** 2.15.3~ynh1

## Tangkapan Layar

![Tangkapan Layar pada OwnTracks](./doc/screenshots/screenshot.png)

## Dokumentasi dan sumber daya

- Website aplikasi resmi: <https://owntracks.org/>
- Repositori kode aplikasi hulu: <https://github.com/owntracks/frontend>
- Gudang YunoHost: <https://apps.yunohost.org/app/owntracks>
- Laporkan bug: <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
atau
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
