// ==== CONFIGURATION ==== //

var THEME_NAME = 'mz', // Directory name of the theme
    THEME_PATH = './web/themes/' + THEME_NAME + '/'; // Path to your theme

// Project settings
module.exports = {
  path: {
    theme: THEME_PATH,
    src: THEME_PATH + 'src/', // Raw files of your theme
    build: THEME_PATH + 'dist/', // Processed files of your theme
    dist: './dist/',
    composer: './vendor/', // Composer packages
    modules: './node_modules/', // npm packages
  },
  theme: {
    name: THEME_NAME
  },
	proxy: 'localhost:8888'
}
