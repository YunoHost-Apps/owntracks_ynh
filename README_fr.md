<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# OwnTracks pour YunoHost

[![Niveau d’intégration](https://apps.yunohost.org/badge/integration/owntracks)](https://ci-apps.yunohost.org/ci/apps/owntracks/)
![Statut du fonctionnement](https://apps.yunohost.org/badge/state/owntracks)
![Statut de maintenance](https://apps.yunohost.org/badge/maintained/owntracks)

[![Installer OwnTracks avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer OwnTracks rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

Il s'agit d'une interface Web pour OwnTracks construite comme une application Vue.js à page unique. L'enregistreur lui-même est déjà livré avec quelques pages Web de base. Il s'agit d'une interface plus avancée avec plus de fonctionnalités, le tout en un seul endroit.

### Caractéristiques

- Derniers emplacements connus (c'est-à-dire en direct) :
- Historique de localisation (points de données, ligne ou les deux)
- Carte thermique de localisation
- Ajustez rapidement tous les objets affichés sur la carte
- Afficher les données dans une plage de date et d'heure spécifique
- Filtrer par utilisateur ou appareil spécifique
- Calcul de la distance parcourue
- Télécharger les données de localisation sélectionnées au format JSON
- Hautement personnalisable

**Version incluse :** 2.15.3~ynh2

## Captures d’écran

![Capture d’écran de OwnTracks](./doc/screenshots/screenshot.png)

## Documentations et ressources

- Site officiel de l’app : <https://owntracks.org/>
- Dépôt de code officiel de l’app : <https://github.com/owntracks/frontend>
- YunoHost Store : <https://apps.yunohost.org/app/owntracks>
- Signaler un bug : <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
ou
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
