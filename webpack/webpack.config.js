require('dotenv').config();

const appRootDir = require('app-root-dir');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const WriteFilePlugin = require('write-file-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const path = require('path');

const isDev = process.env.npm_lifecycle_event.indexOf('dev') === 0;

const {
  WP_THEME_DIR = './web/app/themes/ueno-wordpress',
  WP_THEME_NAME = 'ueno-wordpress',
} = process.env;

const outputPath = path.resolve(appRootDir.get(), WP_THEME_DIR);

function removeNil(as) {
  return as.filter(a => a != null);
}

const wordpressCssBanner = `/*
Theme Name: ${WP_THEME_NAME}
Theme URI: https://github.com/loup-brun/patrickfleury.ca
Author: Louis-Olivier Brassard
Description: Thème personnalisé pour Patrick Fleury DGA. Conception web par Stéphanie Giroux, développement par Louis-Olivier Brassard.
Version: 0.1 (Beta)
License: WTFPL
License URI: http://www.wtfpl.net/about/
Author URI: https://loupbrun.ca
Text Domain: pfleury-wordpress
Domain Path: /languages/
Tags: Custom, Custom Job, Graphic Design, Photographic, Typographic, Colorful, Single-Column, Custom-Social, Featured-Images, Translation Ready`;

module.exports = {
  entry: removeNil([
    isDev ? 'webpack/hot/only-dev-server' : null,
    './src/js/main.js',
    './src/styles/style.scss',
  ]),

  output: {
    path: outputPath,
    publicPath: isDev ? 'http://localhost:3001/' : '',
    filename: 'js/[name].js',
    sourceMapFilename: '[file].map',
  },

  devServer: {
    hot: true,
    inline: true,
    port: 3001,
    host: 'localhost',
    noInfo: false,
    publicPath: '/',
    clientLogLevel: 'warning',
    headers: {
      'Access-Control-Allow-Origin': '*',
      'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
      'Access-Control-Allow-Headers': 'X-Requested-With, content-type, Authorization',
    },
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: 'babel-loader',
            query: {
              presets: [
                'stage-0',
                ['env', { es2015: { modules: false } }],
              ],
            },
          },
        ],
        exclude: /node_modules/,
      },

      {
        test: /\.(woff2?|eot|ttf|jpe?g|png|gif|ico|svg)$/,
        loader: 'file-loader',
      },

      {
        test: /\.scss$/,
        use: isDev ? [
          'style-loader',
          {
            loader: 'css-loader',
            query: {
              sourceMap: true,
            },
          },
          'postcss-loader',
          'sass-loader',
        ] : [
          ...ExtractTextPlugin.extract({
            fallback: ['style-loader'],
            use: [
              {
                loader: 'css-loader',
              },
              'postcss-loader',
              'sass-loader',
            ],
          }),
        ],
      },
    ],
  },

  devtool: isDev ? 'inline-source-map' : false,

  plugins: [
    new CopyWebpackPlugin([
      { context: 'src/assets', from: '**/*', to: 'assets' },
    ]),
    new webpack.DefinePlugin({
      IS_DEV: isDev,
    }),
  ].concat(
    isDev ? [
      new webpack.HotModuleReplacementPlugin(),
      new webpack.NamedModulesPlugin(),
      new webpack.NoEmitOnErrorsPlugin(),
      new WriteFilePlugin({ test: /^((?!hot-update).)*$/ }),
    ] : [
      new webpack.BannerPlugin({
        test: /style\.css/,
        banner: wordpressCssBanner,
        raw: true,
      }),
      new ExtractTextPlugin('style.css'),
      new webpack.LoaderOptionsPlugin({ minimize: true }),
      new webpack.optimize.UglifyJsPlugin({
        sourceMap: false,
        compress: {
          screw_ie8: true,
          warnings: false,
        },
        mangle: {
          screw_ie8: true,
          keep_fnames: true,
        },
        output: {
          comments: false,
          screw_ie8: true,
        },
      }),
    ]),
};
