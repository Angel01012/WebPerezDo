console.log(module);
console.log(__dirname);
console.log(__filename);

const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require('path');

module.exports = {
    entry: './src/index.js',
output: {
filename: 'bundle.js',
path: path.resolve(__dirname,'dist')
},
mode: "production",
plugins: [
    new HtmlWebpackPlugin({
    template: './src/index.html',
    filename: 'index.html',
    inject: 'body'
    })
]
}