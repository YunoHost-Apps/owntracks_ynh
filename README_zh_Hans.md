<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 OwnTracks

[![集成程度](https://dash.yunohost.org/integration/owntracks.svg)](https://dash.yunohost.org/appci/app/owntracks) ![工作状态](https://ci-apps.yunohost.org/ci/badges/owntracks.status.svg) ![维护状态](https://ci-apps.yunohost.org/ci/badges/owntracks.maintain.svg)

[![使用 YunoHost 安装 OwnTracks](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=owntracks)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 OwnTracks。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

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


**分发版本：** 2.15.3~ynh1

## 截图

![OwnTracks 的截图](./doc/screenshots/screenshot.png)

## 文档与资源

- 官方应用网站： <https://owntracks.org/>
- 上游应用代码库： <https://github.com/owntracks/frontend>
- YunoHost 商店： <https://apps.yunohost.org/app/owntracks>
- 报告 bug： <https://github.com/YunoHost-Apps/owntracks_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
或
sudo yunohost app upgrade owntracks -u https://github.com/YunoHost-Apps/owntracks_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
