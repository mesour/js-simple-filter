var	path = require('path');

module.exports = {
	entry: path.resolve(__dirname, 'src/index.jsx'),
	output: {
		library: 'Mesour simple-filter component',
		libraryTarget: 'umd',

		path: path.resolve(__dirname, 'dist'),
		filename: 'mesour.simple-filter.js'
	},
	module: {
		loaders: [
			{
				test: /.jsx$/,
				loader: 'babel',
				include: path.resolve(__dirname, 'src')
			},
			{
				test: /\.sass$/,
				loaders: ['style-loader', 'css-loader', 'sass-loader']
			}
		]
	},
	resolve: {
		extensions: ['', '.webpack.js', '.web.js', '.js', '.jsx']
	},
	devtool: 'eval'
};