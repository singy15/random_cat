const path = require("path");
const CopyPlugin = require('copy-webpack-plugin');

module.exports = {
  mode: "development",
  devServer: {
    // open: true,
    // openPage: "index.html",
    contentBase: path.join(__dirname, "dist"),
    watchContentBase: true,
    port: 8080
  },
  // watchOptions: {
  //   ignored: [/node_modules/, /dist/],
  // },
  entry: {
    "index": "./src/js/index.js",
    "template": "./src/js/template.js",
    "style": "./src/js/style.js",
  },
  output: {
    path: path.join(__dirname, "dist"),
    publicPath: "/static/js/",
    filename: "static/js/[name].js",
    library: ["com", "kedama"],
    libraryTarget: "umd"
  },
  module: {
    rules: [
      // {
      //   test: /\.scss$/,
      //   use: [
      //     "style-loader",
      //     "css-loader",
      //     "sass-loader"
      //   ]
      // },
      {
        test: /\.css$/,
        use: [
          "style-loader",
          {
            loader: "css-loader",
            options: {
              url: false
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new CopyPlugin({
      patterns: [
        { from: 'src/php', to: "" } 
        ,{ from: 'src/static', to: "static" } 
        ,{ from: 'src/vendor', to: "vendor" } 
        ,{ from: 'src/htaccess', to: "" } 
      ],
      options: {
        concurrency: 1
      }
    })
  ],
  devtool: "inline-source-map"
};
