const path = require("path");

module.exports = {
  entry: "./templates/sellx/themes/base/bootstrap/scss/bootstrap.scss", // Deine SCSS-Datei
  output: {
    path: path.resolve(__dirname, "templates/sellx/themes/base/css"), // Zielverzeichnis
    filename: "main.css" // Dummy-Datei (nicht wichtig für SCSS)
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          "style-loader", // Fügt CSS als <style> in HTML ein (nicht nötig für JTL)
          "css-loader",   // Verarbeitet @import und URL() in CSS
          "postcss-loader", // Fügt Autoprefixer & Optimierungen hinzu
          "sass-loader"   // Wandelt SCSS in CSS um
        ]
      }
    ]
  },
  mode: "production"
};
