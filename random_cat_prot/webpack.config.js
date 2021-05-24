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
    "index": "./src/js/index.js"
    // workplan: "./src/js/workplan.js"
    // ,"gantt-style": "./src/js/gantt-style.js"
    // ,"user-master": "./src/js/user-master.js"
    // ,signin: "./src/js/signin.js"
    // ,"solution-master": "./src/js/solution-master.js"
    // ,"core_util": "./src/js/core_util.js"
    // ,"constants": "./src/js/constants.js"
    // ,"workplan-report": "./src/js/workplan-report.js"
  },
  output: {
    path: path.join(__dirname, "dist"),
    publicPath: "/js/",
    filename: "js/[name].js",
    library: ["com", "kedama"],
    libraryTarget: "umd"
  },
  // module: {
  //   rules: [
  //     {
  //       test: /\.scss$/,
  //       use: [
  //         "style-loader",
  //         "css-loader",
  //         "sass-loader"
  //       ]
  //     }
  //     ,{
  //       test: /\.css$/,
  //       use: [
  //         "style-loader",
  //         "css-loader",
  //       ]
  //     }
  //   ]
  // },
  plugins: [
    new CopyPlugin({
      patterns: [
        { from: 'src/html', to: "" } 
        ,{ from: 'src/static', to: "static" } 
        // ,{ from: 'src/favicon.ico', to: "public/favicon.ico" } 

        // // Deploy for wasp_cl
        // ,{ from: 'src/public', to: "../../wasp_cl/document-root/public" } 
        // ,{ from: 'dist/public', to: "../../wasp_cl/document-root/public" } 
        // ,{ from: 'src/html', to: "../../wasp_cl/templates" } 
      ],
      options: {
        concurrency: 1
      }
    })
  ],
  devtool: "inline-source-map"
};
