<!--
To README zostało automatycznie wygenerowane przez <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Nie powinno być ono edytowane ręcznie.
-->

# OwnTracks dla YunoHost

[![Poziom integracji](https://apps.yunohost.org/badge/integration/owntracks)](https://ci-apps.yunohost.org/ci/apps/owntracks/)
![Status działania](https://apps.yunohost.org/badge/state/owntracks)
![Status utrzymania](https://apps.yunohost.org/badge/maintained/owntracks)

[![Zainstaluj OwnTracks z YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[Przeczytaj plik README w innym języku.](./ALL_README.md)*

> *Ta aplikacja pozwala na szybką i prostą instalację OwnTracks na serwerze YunoHost.*  
> *Jeżeli nie masz YunoHost zapoznaj się z [poradnikiem](https://yunohost.org/install) instalacji.*

## Przegląd

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


**Dostarczona wersja:** 2.15.3~ynh2

## Zrzuty ekranu

![Zrzut ekranu z OwnTracks](./doc/screenshots/screenshot.png)

## Dokumentacja i zasoby

- Oficjalna strona aplikacji: <https://owntracks.org/>
- Repozytorium z kodem źródłowym: <https://github.com/owntracks/frontend>
- Sklep YunoHost: <https://apps.yunohost.org/app/owntracks>
- Zgłaszanie błędów: <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## Informacje od twórców

Wyślij swój pull request do [gałęzi `testing`](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

Aby wypróbować gałąź `testing` postępuj zgodnie z instrukcjami:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
lub
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**Więcej informacji o tworzeniu paczek aplikacji:** <https://yunohost.org/packaging_apps>
