# Owntracks app for YunoHost

- [Yunohost project](https://yunohost.org)
- [Owntracks website](http://owntracks.org)
- [php-owntracks-recorder](https://github.com/tomyvi/php-owntracks-recorder)

A location history app for YunoHost, based on Owntracks and its PHP implementation for recording and displaying.

## Features

- [Owntracks features for a HTTP API](http://owntracks.org/booklet/tech/http/), limited to the [features implemented by the PHP recorder](https://github.com/tomyvi/php-owntracks-recorder#features). Notably, no Friends feature.
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
