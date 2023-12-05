const
    mix = require('laravel-mix'),
    buildDir = 'public/assets/build',
    assetsDir = 'resources/assets',
    nodeDir = 'node_modules',
    fs = require('fs')
    
/**
 * Mix config
*/

if (!mix.inProduction()) {
    mix.sourceMaps(false, 'source-map')
}

mix.version()

.setPublicPath(buildDir)

.setResourceRoot(buildDir)

.webpackConfig({
    output: {
        chunkFilename: 'js/[name].js?id=[contenthash]',
        publicPath: '/assets/build/'
    }
})

/**
 * Frontend CSS
*/

.sass(assetsDir + '/frontend/scss/app.scss', buildDir + '/css/frontend.css')

/**
 * Frontend JS
*/

.js(assetsDir + '/frontend/js/app.js', buildDir + '/js/frontend.js')


/**
 * Backend CSS
*/

.sass(assetsDir + '/backend/scss/app.scss', buildDir + '/css/backend.css')

/**
 * Backend JS
*/

.js(assetsDir + '/backend/js/app.js', buildDir + '/js/backend.js')

/**
 * Versioning
*/

//Add fonts to mix-manifest
.after(stats => {
    
    const file = ('./' + buildDir + '/mix-manifest.json')
    
    const manifest = JSON.parse(
        fs.readFileSync(file).toString()
    )

    Object.keys(stats.compilation.assets).forEach(asset => {
        
        if (!/^fonts\/(.*?)$/.test(asset))
            return;

        manifest['/' + asset.split('?')[0]] = ('/' + asset);
      
    })

    fs.writeFileSync(file, JSON.stringify(manifest, null, 2))
    
})