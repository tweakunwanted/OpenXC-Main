'use strict';

module.exports = {
    stalker: {
    },
    portal: {
        name: 'magcore-osd-base-portal',
        config: {
            type: 'osd',
            name: 'osd',
            actions: {
                volume: true
            },
            uris: {
                app: '/',
                entry: 'index.html'
            }
        },
        dependencies: {
            'magcore-core-portal': '^2.0.0',
            'magcore-plugin-ufs': '^2.0.0',
            'magcore-plugin-fs': '^2.0.0'
        }
    },
    tizen: {
        name: 'magcore-osd-base-tizen',
        config: {
            type: 'osd',
            name: 'osd',
            actions: {
                volume: true
            },
            uris: {
                app: '/',
                entry: 'index.html'
            }
        },
        dependencies: {
            'magcore-core-tizen': '^2.0.0',
            'magcore-plugin-ufs': '^2.0.0'
        }
    },
    smarttv: {
        name: 'magcore-osd-base-stv',
        config: {
            type: 'osd',
            name: 'osd',
            actions: {
                volume: true
            },
            uris: {
                app: '/',
                entry: 'index.html'
            }
        },
        dependencies: {
            'magcore-core-stv': '^2.0.0',
            'magcore-plugin-ufs': '^2.0.0'
        }
    },
    webos: {
        name: 'magcore-osd-base-webos',
        config: {
            type: 'osd',
            name: 'osd',
            actions: {
                volume: true
            },
            uris: {
                app: '/',
                entry: 'index.html'
            }
        },
        dependencies: {
            'magcore-core-webos': '^2.0.0',
            'magcore-plugin-ufs': '^2.0.0'
        }
    }
};
