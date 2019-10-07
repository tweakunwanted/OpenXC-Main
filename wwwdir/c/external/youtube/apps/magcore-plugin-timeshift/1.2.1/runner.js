'use strict';

var path    = require('path'),
    runner  = require('node-runner'),
    // tools   = require('node-runner/lib/tools'),
    webpack = require('webpack'),
    generators = require('spa-tasks'),
    source  = 'src',
    target  = path.join('app');


// activate popup notifications on errors
require('node-runner/lib/notify');

// add system task "status"
// to get all tasks running state
require('node-runner/lib/status');


generators.eslint({
    watch: [
        path.join(source, 'js', '**', '*.js'),
        path.join('tasks', '**', '*.js')
    ]
});

generators.livereload({
    watch: [
        path.join(target, '**', '*'),
        '!' + path.join(target, '**', '*.map')
    ]
});


generators.repl();


generators.webpack({
    entry: path.resolve(path.join(source, 'js', 'index.js')),
    output: {
        filename: 'index.js',
        path: path.resolve(target),
        sourceMapFilename: 'index.js.map',
        libraryTarget: 'commonjs2'
    },
    resolve: {
        alias: {
            'app:config': path.resolve(path.join(source, 'js', 'config.js'))
        }
    },
    devtool: 'source-map',
    plugins: [
        new webpack.DefinePlugin({
            DEVELOP: true,
            LIVERELOAD: {
                port: 35729
            }
        })
    ]
});

generators.webpack({
    entry: path.resolve(path.join(source, 'js', 'index.js')),
    output: {
        filename: 'index.min.js',
        path: path.resolve(target),
        libraryTarget: 'commonjs2'
    },
    resolve: {
        alias: {
            'app:config': path.resolve(path.join(source, 'js', 'config.js'))
        }
    },
    devtool: 'source-map',
    plugins: [
        new webpack.DefinePlugin({
            DEVELOP: false,
            LIVERELOAD: {
                port: 35729
            }
        }),
        new webpack.optimize.UglifyJsPlugin({
            sourceMap: false,
            output: {
                comments: false
            },
            /* eslint camelcase: 0 */
            compress: {
                // display warnings when dropping unreachable code or unused declarations etc.
                warnings: false,
                unused: true,
                dead_code: true,
                drop_console: true,
                drop_debugger: true,
                properties: false,
                pure_funcs: [
                    'debug.assert', 'debug.log', 'debug.info', 'debug.warn', 'debug.fail', 'debug.inspect',
                    'debug.event', 'debug.stub', 'debug.time', 'debug.timeEnd'
                ]
            }
        })
    ]
},{
    prefix: 'release:'
});


runner.task('build', runner.serial('webpack:build'));

runner.task('watch', function () {
    runner.run('webpack:watch');
});

runner.task('serve', runner.parallel('static:start', 'livereload:start', 'repl:start'));

runner.task('default', runner.parallel('build', 'watch'));
