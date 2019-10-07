MAGCORE plugin (StandBy API).
=============================

Usage
=====

In package.json add this plugin into dependencies section:

    "dependencies": {
        "magcore-plugin-settings-standby": "*"
    }


To use this plugin in your app:

    var plugin = core.plugins.standby;  

    plugin.addListener('standbyOn', function () { console.log('Device is going to activate standby'); });
    plugin.addListener('standbyOff', function () { console.log('Standby was diactivated'); });

[![NPM version](https://img.shields.io/npm/v/magcore-plugin-settings-standby.svg?style=flat-square)](https://www.npmjs.com/package/magcore-plugin-settings-standby)
[![Gitter](https://img.shields.io/badge/gitter-join%20chat-blue.svg?style=flat-square)](https://gitter.im/DarkPark/magsdk)
