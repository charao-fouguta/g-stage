const MiniCssExtractPlugin = require("mini-css-extract-plugin");

// [定数] webpack の出力オプションを指定します
// 'production' か 'development' を指定
const MODE = "production";

// ソースマップの利用有無(productionのときはソースマップを利用しない)
const enabledSourceMap = MODE === "development";

// jQueryで使用
const webpack = require('webpack');

module.exports = {
// モード値を production に設定すると最適化された状態で、
// development に設定するとソースマップ有効でJSファイルが出力される
mode: MODE,

// メインとなるJavaScriptファイル（エントリーポイント）
entry: "./src/index.js",
// ファイルの出力設定
output: {
	//  出力ファイルのディレクトリ名
	path: `${__dirname}`,
	// 出力ファイル名
	filename: "main.js",
},

module: {
	rules: [
	// Sassファイルの読み込みとコンパイル
	{
		test: /\.scss/, // 対象となるファイルの拡張子
		use: [
		// CSSファイルを書き出すオプションを有効にする
		{
			loader: MiniCssExtractPlugin.loader,
		},
		// CSSをバンドルするための機能
		{
			loader: "css-loader",
			options: {
			// オプションでCSS内のurl()メソッドの取り込みを禁止する
			url: false,
			// ソースマップの利用有無
			sourceMap: enabledSourceMap,

			// 0 => no loaders (default);
			// 1 => postcss-loader;
			// 2 => postcss-loader, sass-loader
			importLoaders: 2,
			},
		},
		// PostCSSのための設定
		{
			loader: "postcss-loader",
			options: {
			// PostCSS側でもソースマップを有効にする
			// sourceMap: true,
			postcssOptions: {
				plugins: [
				// Autoprefixerを有効化
				// ベンダープレフィックスを自動付与する
				["autoprefixer", { grid: true }],
				],
			},
			},
		},
		// Sassをバンドルするための機能
		{
			loader: "sass-loader",
			options: {
			// ソースマップの利用有無
			sourceMap: enabledSourceMap,
			},
		},
		],
	},
	{
		// 拡張子 .js の場合
		test: /\.js$/,
		use: [
		{
			// Babel を利用する
			loader: "babel-loader",
			// Babel のオプションを指定する
			options: {
			presets: [
				// プリセットを指定することで、ES2020 を ES5 に変換
				"@babel/preset-env",
			],
			},
		},
		],
	}
	],
},
// ES5(IE11等)向けの指定
	target: ["web", "es5"],
plugins: [
	// CSSファイルを外だしにするプラグイン
	new MiniCssExtractPlugin({
	// ファイル名を設定します
	filename: "style.css",
	}),
	new webpack.ProvidePlugin({
		$: 'jquery'
	})
],
};