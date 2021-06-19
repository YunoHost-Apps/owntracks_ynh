# Owntracks for YunoHost

[![Integration level](https://dash.yunohost.org/integration/owntracks.svg)](https://dash.yunohost.org/appci/app/owntracks) ![](https://ci-apps.yunohost.org/ci/badges/owntracks.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/owntracks.maintain.svg)  
[![Install Owntracks with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

> *This package allows you to install Owntracks quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
A location history app for YunoHost, based on Owntracks and its PHP implementation for recording and displaying.

## Features

- [Owntracks features for a HTTP API](http://owntracks.org/booklet/tech/http/), limited to the [features implemented by the PHP recorder](https://github.com/tomyvi/php-owntracks-recorder#features). Notably, no Friends feature. The [upstream PHP recorder has been tweaked](https://github.com/tituspijean/php-owntracks-recorder) to remove a cumbersome PHP dependency.
- Multi-user: each YunoHost user can connect though basic HTTP authentication, and has only access to their data.

## Installation

- Install the app on your YunoHost server
- Install the mobile app on your device, see [Owntracks website](http://owntracks.org)
- Configure your mobile app:
  - Allow it to access your location
  - Preference > Connection
    - Mode: `Private http`
    - Host: `https://DOMAIN/PATH/record.php`
    - Identification
       - Authentication: `enabled`
       - Username/password: your YNH credentials
       - Device ID: as you wish
   - Refer to the [Owntracks documentation](http://owntracks.org/booklet) for the other settings

## Configuration

How to configure this app: From an admin panel, a plain file with SSH, or any other way.

## Documentation

 * Official documentation: Link to the official documentation of this app
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Multi-user support

 * Are LDAP and HTTP auth supported?
 * Can the app be used by multiple users?

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/owntracks.svg)](https://ci-apps.yunohost.org/ci/apps/owntracks/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/owntracks.svg)](https://ci-apps-arm.yunohost.org/ci/apps/owntracks/)

## Limitations

* Any known limitations.

## Additional information

* Other info you would like to add about this app.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/owntracks_ynh/issues
 * App website: http://owntracks.org
 * [php-owntracks-recorder](https://github.com/tomyvi/php-owntracks-recorder)
 * [php-owntracks-recorder altered version for YunoHost](https://github.com/tituspijean/php-owntracks-recorder)
 * Upstream app repository: Link to the official repository of the upstream app.
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
or
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```
