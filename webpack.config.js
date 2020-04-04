const path = require('path');

module.exports = {
  entry: './dist/App.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundled.js'
  },
  mode: 'development',
  devServer: {
    before: function(app, server) {
      server._watch('./wordpress/**/*.php')
    },
    contentBase:  path.join(__dirname, 'dist'),
    hot:  true,
    port: 4000,
    host: '0.0.0.0'
  },
  watch: true
};